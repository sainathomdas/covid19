
/*
    $(window).resize(function(){
        drawTotalCasesIndia();
        drawDailyNewCasesInIndia();
        
<<<<<<< HEAD
      });*/

      function drawTotalCasesIndia(){
=======
    });*/

    function drawTotalCasesIndia(){
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawAreaChart);
        function drawAreaChart() {

<<<<<<< HEAD
          var data;
          $.get("assets/total_cases_in_india.csv", function(csvString) {
            var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

            data = new google.visualization.arrayToDataTable(arrayData);
            var chart = new google.visualization.AreaChart(document.getElementById('total_cases_in_india_div'));
            chart.draw(data, options);
          });

          var options = {
            title: 'Total Cases in India',
                backgroundColor: '#191919', //#E4e4e4
                is3D: true,
                animation: {
                  duration: 2000,
                  easing: 'out',
                  startup: true
=======
            var data;
            $.get("assets/total_cases_in_india.csv", function(csvString) {
                var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

                data = new google.visualization.arrayToDataTable(arrayData);
                var chart = new google.visualization.AreaChart(document.getElementById('total_cases_in_india_div'));
                chart.draw(data, options);
            });

            var options = {
                title: 'Total Cases in India',
                backgroundColor: '#191919', //#E4e4e4
    is3D: true,
                animation: {
                    duration: 2000,
                    easing: 'out',
                    startup: true
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
                },
                colors: ['#0288d1'],    
                is3D:true,
                hAxis: {title: 'Date', 
                textStyle:{color: '#FFF'},
                titleTextStyle: {color: '#fff'
                ,fontSize: 18,
                fontStyle: 'normal',
                textStyle: '#fff',
                fontName: 'Times'
<<<<<<< HEAD
              }},
              vAxis: {
               textStyle:{color: '#FFF'},
               title: 'Total Cases', minValue: 0,
               titleTextStyle: {color: '#fff'
               ,fontSize: 18,
               fontStyle: 'normal',
               fontName: 'Times',
               scaleType: 'log' 
             }},
=======
            }},
            vAxis: {
                   textStyle:{color: '#FFF'},
                   title: 'Total Cases', minValue: 0,
            titleTextStyle: {color: '#fff'
            ,fontSize: 18,
            fontStyle: 'normal',
            fontName: 'Times',
             scaleType: 'log' 
        }},
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
      //  theme: 'material',
      pointShape: 'circle',
      pointSize:4,
      legend:'none',
      titleTextStyle: {
        color: '#fff',      
        fontSize: 20,
        position:'middle',
        fontName: 'Times'
<<<<<<< HEAD
      }
            //backgroundColor: '#fff'
          };

          
        }
      }


      function drawDailyNewCasesInIndia(){
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawAreaChart);
        function drawAreaChart() {

          var data;
          $.get("assets/daily_new_cases_in_india.csv", function(csvString) {
=======
    }
            //backgroundColor: '#fff'
        };

        
    }
}


