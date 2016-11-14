var O_na = 'N/A', O_1 = 'O(1)', O_logn = 'O(log(n))', O_n = 'O(n)', O_nlogn = 'O(n log(n))', O_n_2 = 'O(n^2)';

var data = [
    createData('Array', O_1, O_n, O_n, O_n),
    createData('Stack', O_n, O_n, O_1, O_1)
];

function createData(key, a, s, i, d, a2, s2, i2, d2) {
    var obj = {};
    obj[key].best = createSearchData(a, s, i, d);
    if (a2 == null) {
        obj[key].worst = obj[key].best;
    } else {
        obj[key].worst = createSearchData(a2, s2, i2, d2);
    }
    return obj;
}
function createSearchData(a, s, i, d) {
    return {
        access: a,
        search: s,
        insertion: i,
        deletion: d
    };
}

