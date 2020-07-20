const CHART = document.getElementById("lineChart");
var lineChart = new Chart(CHART, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{

        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
        data: [10, 20, 30, 40, 50, 60],
    }]
},
options: {
scales: {
    xAxes: [{
        gridLines: {
            offsetGridLines: true
        }
    }]
}
}
});
