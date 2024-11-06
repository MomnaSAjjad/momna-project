$(function() {
    "use strict";

  // import { ChartDataLabels } from "chart.js";

// chart 1

  var chart1 = document.getElementById("chart1");
  if(chart1 != null){
  chart1 = chart1.getContext('2d');
  var color1 = '#BBB0B8';
  var color2 = '#9C8FE3';
  var color3 = '#4B3E9E';

      var myChart = new Chart(chart1, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [{
            label: 'Active',
            data: [5, 3, 5, 2,1, 6, 3, 5,8, 8, 4,2],
            borderColor: color1,
            backgroundColor: color1,
            hoverBackgroundColor: color1,
            pointRadius: 0,
            fill: false,
            borderRadius: 0,
            borderWidth: 0
          }, {
            label: 'About to end',
            data: [2, 4, 6, 1,2, 1, 4, 2,6, 3,2, 1],
            borderColor: color2,
            backgroundColor: color2,
            hoverBackgroundColor: color2,
            pointRadius: 0,
            fill: false,
            borderRadius: 0,
            borderWidth: 0
          },{
            label: 'Expired this year',
            data: [0, 1, 0, 2,2, 1, 1, 1,2, 0,0, 0],
            borderColor: color3,
            backgroundColor: color3,
            hoverBackgroundColor: color3,
            pointRadius: 0,
            fill: false,
            borderRadius: 0,
            borderWidth: 0
          }]
        },
    
        options: {
          maintainAspectRatio: false,
          barPercentage: 0.8,
          categoryPercentage: 0.8,
          plugins: {
            legend: {
              // display: false,
            }
          },
          scales: {
            y: {
              grace: '5%',
              beginAtZero: true,
              ticks: {
                // forces step size to be 50 units
                // min: 10,
                // max: 10,
                stepSize: 1,
              }
            }
          }
        }
      });
    }







// chart 2
 var chart2 = document.getElementById("chart2");
 if(chart2 != null){
  chart2 = chart2.getContext('2d');

  var color1 = '#718C71';
  var color2 = '#63AEFF';
  var color3 = '#1CB079';
  var color4 = '#C3DE39';
  var color5 = '#F5C44A';
  var color6 = '#EB6363';
      var myChart = new Chart(chart2, {
        type: 'doughnut',
        data: {
          labels: ["IT", "Leasing", "Office", "Phones", "Staff", "Employment"],
          datasets: [{
            backgroundColor: [
              // gradientStroke1,
              color1,
              color2,
              color3,
              color4,
              color5,
              color6
            ],
            data: [11, 10, 6, 4, 2, 5],
            borderWidth: [1, 1, 1, 1, 1, 1],
            hoverOffset: 5
          }]
        },
        options: {
          maintainAspectRatio: false,
          cutout: 82,
          plugins: {
            legend: {
                display: false,
             }
          }
       }
      });

}
//  var ctx = document.getElementById("chart2");
//  if(ctx != null){

//   function sumOfDataVal(dataArray) {
//       return dataArray['datasets'][0]['data'].reduce(function (sum, value) {
//           return sum + value;
//       }, 0);
//   }
//   ctx = ctx.getContext('2d');

//   var color1 = '#2b3866';
//   var color2 = '#6cb2ff';
//   var color3 = '#58c66c';
//   var color4 = '#88ae67';
//   var color5 = '#dccf5e';
//   var color6 = '#fba26f';
//   var color7 = '#f7666a';
//   var color8 = '#e490b2';
//   var color9 = '#6458b7';
//   var color10 = '#9889ce';
//   var color11 = '#707070';
//   var color12 = '#a4a4a4';

//   var dataResponse = {
//     datasets: [{
//       data: [25, 10, 6, 4, 2, 1],
//       backgroundColor: [
//         color1,
//         color2,
//         color3,
//         color4,
//         color5,
//         color6
//       ],
//       // borderColor: '#25272f',
//       borderWidth: 1,
//       hoverOffset: 5,
//       hoverBorderWidth: 3
//     }],

