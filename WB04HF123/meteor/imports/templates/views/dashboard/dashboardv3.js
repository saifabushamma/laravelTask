import initSlimScroll from '/imports/scripts/modules/slimscroll.js';
import initSparkLine from '/imports/scripts/modules/sparkline.js';
import initVectorMap from '/imports/templates/views/maps/vector.map.demo.js';

Template.dashboardv3.onRendered(function(){

    // Usage via data attributes
    // <div class="easypie-chart" data-easypiechart data-percent="X" data-optionName="value"></div>
    $('[data-easypiechart]').each(function() {
        var $elem = $(this);
        var options = $elem.data();
        $elem.easyPieChart(options || {});
    });

    var datav3 = [{
      "label": "Home",
      "color": "#1ba3cd",
      "data": [
        ["1", 38],
        ["2", 40],
        ["3", 42],
        ["4", 48],
        ["5", 50],
        ["6", 70],
        ["7", 145],
        ["8", 70],
        ["9", 59],
        ["10", 48],
        ["11", 38],
        ["12", 29],
        ["13", 30],
        ["14", 22],
        ["15", 28]
      ]
    }, {
      "label": "Overall",
      "color": "#3a3f51",
      "data": [
        ["1", 16],
        ["2", 18],
        ["3", 17],
        ["4", 16],
        ["5", 30],
        ["6", 110],
        ["7", 19],
        ["8", 18],
        ["9", 110],
        ["10", 19],
        ["11", 16],
        ["12", 10],
        ["13", 20],
        ["14", 10],
        ["15", 20]
      ]
    }];

    var options = {
      series: {
          lines: {
              show: false
          },
          points: {
              show: true,
              radius: 4
          },
          splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.5
          }
      },
      grid: {
          borderColor: '#eee',
          borderWidth: 1,
          hoverable: true,
          backgroundColor: '#fcfcfc'
      },
      tooltip: true,
      tooltipOpts: {
          content: function (label, x, y) { return x + ' : ' + y; }
      },
      xaxis: {
          tickColor: '#fcfcfc',
          mode: 'categories'
      },
      yaxis: {
          min: 0,
          max: 150, // optional: use it for a clear represetation
          tickColor: '#eee',
          //position: 'right' or 'left',
          tickFormatter: function (v) {
              return v/* + ' visitors'*/;
          }
      },
      shadowSize: 0
    };

    var chartv3 = $('.chart-splinev3');
    if(chartv3.length)
      $.plot(chartv3, datav3, options);

    // Sparkline
    initSparkLine();

    // Slimscroll
    initSlimScroll();

    // Vector Map
    initVectorMap();

})
