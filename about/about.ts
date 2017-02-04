$(function () {
    setTimeout(function () {
        logoEntrance();
    }, 500);
});

const wAI = {
    strokeWidth: 15,
    strokeLinecap: "round",
    stroke: "#000",
    opacity: 0
};

const w = [
    ["M10,10", "L40,100"],
    ["M100,100", "L130,10"],
    ["M40,100", "L70,10"],
    ["M70,10", "L100,100"]
];

let logo: Snap.Paper;

function drawW(i: number) {
    if (i >= w.length) return;
    let wi = logo.path(w[i][0]);
    wi.attr(wAI);
    wi.animate({
        d: w[i][0] + " " + w[i][1],
        opacity: 0.7,
    }, 500, mina.linear, function () {
        drawW(i + 1);
    });
}

function logoEntrance() {
    logo = Snap("#aw-svg");

    drawW(0);
}
