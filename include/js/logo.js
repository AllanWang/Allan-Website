var wLogoData = getLogoData(250, 100);
var hLogoData = getHouseData(250, 100);
function getLogoData(width, height, padding) {
    if (padding === void 0) { padding = -1; }
    if (padding < 5)
        padding = width / 10;
    var minHeight = padding, maxHeight = height - padding;
    var lineWidth = (maxHeight - minHeight) / 3, middle = width / 2;
    return [
        [middle - 2 * lineWidth, minHeight, middle - lineWidth, maxHeight],
        [middle - lineWidth, maxHeight, middle, minHeight],
        [middle, minHeight, middle + lineWidth, maxHeight],
        [middle + lineWidth, maxHeight, middle + 2 * lineWidth, minHeight],
    ];
}
function getHouseData(width, height, padding) {
    if (padding === void 0) { padding = -1; }
    if (padding < 5)
        padding = width / 10;
    var minHeight = padding, maxHeight = height - padding, split = (maxHeight + minHeight) / 2;
    var lineWidth = (maxHeight - minHeight) / 3, middle = width / 2;
    return [
        [middle - 1.4 * lineWidth, split, middle - 1.4 * lineWidth, maxHeight],
        [middle - 2 * lineWidth, split, middle, minHeight],
        [middle, minHeight, middle + 2 * lineWidth, split],
        [middle + 1.4 * lineWidth, split, middle + 1.4 * lineWidth, maxHeight]
    ];
}
/**
 * Gets path data, starting with M with proceeding L's
 * @param data array of points
 * @returns {string} resulting path
 */
function getPath(data) {
    if (data.length % 2 != 0)
        throw 'Bad path; odd points';
    var path = "M" + data[0] + "," + data[1];
    for (var i = 2; i < data.length - 1; i += 2) {
        path += " L" + data[i] + "," + data[i + 1];
    }
    return path;
}
function transformSet(svg, data, key, duration, extras) {
    if (duration === void 0) { duration = 300; }
    if (duration < 0)
        duration = 300;
    for (var i in data) {
        var path = Snap('#' + key + '-' + i);
        var animation = {
            d: getPath(data[i])
        };
        if (extras) {
            extras(animation);
        }
        path.animate(animation, duration);
    }
}
/**
 * Generates attributes for paths
 * @param i
 * @param key
 * @param color
 * @param extras
 * @returns {{id: string, stroke: string, strokeWidth: number, strokeLinecap: string, opacity: number}}
 */
function lineAttr(i, key, color, extras) {
    if (color === void 0) { color = themeColor; }
    var data = {
        id: key + '-' + i,
        stroke: color,
        strokeWidth: 8,
        strokeLinecap: "round",
        opacity: 0.7
    };
    if (extras) {
        extras(data, i);
    }
    return data;
}
$(function () {
    var svg = Snap('#nav-logo');
    for (var i in wLogoData) {
        var path = svg.path(getPath(wLogoData[i]));
        path.attr(lineAttr(parseInt(i), 'nav-logo', themeColor, function (data, index) {
            if (index != 1 && index != 2)
                data['stroke'] = '#000';
        }));
    }
    svg.append(Snap('#nav-logo-2')); //bring to front
    $('#nav-logo').hover(function (e) {
        transformSet(svg, hLogoData, 'nav-logo', -1, function (data) {
            data['strokeWidth'] = 3;
        });
    }, function (e) {
        transformSet(svg, wLogoData, 'nav-logo', -1, function (data) {
            data['strokeWidth'] = 8;
        });
    });
});
//# sourceMappingURL=logo.js.map