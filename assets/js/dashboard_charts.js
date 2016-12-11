/**
 * Created by HP on 2016-12-09.
 */


// $('#btn_click').on('click', function () {

function drawRankInClassGraph(data) {
    Highcharts.chart('rank_in_class', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Rank in the class'
        },
        subtitle: {
            text: 'out of 40 students'
        },
        xAxis: {
            categories: ['Grade-6', 'Grade-7', 'Grade-8', 'Grade-9', 'Grade-10', 'Grade-11']
        },
        yAxis: {
            reversed: true,
            min: 1,

            title: {
                text: 'Place '
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: false
                },
                enableMouseTracking: true
            }
        },
        series: [{
            name: ' ',
            data: [23, 19, 15, 14, 10]
        },]
    });
}


function drawGraphs(data) {


    Highcharts.chart('marksChart', {
        title: {
            text: 'Average marks for each subject',
            x: -20 //center
        },
        subtitle: {
            text: null,
            x: -20
        },
        xAxis: {
            title: {
                text: 'Grades'
            },
            categories: ['Grade-6', 'Grade-7', 'Grade-8', 'Grade-9', 'Grade-10', 'Grade-11']
        },
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Marks (%)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        // tooltip: {
        //     valueSuffix: '°C'
        // },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Sinhala',
            data: [25, 30, 95, 45, 82, 25]
        }, {
            name: 'Maths',
            data: [52, 65, 33, 83, 39, 96]
        }, {
            name: 'Buddhism',
            data: [91, 62, 35, 84, 75, 70]
        }, {
            name: 'History',
            data: [86, 79, 43, 90, 59, 78]
        }, {
            name: 'Science',
            data: [86, 79, 43, 90, 39, 99]
        }, {
            name: 'English',
            data: [92, 64, 35, 54, 35, 70]
        }, {
            name: 'Art',
            data: [23, 13, 24, 45, 34, 23]
        }, {
            name: 'Health',
            data: [78, 89, 79, 80, 90, 100]
        }, {
            name: 'Tech. Skills',
            data: [null, null, null, null, 56, 70]
        }]
    });


    Highcharts.chart('allmarkschart', {
        chart: {
            type: 'bar',
            inverted: true,
            polar: false
        },
        title: {
            text: 'All marks in Grade 10'
        },
        subtitle: {
            text: ''
        },
        xAxis: {

            categories: ['sinhala', 'Maths', 'Buddhism', 'History', 'English', 'Science', 'Art', 'Health', 'Tech.Skills'],
            title: {
                text: 'Subjects'
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Marks (%) ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' %'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'First Term',
            data: [17, 31, 63, 63, 68, 80, 56, 78, 67]
        }, {
            name: 'Second term',
            data: [33, 56, 97, 48, 69, 84, 45, 79, 98]
        }, {
            name: 'Third term',
            data: [52, 54, 50, 74, 38, 88, 34, 56, 23]
        }]
    });


    Highcharts.chart('classavgchart', {
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Average marks of student with class average'
        },
        subtitle: {
            text: ''
        },
        xAxis: [{
            categories: ['sinhala', 'Maths', 'Buddhism', 'History', 'English', 'Science', 'Art', 'Health', 'Tech.Skills'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            min: 0,
            max: 100,
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'Class Average',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            min: 0,
            max: 100,
            title: {
                text: 'Marks of student',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 120,
            verticalAlign: 'middle',
            y: 100,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Marks of student',
            type: 'column',
            yAxis: 1,
            data: [46, 71, 64, 92, 44, 76, 56, 85, 64],


        }, {
            name: 'Class Average',
            type: 'spline',
            data: [50, 69.5, 53.2, 45.3, 42.6, 67.6, 52, 65, 39.9],
            tooltip: {
                valueSuffix: null
            }
        }]
    });

    Highcharts.chart('cmpfirstchart', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Marks variation with 1st in class'
        },
        subtitle: {
            text: 'Subject marks in last term test'
        },
        xAxis: [{
            categories: ['sinhala', 'Maths', 'Buddhism', 'History', 'English', 'Science', 'Art', 'Health', 'Tech.Skills'],
            reversed: true,

            labels: {
                step: 1
            }
        }, { // mirror axis on right side
            opposite: true,
            reversed: true,
            categories: ['sinhala', 'Maths', 'Buddhism', 'History', 'English', 'Science', 'Art', 'Health', 'Tech.Skills'],
            linkedTo: 0,
            labels: {
                step: 1
            }
        }],
        yAxis: {
            title: {
                text: null
            },
            max: 100,
            min: -100,
            labels: {
                formatter: function () {
                    return Math.abs(this.value) + '%';
                }
            }
        },

        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                    'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
            }
        },

        series: [{
            name: '1st of class',
            data: [-46, -71, -64, -92, -44, -76, -56, -85, -64]
        }, {
            name: 'Alec - (10th of class)',
            data: [50, 69.5, 53.2, 45.3, 42.6, 67.6, 52, 65, 39.9]
        }]
    });

}
// });

