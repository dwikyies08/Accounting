$(document).ready(function () {
    lineChart();
    donutChart();
    pieChart();
    $(window).resize(function () {
        window.lineChart.redraw();
        window.donutChart.redraw();
        window.pieChart.redraw();
    });
});
function lineChart() {
    window.lineChart = Morris.Line({
        element: "line-chart",
        data: [
            { y: "2006", a: 100, b: 90 },
            { y: "2007", a: 75, b: 65 },
            { y: "2008", a: 50, b: 40 },
            { y: "2009", a: 75, b: 65 },
            { y: "2010", a: 50, b: 40 },
            { y: "2011", a: 75, b: 65 },
            { y: "2012", a: 100, b: 90 },
        ],
        xkey: "y",
        ykeys: ["a", "b"],
        labels: ["Series A", "Series B"],
        lineColors: ["#F76303", "#cdc6c6"],
        lineWidth: "3px",
        resize: true,
        redraw: true,
    });
}
function donutChart() {
    window.donutChart = Morris.Donut({
        element: "donut-chart",
        data: [
            { label: "Normal Room", value: 50 },
            { label: "Ac Room", value: 25 },
            { label: "Special Room", value: 5 },
            { label: "DoubleBed room", value: 10 },
            { label: "Video Room", value: 10 },
        ],
        backgroundColor: "#f2f5fa",
        labelColor: "#009688",
        colors: ["#0BA462", "#39B580", "#67C69D", "#95D7BB"],
        resize: true,
        redraw: true,
    });
}
function pieChart() {
    var paper = Raphael("pie-chart");
    paper.piechart(
        100,
        100,
        90,
        [18.373, 18.686, 2.867, 23.991, 9.592, 0.213],
        {
            legend: [
                "Windows/Windows Live",
                "Server/Tools",
                "Online Services",
                "Business",
                "Entertainment/Devices",
                "Unallocated/Other",
            ],
        }
    );
}
