'use strict';

var test;
var current = '';
var target = '';
var currentIndex = -1;
var pause = 30;
var running = false;

var words = ['This is a test', 'Hello test hello'];

$(function () {
    test = $('#testt');
    setString('this is a big test', function () {
        setTimeout(function () {
            setString('hello world');
            setTimeout(function () {
                console.log('next');
                setString('this is another one');
            }, 100);
        }, 2000);
    });
});

function setString(word, callback) {
    target = word;
    if (!running) {
        running = true;
        setStringRecursive(callback);
    }
}

function setStringRecursive(callback) {
    if ((target == null && current.length == 0) || (target == current)) {//target matches current
        running = false;
        if (callback !== undefined) callback();
        return;
    }
    setTimeout(function () {
        if (target != null && current.length < target.length && target.slice(0, current.length) == current) {
            //on the right track, append another character
            setText(current + target.charAt(current.length));
        } else { //delete character
            setText(current.slice(0, current.length - 1));
        }
        setStringRecursive(callback);
    }, pause);
}

function setText(text) {
    current = text;
    console.log(current);
    test.text(current);
}