//     // These labels appear in the legend and in the tooltips when hovering different arcs
//     labels: ["IT", "Leases", "Office", "Phones", "Vehicles", "Employment"],
// };
// Chart.register(Tooltips);
//     Chart.defaults.global.tooltips.custom = function (tooltip) {
//         // Tooltip Element


//         var tooltipEl = document.getElementById('chartjs-tooltip');

//         // Hide if no tooltip
//         if (tooltip.opacity === 0) {
//             tooltipEl.style.color = "#464950";
//             $("#chartjs-tooltip div p").text("100%");

//             tooltipEl.style.opacity = 0;
//             return;
//         }


//         // Set caret Position
//         tooltipEl.classList.remove('above', 'below', 'no-transform');
//         if (tooltip.yAlign) {
//             tooltipEl.classList.add(tooltip.yAlign);
//         } else {
//             tooltipEl.classList.add('no-transform');
//         }

//         function getBody(bodyItem) {
//             return bodyItem.lines;
//         }

//         // Set Text
//         if (tooltip.body) {
//             var bodyLines = tooltip.body.map(getBody);
//             var innerHtml = '<p>';
//             bodyLines.forEach(function (body, i) {
//                 var dataNumber = body[i].split(":");
//                 var dataValNum = parseInt(dataNumber[1].trim());
//                 var dataToPercent = (dataValNum / sumOfDataVal(dataResponse) * 100).toFixed(2) + '%';
//                 innerHtml += dataToPercent;
//             });

//             innerHtml += '</p>';

//             var tableRoot = tooltipEl.querySelector('div');
//             tableRoot.innerHTML = innerHtml;
//         }


//         tooltipEl.style.opacity = 1;
//         tooltipEl.style.color = "#FFF";
//     };

//     var myChart = new Chart(ctx, {
//         type: 'doughnut',
//         data: dataResponse,
//         options: {
//             legend: {
//                 display: false
//             },
//             cutoutPercentage: 73,
//             circumference: 2 * Math.PI,
//             cutout: 82,
//             maintainAspectRatio: false,
//             animation: {
//                 animateRotate: false,
//                 animateScale: true
//             },
//             tooltips: {
//                 enabled: false
//             },
//             plugins: {
//               legend: {
//                   display: false,
//                }
//             }
//         }
//     });
// }
   
// chart costs

  var chart_costs = document.getElementById("chart_costs");
  // Chart.register(ChartDataLabels);
  if(chart_costs != null){
  chart_costs = chart_costs.getContext('2d');
  var color0 = '#1963d8';
  var color1 = '#718C71';
  var color2 = '#E65584';
  var color3 = '#965D5D';
  var color4 = '#1CB079';
  var color5 = '#FA85DE';
  var color6 = '#9181E6';
// Chart.register(ChartDataLabels);

      var myChart = new Chart(chart_costs, {
        type: 'bar',
        data: {
          labels: ['Subscriptions', 'IT', 'Staff', 'Leasing', 'Office', 'Company Car', 'Service Agreements'],
          datasets: [{
            backgroundColor: [
              color0,
              color1,
              color2,
              color3,
              color4,
              color5,
              color6
            ],
            data: [2240,1550,1400,1875,2350,890, 1280]
          }]
        },
        options: {
          maintainAspectRatio: false,
          aspectRatio: 1,
          responsive: true,
          barPercentage: 0.7,
          plugins: {
            // datalabels: {
            //   formatter: function(value, context) {
            //     return context.chart.data.labels[context.dataIndex];
            //   }
            // },
            datalabels: {
              anchor: 'end',
              align: 'top',
              formatter: function(value, context) {
                Math.round;
                var title = value.toLocaleString().replaceAll(',',' ');
                var title_to_publish = title + ' SEK';
                    return title_to_publish
                },  
              font: {
              }
            },
            legend: {
                display: false,
             }
          },

          scales: {
            x: {
              grid: {
              }
            },
            y: {
              grid: {
              },
              ticks: {
                display: false, //this will remove only the label
              }
            }
          },
          layout: {
            padding: {
              top: 15
            }
          },
        },
        plugins: [ChartDataLabels],

      });
    }


