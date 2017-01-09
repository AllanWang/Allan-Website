'use strict';

var doStuff = function doStuff() {
    var name = 'world';
    document.getElementById('output').innerHTML = 'Hello ' + name;
    // document.getElementById('version').innerHTML = Babel.version;
};
doStuff();