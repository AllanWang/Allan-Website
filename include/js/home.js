var themeColor = '#0097A7';
var lineAttr = {
    stroke: themeColor,
    strokeWidth: 15,
    strokeLinecap: "round",
    opacity: 0
};
var svg;
var developer = [];
var developerData = [
    [20, 100, 43, 31],
    [20, 100, 43, 169],
    [280, 100, 257, 31],
    [280, 100, 257, 169]
];
var developerSpeed = 200;
$(function () {
    svg = Snap('#aw-svg');
    var bItems = $("#b-row").find(".btn-flat");
    var cContainer = $('#w-content-container');
    bItems.each(function (index) {
        $(this).click(function () {
            bItems.not($(this)).removeClass('selected');
            $(this).addClass('selected');
            var id = $(this).attr('id').split('-')[1]; //buttons have b-x notation; get x
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
    });
});
function hideAll() {
    if (developer.length != 0) {
        var _loop_1 = function(path) {
            path.animate({
                opacity: 0
            }, developerSpeed, mina.linear, function () {
                path.remove();
            });
        };
        for (var _i = 0, developer_1 = developer; _i < developer_1.length; _i++) {
            var path = developer_1[_i];
            _loop_1(path);
        }
        developer = [];
    }
}
function showDeveloper() {
    if (developer.length != 0)
        return;
    console.log('showdev');
    for (var _i = 0, developerData_1 = developerData; _i < developerData_1.length; _i++) {
        var data = developerData_1[_i];
        var line = svg.polyline("M" + data[0] + "," + data[1] + " L" + data[0] + "," + data[1]);
        line.attr(lineAttr);
        line.animate({
            d: "M" + data[0] + "," + data[1] + " L" + data[2] + "," + data[3],
            opacity: 1
        }, developerSpeed);
        developer.push(line);
    }
}
//# sourceMappingURL=home.js.map