// 
 var contracts_expiring = document.getElementById("contracts_expiring");
  if(contracts_expiring != null){
  contracts_expiring = contracts_expiring.getContext('2d');
  var color1 = '#4B3E9E';
  var color2 = '#9C8FE3';
  var color = '#c5c5c5';
      var myChart = new Chart(contracts_expiring, {
        type: 'bar',
        data: {
          labels: ['7 days', '30 days'],
          datasets: [{
            borderColor: [
              color,
              color,
            ],
            data: [3,5],
            borderWidth: 1
          }]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          barPercentage: 0.7,
          plugins: {
            datalabels: {
              anchor: 'end',
              align: 'top',
              formatter: function(value, context) {
                Math.round;
                var title = value.toLocaleString().replaceAll(',',' ');
                var title_to_publish = title;
                    return title_to_publish
                },  
              font: {
              }
            },
            legend: {
                display: false,
             }
          },

          scales: {
            x: {
              border: {
                // display: false,
              },
              grid: {
                display: false,
                drawBorder: false,
                color: "rgba(255, 255, 255, 0.1)",
              }
            },
            y: {
              border: {
                display: false,
              },
              grid: {
                display: false,
                drawBorder: false,
                color: "rgba(255, 255, 255, 0.1)",
              },
              ticks: {
                display: false, //this will remove only the label
              },
            }
          },
          layout: {
            padding: {
              top: 20
            }
          },
        },
        plugins: [ChartDataLabels],

      });
    }

var costs_pie_new = document.getElementById("costs_pie_new");
  if(costs_pie_new != null){
// chart costs pie
Morris.Donut({
  element: 'costs_pie_new',
  data: [{
    label: "Procurement",
    value: 2240,

  }, {
    label: "Finance",
    value: 1400
  }, {
    label: "HR",
    value: 1875
  }, {
    label: "Marketing",
    value: 2350
  }, {
    label: "Sales",
    value: 890
  }],
  resize: false,
  colors:['#676767', '#868686', '#A6A6A6', '#BBBBBB', '#D1D1D1'],
});
}

var costs_pie = document.getElementById("costs_pie");
  if(costs_pie != null){
  costs_pie = costs_pie.getContext('2d');
// Chart.register(ChartDataLabels);

  var color1 = '#BBB0B8';
  var color2 = '#818181';
  var color3 = '#565656';
  var color4 = '#BBB0B8';
  var color5 = '#565656';
  new Chart(costs_pie, {
    type: 'doughnut',
    data: {
      labels: ['Development', 'Finance', 'HR', 'Marketing', 'Production'],
      datasets: [{
        // label: "Population (millions)",
        backgroundColor: [
            color1,
            color2,
            color3,
            color4,
            color5,
        ],
        data: [2240,1400,1875,2350,890],
        hoverOffset: 7

      }]
    },
    options: {
      maintainAspectRatio: false,
      title: {
        // display: false,
      },
      cutout: 70,
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        datalabels: {
          formatter: (value, costs_pie) => {
            let sum = 0;
            let dataArr = costs_pie.chart.data.datasets[0].data;
            dataArr.map(data => {
                sum += data;
            });

            let percentage = Math.floor(((value/sum) * 100)+0.5)+"%";
            return percentage;
          },
          color: '#fff',
         },
         legend: {
                display: false,
             }
        }
    },
    plugins: [ChartDataLabels],

  });

}

