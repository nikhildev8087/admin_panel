console.log("hi");


let sidebar = document.getElementById('sidebar-collapse');
let sideContainer = document.getElementById('panelConttainer');
let sidebar_bottom = document.getElementById('sidebar-bottom');
sidebar.addEventListener("click", function(){
    console.log("side icon clicked");
    sideContainer.classList.toggle("active");
    sidebar_bottom.classList.toggle("hide-content");
})

// bar chart code 

am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");
    
    
    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);
    
    
    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      pinchZoomX:true
    }));
    
    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineY.set("visible", false);
    
    
    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
    xRenderer.labels.template.setAll({
      rotation: -90,
      centerY: am5.p50,
      centerX: am5.p100,
      paddingRight: 15
    });
    
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      maxDeviation: 0.3,
      categoryField: "country",
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {})
    }));
    
    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      maxDeviation: 0.3,
      renderer: am5xy.AxisRendererY.new(root, {})
    }));
    
    
    // Create series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
      name: "Series 1",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      sequencedInterpolation: true,
      categoryXField: "country",
      tooltip: am5.Tooltip.new(root, {
        labelText:"{valueY}"
      })
    }));
    
    series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5 });
    series.columns.template.adapters.add("fill", function(fill, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });
    
    series.columns.template.adapters.add("stroke", function(stroke, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });
    
    
    // Set data
    var data = [{
      country: "USA",
      value: 2025
    }, {
      country: "China",
      value: 1882
    }, {
      country: "Japan",
      value: 1809
    }, {
      country: "Germany",
      value: 1322
    }, {
      country: "UK",
      value: 1122
    }, {
      country: "France",
      value: 1114
    }, {
      country: "India",
      value: 984
    }, {
      country: "Spain",
      value: 711
    }, {
      country: "Netherlands",
      value: 665
    }, {
      country: "South Korea",
      value: 443
    }, {
      country: "Canada",
      value: 441
    }];
    
    xAxis.data.setAll(data);
    series.data.setAll(data);
    
    
    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series.appear(1000);
    chart.appear(1000, 100);
    
    }); // end am5.ready()


    // code for pie chart 

    var root = am5.Root.new("piechart");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(
  am5percent.PieChart.new(root, {
    startAngle: 160, endAngle: 380
  })
);

// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series

var series0 = chart.series.push(
  am5percent.PieSeries.new(root, {
    valueField: "litres",
    categoryField: "country",
    startAngle: 160,
    endAngle: 380,
    radius: am5.percent(70),
    innerRadius: am5.percent(65)
  })
);

var colorSet = am5.ColorSet.new(root, {
  colors: [series0.get("colors").getIndex(0)],
  passOptions: {
    lightness: -0.05,
    hue: 0
  }
});

series0.set("colors", colorSet);

series0.ticks.template.set("forceHidden", true);
series0.labels.template.set("forceHidden", true);

var series1 = chart.series.push(
  am5percent.PieSeries.new(root, {
    startAngle: 160,
    endAngle: 380,
    valueField: "bottles",
    innerRadius: am5.percent(80),
    categoryField: "country"
  })
);

series1.ticks.template.set("forceHidden", true);
series1.labels.template.set("forceHidden", true);

var label = chart.seriesContainer.children.push(
  am5.Label.new(root, {
    textAlign: "center",
    centerY: am5.p100,
    centerX: am5.p50,
    text: "[fontSize:18px]total[/]:\n[bold fontSize:30px]1647.9[/]"
  })
);

var data = [
  {
    country: "Lithuania",
    litres: 501.9,
    bottles: 1500
  },
  {
    country: "Czech Republic",
    litres: 301.9,
    bottles: 990
  },
  {
    country: "Ireland",
    litres: 201.1,
    bottles: 785
  },
  {
    country: "Germany",
    litres: 165.8,
    bottles: 255
  },
  {
    country: "Australia",
    litres: 139.9,
    bottles: 452
  },
  {
    country: "Austria",
    litres: 128.3,
    bottles: 332
  },
  {
    country: "UK",
    litres: 99,
    bottles: 150
  },
  {
    country: "Belgium",
    litres: 60,
    bottles: 178
  },
  {
    country: "The Netherlands",
    litres: 50,
    bottles: 50
  }
];

// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
series0.data.setAll(data);
series1.data.setAll(data);



// line chart code 


