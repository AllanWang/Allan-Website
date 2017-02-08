const baseOpacity = 0.7;
const THEMER = 'themer', DEVELOPER = 'developer', STUDENT = 'student', BASE = 'base';
const wData = getLogoData(300, 200, 50);
let last = '', current = '';
let svg: Snap.Paper;
let hasThemer = false, hasDeveloper = false, hasStudent = false;
const developerData = [
    [20, 100, 43, 31],
    [43, 169, 20, 100],
    [257, 31, 280, 100],
    [280, 100, 257, 169]
];

const developerSpeed = 200, studentSpeed = 300;
const sData = getM(300, 200, 50);
function getGraduationHat(width: number, height: number, padding: number = -1): number[][] {
    if (padding < 5) padding = width / 10;
    const middleWidth = width / 2;
    const axis = padding;
    const sizeWidth = width / 6;
    const widthTilt = sizeWidth / 20;
    const sizeHeight = axis / 4;
    const heightTilt = sizeHeight / 10;
    return [
        [middleWidth - sizeWidth, axis + heightTilt,
            middleWidth - widthTilt, axis - sizeHeight,
            middleWidth + sizeWidth, axis - heightTilt,
            middleWidth + widthTilt, axis + sizeHeight
            //since there's filling, don't need to reconnect
        ],
    ];
}

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
            last = current;
            if (current == id) {
                current = BASE;
            } else {
                current = id;
            }
            bItems.not($(this)).removeClass('selected');
            $(this).addClass('selected');
            cContainer.removeClass().addClass(id);
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

function restore(): void {
    setOpacity(Snap('#w-0'), baseOpacity);
    setOpacity(Snap('#w-1'), baseOpacity);
    setOpacity(Snap('#w-2'), baseOpacity);
    setOpacity(Snap('#w-3'), baseOpacity);
    if (hasDeveloper) {
        hasDeveloper = false;
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
        if (current != STUDENT) {
            const w3 = wData[3];
            Snap('#w-3').animate({
                d: `M${w3[0]},${w3[1]} L${w3[2]},${w3[3]}`,
                opacity: 0.7,
                strokeWidth: 8
            }, developerSpeed, mina.easein);
        }
    }
    if (hasStudent) {
        hasStudent = false;
        const w3 = wData[3];
        const max = (current == DEVELOPER) ? sData.length - 1 : sData.length;
        for (let i = 0; i < max; i++) {
            Snap('#w-' + i).animate({
                d: getPath(wData[i])
            }, studentSpeed, mina.easein);
        }
    }
}

function showThemer(): void {
    if (hasThemer) return;
    console.log(THEMER);
    hasThemer = true;
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
            opacity: 1,
        }, developerSpeed, mina.easein);
    }
    const data = wData[3].slice(0);
    const extra = 15;
    data[0] -= extra;
    data[1] += 3 * extra;
    data[2] += extra;
    data[3] -= 3 * extra;
    Snap('#w-3').animate({
        d: getPath(data),
        opacity: baseOpacity,
        strokeWidth: 8
    }, developerSpeed, mina.easein);
}

function showStudent(): void {
    if (hasStudent) return;
    hasStudent = true;
    // svg.append(Snap('#w-3')); //bring hat to front
    // Snap('#w-3').animate({
    //     d: getPath(sData[0]),
    //     strokeWidth: 0,
    //     opacity: 1,
    //     fill: '#000' //precaution; here by default
    // }, studentSpeed);
    for (let i = 0; i < sData.length; i++) {
        Snap('#w-' + i).animate({
            d: getPath(sData[i])
        }, studentSpeed, mina.easein);
    }

}