function drawDailyNewCasesInIndia(){
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawAreaChart);
    function drawAreaChart() {

        var data;
        $.get("assets/daily_new_cases_in_india.csv", function(csvString) {
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
            var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

            data = new google.visualization.arrayToDataTable(arrayData);
            var chart = new google.visualization.AreaChart(document.getElementById('daily_new_cases_in_india_div'));
            chart.draw(data, options);
<<<<<<< HEAD
          });

          var options = {
            backgroundColor: '#191919',
            title: 'Daily New Cases in India',
            animation: {
              duration: 2000,
              easing: 'out',
              startup: true
=======
        });

        var options = {
            backgroundColor: '#191919',
            title: 'Daily New Cases in India',
            animation: {
                duration: 2000,
                easing: 'out',
                startup: true
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
            },
            colors: ['#0288d1'],
            is3D:true,
            hAxis: {title: 'Date', 
<<<<<<< HEAD
            textStyle:{color: '#FFF'},
=======
               textStyle:{color: '#FFF'},
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
            titleTextStyle: {color: '#fff'
            ,fontSize: 18,
            fontStyle: 'normal',
            fontName: 'Times'
<<<<<<< HEAD
          }},
          vAxis: {title: 'Total Cases', minValue: 0,
          textStyle:{color: '#FFF'},
          titleTextStyle: {color: '#fff'
          ,fontSize: 18,
          fontStyle: 'normal',
          fontName: 'Times'
        }},
        
        pointShape: 'circle',
        pointSize:5,
        legend:'none',
        titleTextStyle: {
          color: '#fff',      
          fontSize: 20,
          position:'middle',
          fontName: 'Times'
        }
            //backgroundColor: '#fff'
          };

          
        }
      }



      function quickGlance(){
        $.get("assets/overall.csv", function(csvString) {
          var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
          console.log(arrayData[1][1]);
         // document.getElementById('confirmed_cases').innerHTML = arrayData[1][1];
          document.getElementById('cured').innerHTML = arrayData[2][1];
          document.getElementById('deaths').innerHTML = arrayData[3][1];
          document.getElementById('confirmed_cases_cover').innerHTML = arrayData[1][1];
          
          animateCounter();
        });



      }
      function animateCounter(){
       $('.count').each(function () {
        $(this).prop('Counter',0).animate({
          Counter: $(this).text()
        }, {
          duration: 2000,
          easing: 'swing',
          step: function (now) {
            $(this).text(Math.ceil(now));
          }
        });
      });
     }


     function drawAffectedStates(){
      google.charts.load('current', {packages: ['corechart']});
      google.charts.setOnLoadCallback(drawAffectedAreasChart);

      function drawAffectedAreasChart(){
        var data;
        $.get("assets/affected_states.csv", function(csvString) {
          var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

          data = new google.visualization.arrayToDataTable(arrayData);
          var chart = new google.visualization.ColumnChart(document.getElementById('affected_states_div'));
          chart.draw(data, options);
        });

        var options = {
          title: '    Affected States',
          backgroundColor: '#191919',
=======
        }},
        vAxis: {title: 'Total Cases', minValue: 0,
           textStyle:{color: '#FFF'},
        titleTextStyle: {color: '#fff'
        ,fontSize: 18,
        fontStyle: 'normal',
        fontName: 'Times'
    }},
    
    pointShape: 'circle',
    pointSize:5,
    legend:'none',
    titleTextStyle: {
        color: '#fff',      
        fontSize: 20,
        position:'middle',
        fontName: 'Times'
    }
            //backgroundColor: '#fff'
        };

        
    }
}



function quickGlance(){
    $.get("assets/overall.csv", function(csvString) {
        var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
        console.log(arrayData[1][1]);
        document.getElementById('indian_cases').innerHTML = arrayData[1][1];
        document.getElementById('foreign_cases').innerHTML = arrayData[2][1];
        document.getElementById('cured').innerHTML = arrayData[3][1];
        document.getElementById('deaths').innerHTML = arrayData[4][1];
        document.getElementById('confirmed_cases').innerHTML = arrayData[1][1] + arrayData[2][1];
        
        animateCounter();
    });



}
function animateCounter(){
 $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
}


function drawAffectedStates(){
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawAffectedAreasChart);

    function drawAffectedAreasChart(){
        var data;
        $.get("assets/affected_states.csv", function(csvString) {
            var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

            data = new google.visualization.arrayToDataTable(arrayData);
            var chart = new google.visualization.ColumnChart(document.getElementById('affected_states_div'));
            chart.draw(data, options);
        });

        var options = {
            title: '    Affected States',
            backgroundColor: '#191919',
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
            //theme: 'material',
            titleTextStyle: {color: '#fff',
            fontSize: 32,
            fontStyle: 'normal',
            fontName: 'Times',
            titlePosition: 'none'
<<<<<<< HEAD
          },
          legend: {textStyle: {color: '#fff'}},
          colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
          animation: {
            duration: 1500,
            easing: 'out',
            startup: true
          },
          hAxis: {title: 'State', 
          textStyle:{color: '#FFF'},
          titleTextStyle: {color: '#fff'
          ,fontSize: 18,
          slantedText:true,
          fontStyle: 'normal',
          fontName: 'Times'
        }},
        vAxis: {title: 'Total Cases',
        textStyle:{color: '#FFF'},
        titleTextStyle: {color: '#fff'
        ,fontSize: 18,
        fontStyle: 'normal',
        fontName: 'Times',
        type: 'logarithmic'
      }},
      isStacked:true}; 

    }
  }
