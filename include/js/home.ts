const baseOpacity = 0.7;
const THEMER = 'themer', DEVELOPER = 'developer', STUDENT = 'student', BASE = 'base';
const wData = getLogoData(300, 200, 50);
let last = '', current = '';
let svg: Snap.Paper;
const developerData = [
    [20, 100, 43, 31],
    [43, 169, 20, 100],
    [257, 31, 280, 100],
    [280, 100, 257, 169]
];

const speed = 300;
const sData = getM(300, 200, 50);

/**
 * Minimalistic difference from W
 * @param width
 * @param height
 * @param padding
 * @returns {[number[],number[],number[],number[]]}
 */
function getM(width: number, height: number, padding: number = -1): number[][] {
    if (padding < 5) padding = width / 10;
    const minHeight = padding, maxHeight = height - padding, middleHeight = (minHeight + maxHeight) * 2 / 3;
    const lineWidth = (maxHeight - minHeight) / 3, middle = width / 2;
    return [
        [middle - 1.5 * lineWidth, minHeight, middle - 1.5 * lineWidth, maxHeight],
        [middle, middleHeight, middle - 1.5 * lineWidth, minHeight],
        [middle + 1.5 * lineWidth, minHeight, middle, middleHeight],
        [middle + 1.5 * lineWidth, maxHeight, middle + 1.5 * lineWidth, minHeight],
    ];
}

$(function () {
    setTimeout(function () {
        loadLogo();
    }, 1000);
});

function loadLogo() {
    svg = Snap('#aw-svg');
    const bItems = $("#b-row").find(".btn-flat");
    const cContainer = $('#w-content-container');
    showW(0, function () {
        // svg.append(Snap('#w-2')); //bring \ above last /
        setTimeout(function () {
            finalW();
            //bring buttons into view
            bItems.each(function (i) {
                $(this).delay(i * 100).queue(function () {
                    $(this).addClass('show');
                });
            });
        }, 1500);
    });
    bItems.each(function (index) {
        $(this).click(function () {
            const id = $(this).attr('id').split('-')[1]; //buttons have b-x notation; get x
            last = current;
            if (current == id) {
                current = BASE;
                bItems.removeClass('selected');
            } else {
                current = id;
                bItems.not($(this)).removeClass('selected');
                $(this).addClass('selected');
            }
            cContainer.removeClass().addClass(current);
            restore();
            switch (current) {
                case BASE:
                    return;
                case THEMER:
                    showThemer();
                    break;
                case DEVELOPER:
                    showDeveloper();
                    break;
                case STUDENT:
                    showStudent();
                    break;
                default:
                    console.log('Invalid key', id);
                    return;
            }
        });
    })
}

/**
 * Show W logo line by line
 * @param i index to show
 * @param callback function after everything is finished
 * @returns {void}
 */
function showW(i: number, callback: Function): void {
    if (i >= wData.length) return callback();
    const data = wData[i];
    let line = svg.path(`M${data[0]},${data[1]} L${data[0]},${data[1]}`);
    line.attr(lineAttr(i, 'w', '#000'));
    line.animate({
        d: getPath(data),
        opacity: baseOpacity
    }, 600, mina.linear);
    setTimeout(function () {
        showW(i + 1, callback);
    }, 200);
}

function toThemeColor(element: Snap.Element, speed: number): void {
    element.animate({
        stroke: themeColor
    }, speed, mina.linear);
}

function finalW(): void {
    const speed = 500;
    toThemeColor(Snap('#w-1'), speed);
    toThemeColor(Snap('#w-2'), speed);
}

function setOpacity(element: Snap.Element, opacity: number, duration: number = 300): void {
    element.animate({
        opacity: opacity
    }, duration);
}

/**
 * Set svg back to the correct state before current is applied
 */
function restore(): void {
    // setOpacity(Snap('#w-0'), baseOpacity);
    // setOpacity(Snap('#w-1'), baseOpacity);
    // setOpacity(Snap('#w-2'), baseOpacity);
    // setOpacity(Snap('#w-3'), baseOpacity);
    switch (last) {
        case DEVELOPER:
            for (const i in developerData) {
                let path = Snap('#dev-' + i);
                let data = developerData[i];
                path.animate({
                    d: `M${data[2]},${data[3]} L${data[2]},${data[3]}`,
                    opacity: 0
                }, speed, mina.easein, function () {
                    path.remove();
                });
            }
            setOpacity(Snap('#w-0'), baseOpacity);
            setOpacity(Snap('#w-1'), baseOpacity);
            setOpacity(Snap('#w-2'), baseOpacity);
            if (current != STUDENT) {
                const w3 = wData[3];
                Snap('#w-3').animate({
                    d: `M${w3[0]},${w3[1]} L${w3[2]},${w3[3]}`,
                    opacity: baseOpacity,
                    strokeWidth: 8
                }, speed, mina.easein);
            }
            break;
        case STUDENT:
            const max = (current == DEVELOPER) ? sData.length - 1 : sData.length;
            for (let i = 0; i < max; i++) {
                const params = {
                    d: getPath(wData[i])
                };
                if (i == 1 || i == 2) params['stroke'] = themeColor;
                Snap('#w-' + i).animate(params, speed, mina.easein);
            }
            break;
    }
}

function showThemer(): void {

}


function showDeveloper(): void {
    setOpacity(Snap('#w-0'), 0.3);
    setOpacity(Snap('#w-1'), 0.3);
    setOpacity(Snap('#w-2'), 0.3);
    for (const i in developerData) {
        const data = developerData[i];
        let line = svg.path(`M${data[0]},${data[1]} L${data[0]},${data[1]}`);
        line.attr(lineAttr(parseInt(i), 'dev', themeColor));
        line.animate({
            d: getPath(data),
            opacity: 1,
        }, speed, mina.easein);
    }
    const data = wData[3].slice(0);
    const extra = 15;
    data[0] -= extra;
    data[1] += 3 * extra;
    data[2] += extra;
    data[3] -= 3 * extra;
    Snap('#w-3').animate({
        d: getPath(data),
        opacity: 1
    }, speed, mina.easein);
}

function showStudent(): void {
    for (let i = 0; i < sData.length; i++) {
        const params = {
            d: getPath(sData[i]),
            opacity: baseOpacity
        };
        if (i == 1 || i == 2) params['stroke'] = "#E8002D";
        Snap('#w-' + i).animate(params, speed, mina.easein);
    }
}

