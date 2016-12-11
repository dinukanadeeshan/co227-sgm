/**
 * Created by HP on 2016-12-09.
 */


// $('#btn_click').on('click', function () {

function drawGraphWith1stInClass(subjects, terms, marks, class1stMarks) {
    console.log('start the function');
    try {
        var st = (terms.length - 1) * subjects.length;
        var studentMarks = [];
        // var class1stMarksD = [];
        var j = 0;
        for (i = st; i < marks.length; i++) {
            studentMarks.push(parseFloat(marks[i]));
            // classAvgD.push(classAvg[j]);
            j++;

        }
        ;

        console.log(class1stMarks);
    } catch (e) {
        console.log(e);
    }


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
            categories: subjects,
            reversed: true,

            labels: {
                step: 1
            }
        }, { // mirror axis on right side
            opposite: true,
            reversed: true,
            categories: subjects,
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
                return '<b>' + this.series.name + ' : For - ' + this.point.category + '</b><br/>' +
                    'Marks: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
            }
        },

        series: [{
            name: '1st of class',
            data: class1stMarks
        }, {
            name: $("#studentName").text() + ' (10th of class)',
            data: studentMarks
        }]
    });

}

function drawClassAvgGraph(subjects, term, marks, classAvg) {

    // console.log('Come here');
    var st = (term.length - 1) * subjects.length;
    var studentMarks = [];
    var classAvgD = [];
    var j = 0;
    for (i = st; i < marks.length; i++) {
        studentMarks.push(parseFloat(marks[i]));
        classAvgD.push(classAvg[j]);
        j++;

    }
    ;

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
            categories: subjects,
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
            data: studentMarks,


        }, {
            name: 'Class Average',
            type: 'spline',
            data: classAvg,
            tooltip: {
                valueSuffix: null
            }
        }]
    });
}


function drawLastTermMarksGraph(subjects, terms, marks, grade) {
    var marksDraw = [];
    var c = 0;
    for (j = 0; j < terms.length; j++) {
        var temp = [];
        for (i = 0; i < subjects.length; i++) {
            temp.push(parseInt(marks[c]));
            c++;
        }
        marksDraw.push(temp);

    }


    Highcharts.chart('allmarkschart', {
        chart: {
            type: 'bar',
            inverted: true,
            polar: false
        },
        title: {
            text: 'All marks in ' + grade
        },
        subtitle: {
            text: ''
        },
        xAxis: {

            categories: subjects,
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
            name: terms[0] + ' Term',
            data: marksDraw[0]
        }, {
            name: terms[1] + ' Term',
            data: marksDraw[1]
        }, {
            name: terms[2] + ' Term',
            data: marksDraw[2]
        }]
    });


}

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


function drawAvgMarksGraphsForAll(grades, subjects, series) {

    console.log(series);
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
            categories: grades
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
        series: series
    });


}
// });
//
//
// [{
//     name: 'Sinhala',
//     data: [25, 30, 95, 45, 82, 25]
// }, {
//     name: 'Maths',
//     data: [52, 65, 33, 83, 39, 96]
// }, {
//     name: 'Buddhism',
//     data: [91, 62, 35, 84, 75, 70]
// }, {
//     name: 'History',
//     data: [86, 79, 43, 90, 59, 78]
// }, {
//     name: 'Science',
//     data: [86, 79, 43, 90, 39, 99]
// }, {
//     name: 'English',
//     data: [92, 64, 35, 54, 35, 70]
// }, {
//     name: 'Art',
//     data: [23, 13, 24, 45, 34, 23]
// }, {
//     name: 'Health',
//     data: [78, 89, 79, 80, 90, 100]
// }, {
//     name: 'Tech. Skills',
//     data: [null, null, null, null, 56, 70]
// }]