=======
        },
        legend: {textStyle: {color: '#fff'}},
        colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
        animation: {
          duration: 1500,
          easing: 'out',
          startup: true
      },
      hAxis: {title: 'State', 
      textStyle:{color: '#FFF'},
      titleTextStyle: {color: '#fff'
      ,fontSize: 18,
      slantedText:true,
      fontStyle: 'normal',
      fontName: 'Times'
  }},
  vAxis: {title: 'Total Cases',
  textStyle:{color: '#FFF'},
  titleTextStyle: {color: '#fff'
  ,fontSize: 18,
  fontStyle: 'normal',
  fontName: 'Times',
  type: 'logarithmic'
}},
isStacked:true}; 

}
}
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1




<<<<<<< HEAD
  function drawAffectedStatesForMobile(){
=======
function drawAffectedStatesForMobile(){
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawAffectedAreasChart);

    function drawAffectedAreasChart(){
<<<<<<< HEAD
      var data;
      $.get("assets/affected_states_for_mobile.csv", function(csvString) {
        var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

        data = new google.visualization.arrayToDataTable(arrayData);
        var chart = new google.visualization.BarChart(document.getElementById('affected_states_mobile_div'));
        chart.draw(data, options);
      });

      var options = {
        title: 'Most Affected States',
        backgroundColor: '#191919',
=======
        var data;
        $.get("assets/affected_states_for_mobile.csv", function(csvString) {
            var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

            data = new google.visualization.arrayToDataTable(arrayData);
            var chart = new google.visualization.BarChart(document.getElementById('affected_states_mobile_div'));
            chart.draw(data, options);
        });

        var options = {
            title: 'Most Affected States',
            backgroundColor: '#191919',
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
            //theme: 'material',
            titleTextStyle: {color: '#fff',
            fontSize: 18,
            fontStyle: 'normal',
            fontName: 'Times'
<<<<<<< HEAD
          },
          colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
          
          legend: {textStyle: {color: '#fff'},
          position: 'bottom'},
          animation: {
            duration: 500,
            easing: 'out',
            startup: true
          },
          hAxis: {title: 'State',
          textStyle:{color: '#FFF'}, 
          titleTextStyle: {color: '#fff'
          ,fontSize: 18,      
          slantedText:true,
          fontStyle: 'normal',
          fontName: 'Times'
        }},
        vAxis: {title: 'Total Cases',
        textStyle:{color: '#FFF'},
        titleTextStyle: {color: '#fff'
        ,fontSize: 18,
        fontStyle: 'normal',
        fontName: 'Times',
        type: 'logarithmic'
      }},
      isStacked:true}; 

    }
  }


  function drawOverallForMobile(){
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawPieChart);

    function drawPieChart(){
      var data;
      $.get("assets/overall.csv", function(csvString) {
        var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

        data = new google.visualization.arrayToDataTable(arrayData);
        var chart = new google.visualization.PieChart(document.getElementById('overall_div_mobile'));
        chart.draw(data, options);
      });

      var options = {

        backgroundColor: "#000",
        title: 'Covid-19 Cases',
             
        pieSliceText: 'value',

        pieHole: 0.4,
        legend: {textStyle: {color: '#fff'},position: 'bottom'},                  

        colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
        titleTextStyle: {        
          fontSize: 20,        
          fontName: 'Times',
           color: '#ffffff'
        }
      };
    }
  }


  function drawOverall(){
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawPieChart);

    function drawPieChart(){
      var data;
      $.get("assets/overall.csv", function(csvString) {
        var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

        data = new google.visualization.arrayToDataTable(arrayData);
        var chart = new google.visualization.PieChart(document.getElementById('overall_div'));
        chart.draw(data, options);
      });

      var options = {

        backgroundColor: "#000",
        title: 'Covid-19 Cases',
      
        pieSliceText: 'value',

        pieHole: 0.4,
        legend: {textStyle: {color: '#fff'}},                  

        colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
        titleTextStyle: {        
          fontSize: 20,        
          fontName: 'Times',
           color: '#ffffff'
        }
      };
    }
  }


  function drawDeaths(){
=======
        },
        colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
       
        legend: {textStyle: {color: '#fff'},
        position: 'bottom'},
        animation: {
          duration: 500,
          easing: 'out',
          startup: true
      },
      hAxis: {title: 'State',
      textStyle:{color: '#FFF'}, 
      titleTextStyle: {color: '#fff'
      ,fontSize: 18,      
      slantedText:true,
      fontStyle: 'normal',
      fontName: 'Times'
  }},
  vAxis: {title: 'Total Cases',
  textStyle:{color: '#FFF'},
  titleTextStyle: {color: '#fff'
  ,fontSize: 18,
  fontStyle: 'normal',
    fontName: 'Times',
  type: 'logarithmic'
}},
isStacked:true}; 

}
}


 function drawOverallForMobile(){
            google.charts.load('current', {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawPieChart);

            function drawPieChart(){
                var data;
                $.get("assets/overall.csv", function(csvString) {
                    var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

                    data = new google.visualization.arrayToDataTable(arrayData);
                    var chart = new google.visualization.PieChart(document.getElementById('overall_div_mobile'));
                    chart.draw(data, options);
                });

                var options = {

                    backgroundColor: "#303030",
                    title: 'Covid-19 Cases',
                    titleTextStyle: {
                        color: '#ffffff'
                    },
                    
                    pieSliceText: 'value',

                    pieHole: 0.4,
                    legend: {textStyle: {color: '#fff'},position: 'bottom'},                  

                    colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
                    titleTextStyle: {        
                        fontSize: 20,        
                        fontName: 'Times'
                    }
                };
            }
        }


        function drawOverall(){
            google.charts.load('current', {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawPieChart);

            function drawPieChart(){
                var data;
                $.get("assets/overall.csv", function(csvString) {
                    var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

                    data = new google.visualization.arrayToDataTable(arrayData);
                    var chart = new google.visualization.PieChart(document.getElementById('overall_div'));
                    chart.draw(data, options);
                });

                var options = {

                    backgroundColor: "#303030",
                    title: 'Covid-19 Cases',
                    titleTextStyle: {
                        color: '#ffffff'
                    },
                    chartArea:{left:10,top:20,width:"100%",height:"100%"},
                    pieSliceText: 'value',

                    pieHole: 0.4,
                    legend: {textStyle: {color: '#fff'}},                  

                    colors: ['#0288d1', '#a17ddd', '#fb68b4', '#ffa600'],
                    titleTextStyle: {        
                        fontSize: 20,        
                        fontName: 'Times'
                    }
                };
            }
        }


function drawDeaths(){
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawAreaChart);
    function drawAreaChart() {

<<<<<<< HEAD
      var data;
      $.get("assets/deaths.csv", function(csvString) {
        var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

        data = new google.visualization.arrayToDataTable(arrayData);
        var chart = new google.visualization.AreaChart(document.getElementById('deaths_div'));
        chart.draw(data, options);
      });

      var options = {
        title: 'Total Deaths in India',

        backgroundColor: '#191919',
        animation: {
          duration: 2000,
          easing: 'out',
          startup: true
        },
        colors: ['#0288d1'],
        is3D:true,
        hAxis: {title: 'Date',
        textStyle:{color: '#FFF'},
        titleTextStyle: {color: '#fff'
        ,fontSize: 18,
        fontStyle: 'normal',
        fontName: 'Times',
        type: 'logarithmic'
      }
    },
    vAxis: {title: 'Total Deaths',
    textStyle:{color: '#FFF'},
    titleTextStyle: {color: '#fff'
    ,fontSize: 18,
    fontStyle: 'normal',
    fontName: 'Times',
    type: 'logarithmic'
  }},

  pointShape: 'circle',
  pointSize:5,
  legend:'none',
  titleTextStyle: {
    color: '#fff',      
    fontSize: 20,
    position:'middle',
    fontName: 'Times'
  }
            //backgroundColor: '#fff'
          };

          
        }
      }

//       function showTable(){
//         init_table({
//           csv_path: "assets/datatable.csv", 
//           element: 'table-container', 

//           datatables_options: {

//             columnDefs : [
//         //hide the second & fourth column
//         { 'visible': false, 'targets': [0] },
//         {
//           'width': "35%", targets : [1],

//         }
//         ],

//         language: {
//           paginate: {
//       next: '&#8594;', // or '→'
//       previous: '&#8592;' // or '←' 
//     }
//   }


// }

// });
//       }

      function drawTreeChart(){
        var data;
        google.charts.load('current', {packages: ['treemap']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

          $.get("assets/tree_chart.csv", function(csvString) {
            var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

            data = new google.visualization.arrayToDataTable(arrayData);
            var tree = new google.visualization.TreeMap(document.getElementById('tree_chart_div'));
            tree.draw(data,options);
            google.visualization.events.addListener(tree, 'select', function () {
              tree.setSelection([]);
            });
          });
        }
        options = {
          highlightOnMouseOver: false,
          maxDepth: 1,
          forceIFrame: true,
          maxPostDepth: 2,
          backgroundColor: '#191919', //#E4e4e4
          minColor: '#bcbddc',
          midColor: '#7d8eb9',
          maxColor: '#2F6497',
          headerHeight: 0,
          textStyle: { color: 'white',
          fontName: 'Times',
          fontSize: 14
        },

        showScale: true,
        height: 500,
        headerColor: '#2F6497',
        useWeightedAverageForAggregation: true,
        generateTooltip: showFullTooltip
      }

      function showFullTooltip(row, size, value) {

        return '<div style="background: #191919;padding: 10px; border-style: solid;">  <span style="font-family: Courier;color:white">' + 
        
        'Confirmed ' + data.getValue(row,2) + '<br>' +
        'Cured ' + data.getValue(row,4) + '<br>' +
        'Deaths ' + data.getValue(row,5) + ' </span></div>';



      }


    }
=======
        var data;
        $.get("assets/deaths.csv", function(csvString) {
            var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

            data = new google.visualization.arrayToDataTable(arrayData);
            var chart = new google.visualization.AreaChart(document.getElementById('deaths_div'));
            chart.draw(data, options);
        });

        var options = {
            title: 'Total Deaths in India',

            backgroundColor: '#191919',
            animation: {
                duration: 2000,
                easing: 'out',
                startup: true
            },
            colors: ['#0288d1'],
            is3D:true,
            hAxis: {title: 'Date',
  textStyle:{color: '#FFF'},
  titleTextStyle: {color: '#fff'
  ,fontSize: 18,
  fontStyle: 'normal',
  fontName: 'Times',
  type: 'logarithmic'
}},
       vAxis: {title: 'Total Deaths',
  textStyle:{color: '#FFF'},
  titleTextStyle: {color: '#fff'
  ,fontSize: 18,
  fontStyle: 'normal',
  fontName: 'Times',
  type: 'logarithmic'
}},

    pointShape: 'circle',
    pointSize:5,
    legend:'none',
    titleTextStyle: {
        color: '#fff',      
        fontSize: 20,
        position:'middle',
        fontName: 'Times'
    }
            //backgroundColor: '#fff'
        };

        
    }
}

function showTable(){
    init_table({
      csv_path: "assets/datatable.csv", 
      element: 'table-container', 

      datatables_options: {

        columnDefs : [
        //hide the second & fourth column
        { 'visible': false, 'targets': [0] },
        {
            'width': "35%", targets : [1],

        }
        ],

        language: {
            paginate: {
      next: '&#8594;', // or '→'
      previous: '&#8592;' // or '←' 
  }
}


}

});
}
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