// var chart_reminders = document.getElementById("chart_reminders");
//   if(chart_reminders != null){
//   chart_reminders = chart_reminders.getContext('2d');
//   var color1 = '#EB6363';
//   var color2 = '#fba26f';
//   var color3 = '#1CB079';
//   var myChart = new Chart(chart_reminders, {
//     type: 'bar',
//     data: {
//       labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
//       datasets: [{
//         label: 'End Contracts',
//         data: [1, 2, 0, 1,4, 0, 0, 1,1, 0,1, 0],
//         borderColor: color1,
//         borderWidth: 2,
//         // borderWidth: {
//         //   top: 0,
//         //   left: 1,
//         //   right: 1
//         // }
//         backgroundColor: '#e93b3b61',
//         hoverBackgroundColor: color1,
//         pointRadius: 0,
//         fill: false,
//         borderRadius: 1,
//         // borderWidth: 0
//       },{
//         label: 'Renegotiate',
//         data: [0, 0, 1, 4,2, 0, 2, 4,0, 0,0, 1],
//         borderColor: color2,
//         backgroundColor: '#fba26f80',
//         hoverBackgroundColor: color2,
//         pointRadius: 0,
//         fill: false,
//         borderRadius: 0,
//         borderWidth: 2
//       },{
//         label: 'Renew',
//         data: [3, 2, 0, 3,0, 0, 4, 0,2, 1, 4,2],
//         borderColor: color3,
//         backgroundColor: '#1db07975',
//         hoverBackgroundColor: color3,
//         pointRadius: 0,
//         fill: false,
//         borderRadius: 0,
//         borderWidth: 2
//       }
//       ]
//     },

//     options: {
//       maintainAspectRatio: false,
//       barPercentage: 0.8,
//       categoryPercentage: 0.92,
//       plugins: {
//         legend: {
//           labels: {
//             boxHeight: 5,
//             boxWidth: 5
//           },
//           display: false,
//         },
//         datalabels: {
//           anchor: 'end',
//           align: 'top',
//           formatter: function(value, context) {
//             Math.round;
//             var title = value.toLocaleString().replaceAll(',',' ');
//             var title_to_publish = title;
//             if(title_to_publish == '0'){title_to_publish = '';}
//                 return title_to_publish
//             },  
//           font: {
//           }
//         },
//       },
//       scales: {
//         x: {
//           grid: {
//             // display: false
//           }
//         },
//         y: {
//           beginAtZero: true,
//           grace: '3%',
//           ticks: {
//             // forces step size to be 50 units
//             stepSize: 1,
//             display: false, //this will remove only the label

//           },
//           grid: {
//             // display: false
//           }
//         }
//       },


//       layout: {
//         padding: {
//           // top: 5
//         }
//       },

//     },
//     plugins: [ChartDataLabels],

//   });
// }
  var compare_chart = document.getElementById("compare_chart");
  if(compare_chart != null){
  compare_chart = compare_chart.getContext('2d');
  var color1 = '#EB6363';
  var color2 = '#1CB079';

  var CompareChart = new Chart(compare_chart, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Contract Costs',
        data: [ 1040, 350, 1232, 133, 1555, 2441, 1357, 1222, 367, 143, 233, 2311 ],
        borderColor: color1,
        backgroundColor: color1,
        fill: false,
      }, {
        label: 'Contract Revenue',
        data: [ 10, 150, 32, 693, 1055, 141, 257, 722, 67, 893, 533, 1811 ],
        borderColor: color2,
        backgroundColor: color2,
        fill: false,
      }]
    },
    options: {
      legend: {
          // display: true,
        },
      interaction: {
        mode: 'index',
        intersect: false,
      },
      // stacked: false,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          // display: false,
          position: "top",
        },
        datalabels: {
          display: false
        }
      },
      layout:{
        padding:5
     },
      tooltips: {
        enabled: true,
        // mode: 'single',
        callbacks: {
         label: function (tooltipItems, data) {
              return  tooltipItems.yLabel + " %";
         }
        }
      },
      scales: {
        x: {
          grid: {
            display: false
          }
        },
        y: {
          grid: {
            display: false
          }
        }
      },
      // scales: {
      // }

    }
  });
}

   


   });   
   