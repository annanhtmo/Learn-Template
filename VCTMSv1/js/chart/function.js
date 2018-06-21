/*var drawChart = function(){
            d3.json('script/data.json', function(error, data){
            if(error) return console.error(error);
            console.log(data);
            
            nv.addGraph(function() {
          var chart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .staggerLabels(true)
            .showValues(true)
        
          d3.select('#chart svg')
            .datum(data)
            .transition().duration(500)
            .call(chart)
            ;
        
          nv.utils.windowResize(chart.update);
        
          return chart;
        });
    });
};*/

var drawChart = function(){
    d3.json('../../controller/chart/data_2.php', function(data) {
  nv.addGraph(function() {
    var chart = nv.models.multiBarHorizontalChart()
        .x(function(d) { return d.model })
        .y(function(d) { return d.actual_pcs })
        .margin({top: 30, right: 20, bottom: 50, left: 100})
        .showValues(true)           //Show bar value next to each bar.
        .showControls(true);        //Allow user to switch between "Grouped" and "Stacked" mode.

    chart.yAxis
        .tickFormat(d3.format(',.2f'));

    d3.select('#chart svg')
        .datum(data)
        .call(chart);
            
    nv.utils.windowResize(chart.update);

    return chart;
  });
});  
};

var drawChart2 = function(){
        d3.json('../../controller/chart/data_1.php', function(data){
        nv.addGraph(function() {
      var chart = nv.models.pieChart()
          .x(function(d) { return d.model })
          .y(function(d) { return d.actual_pcs })
          .showLabels(true)     //Display pie labels
          .labelThreshold(.05)  //Configure the minimum slice size for labels to show up
          .labelType("percent") //Configure what type of data to show in the label. Can be "key", "value" or "percent"
          .donut(true)          //Turn on Donut mode. Makes pie chart look tasty!
          .donutRatio(0.35)     //Configure how big you want the donut hole size to be.
          ;
    
        d3.select("#chart2 svg")
            .datum(data)
            .transition().duration(350)
            .call(chart);
    
      return chart;
    });
  }); 
};

$(function(){
    $('#btnLoadChart').click(function(){
        console.log("draw chart");
        drawChart();
        drawChart2();
    });
});