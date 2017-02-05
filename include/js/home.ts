const wData = getLogoData(300, 200, 50);
let last = '';
let svg: Snap.Paper;
let developer: Snap.Element[] = [];
let hasDeveloper = false;
const developerData = [
    [20, 100, 43, 31],
    [43, 169, 20, 100],
    [257, 31, 280, 100],
    [280, 100, 257, 169]
];
const developerSpeed = 200;

$(function () {
    svg = Snap('#aw-svg');
    const bItems = $("#b-row").find(".btn-flat");
    const cContainer = $('#w-content-container');
    showW(0, function () {
        svg.append(Snap('#w-2')); //bring \ above last /
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
            if (last == id) return; //same button; don't respond
            last = id;
            bItems.not($(this)).removeClass('selected');
            $(this).addClass('selected');
            cContainer.removeClass().addClass(id);
            restore();
            switch (id) {
                case 'themer':
                    break;
                case 'developer':
                    showDeveloper();
                    break;
                case 'student':
                    break;
                default:
                    console.log('Invalid key', id);
                    return;
            }
        });
    })
});

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
        opacity: 0.7
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

function restore(): void {
    setOpacity(Snap('#w-0'), 0.7);
    setOpacity(Snap('#w-1'), 0.7);
    setOpacity(Snap('#w-2'), 0.7);
    setOpacity(Snap('#w-3'), 0.7);
    if (hasDeveloper) {
        for (const i in developerData) {
            let path = Snap('#dev-' + i);
            let data = developerData[i];
            path.animate({
                d: `M${data[2]},${data[3]} L${data[2]},${data[3]}`,
                opacity: 0
            }, developerSpeed, mina.easein, function () {
                path.remove();
            });
        }
        developer = [];
        const w4 = wData[3];
        Snap('#w-3').animate({
            d: `M${w4[0]},${w4[1]} L${w4[2]},${w4[3]}`
        }, developerSpeed, mina.easein);
        hasDeveloper = false;
    }
}


function showDeveloper(): void {
    if (hasDeveloper) return;
    hasDeveloper = true;
    setOpacity(Snap('#w-0'), 0.3);
    setOpacity(Snap('#w-1'), 0.3);
    setOpacity(Snap('#w-2'), 0.3);
    for (const i in developerData) {
        const data = developerData[i];
        let line = svg.path(`M${data[0]},${data[1]} L${data[0]},${data[1]}`);
        line.attr(lineAttr(parseInt(i), 'dev', themeColor));
        line.animate({
            d: getPath(data),
            opacity: 1
        }, developerSpeed, mina.easein);
    }
    const data = wData[3].slice(0);
    const extra = 15;
    data[0] -= extra;
    data[1] += 3 * extra;
    data[2] += extra;
    data[3] -= 3 * extra;
    Snap('#w-3').animate({
        d: getPath(data)
    }, developerSpeed, mina.easein);
}
