import Paper = Snap.Paper;
const themeColor = '#0097A7';
const lineAttr = {
    stroke: themeColor,
    strokeWidth: 15,
    strokeLinecap: "round",
    opacity: 0
};
let svg: Snap.Paper;
let developer: Snap.Element[] = [];
const developerData = [
    [20, 100, 43, 31],
    [20, 100, 43, 169],
    [280, 100, 257, 31],
    [280, 100, 257, 169]
];
const developerSpeed = 200;

$(function () {
    svg = Snap('#aw-svg');
    const bItems = $("#b-row").find(".btn-flat");
    const cContainer = $('#w-content-container');
    bItems.each(function (index) {
        $(this).click(function () {
            bItems.not($(this)).removeClass('selected');
            $(this).addClass('selected');
            const id = $(this).attr('id').split('-')[1]; //buttons have b-x notation; get x
            cContainer.removeClass().addClass(id);
            hideAll();
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

function hideAll() {
    if (developer.length != 0) {
        for (let path of developer) {
            path.animate({
                opacity: 0
            }, developerSpeed, mina.linear, function () {
                path.remove();
            });
        }
        developer = [];
    }
}


function showDeveloper() {
    if (developer.length != 0) return;
    console.log('showdev');
    for (const data of developerData) {
        let line = svg.polyline(`M${data[0]},${data[1]} L${data[0]},${data[1]}`);
        line.attr(lineAttr);
        line.animate({
            d: `M${data[0]},${data[1]} L${data[2]},${data[3]}`,
            opacity: 1
        }, developerSpeed);
        developer.push(line);
    }
}