am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var rootL = am5.Root.new("linechart");
    
    
    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    rootL.setThemes([
      am5themes_Animated.new(rootL)
    ]);
    
    
    // Generate random data
    var value = 100;
    
    function generateChartData() {
      var chartData = [];
      var firstDate = new Date();
      firstDate.setDate(firstDate.getDate() - 1000);
      firstDate.setHours(0, 0, 0, 0);
    
      for (var i = 0; i < 50; i++) {
        var newDate = new Date(firstDate);
        newDate.setSeconds(newDate.getSeconds() + i);
    
        value += (Math.random() < 0.5 ? 1 : -1) * Math.random() * 10;
    
        chartData.push({
          date: newDate.getTime(),
          value: value
        });
      }
      return chartData;
    }
    
    var data = generateChartData();
    
    
    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = rootL.container.children.push(am5xy.XYChart.new(rootL, {
      focusable: true,
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      pinchZoomX:true
    }));
    
    var easing = am5.ease.linear;
    
    
    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis = chart.xAxes.push(am5xy.DateAxis.new(rootL, {
      maxDeviation: 0.5,
      groupData: false,
      extraMax:0.1, // this adds some space in front
      extraMin:-0.1,  // this removes some space form th beginning so that the line would not be cut off
      baseInterval: {
        timeUnit: "second",
        count: 1
      },
      renderer: am5xy.AxisRendererX.new(rootL, {
        minGridDistance: 50
      }),
      tooltip: am5.Tooltip.new(rootL, {})
    }));
    
    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(rootL, {
      renderer: am5xy.AxisRendererY.new(rootL, {})
    }));
    
    
    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.LineSeries.new(rootL, {
      name: "Series 1",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      valueXField: "date",
      tooltip: am5.Tooltip.new(rootL, {
        pointerOrientation: "horizontal",
        labelText: "{valueY}"
      })
    }));
    
    // tell that the last data item must create bullet
    data[data.length - 1].bullet = true;
    series.data.setAll(data);
    
    
    // Create animating bullet by adding two circles in a bullet container and
    // animating radius and opacity of one of them.
    series.bullets.push(function(rootL, series, dataItem) {  
      // only create sprite if bullet == true in data context
      if (dataItem.dataContext.bullet) {    
        var container = am5.Container.new(rootL, {});
        var circle0 = container.children.push(am5.Circle.new(rootL, {
          radius: 5,
          fill: am5.color(0xff0000)
        }));
        var circle1 = container.children.push(am5.Circle.new(rootL, {
          radius: 5,
          fill: am5.color(0xff0000)
        }));
    
        circle1.animate({
          key: "radius",
          to: 20,
          duration: 1000,
          easing: am5.ease.out(am5.ease.cubic),
          loops: Infinity
        });
        circle1.animate({
          key: "opacity",
          to: 0,
          from: 1,
          duration: 1000,
          easing: am5.ease.out(am5.ease.cubic),
          loops: Infinity
        });
    
        return am5.Bullet.new(rootL, {
          locationX:undefined,
          sprite: container
        })
      }
    })
    
    
    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(rootL, {
      xAxis: xAxis
    }));
    cursor.lineY.set("visible", false);
    
    
    // Update data every second
    setInterval(function () {
      addData();
    }, 1000)
    
    
    function addData() {
      var lastDataItem = series.dataItems[series.dataItems.length - 1];
    
      var lastValue = lastDataItem.get("valueY");
      var newValue = value + ((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
      var lastDate = new Date(lastDataItem.get("valueX"));
      var time = am5.time.add(new Date(lastDate), "second", 1).getTime();
      series.data.removeIndex(0);
      series.data.push({
        date: time,
        value: newValue
      })
    
      var newDataItem = series.dataItems[series.dataItems.length - 1];
      newDataItem.animate({
        key: "valueYWorking",
        to: newValue,
        from: lastValue,
        duration: 600,
        easing: easing
      });
    
      // use the bullet of last data item so that a new sprite is not created
      newDataItem.bullets = [];
      newDataItem.bullets[0] = lastDataItem.bullets[0];
      newDataItem.bullets[0].get("sprite").dataItem = newDataItem;
      // reset bullets
      lastDataItem.dataContext.bullet = false;
      lastDataItem.bullets = [];
    
    
      var animation = newDataItem.animate({
        key: "locationX",
        to: 0.5,
        from: -0.5,
        duration: 600
      });
      if (animation) {
        var tooltip = xAxis.get("tooltip");
        if (tooltip && !tooltip.isHidden()) {
          animation.events.on("stopped", function () {
            xAxis.updateTooltip();
          })
        }
      }
    }
    
    
    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);
    
    }); // end am5.ready()
    