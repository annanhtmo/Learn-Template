<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta charset="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/nv.d3.css">
        <link rel="stylesheet" href="styles/style.css">
        
        <script src="script/jquery-321.js"></script>
        <script src="script/d3.js"></script>
        <script src="script/nv.d3.js"></script>
        <script src="script/function.js"></script>
        <script src="script/data.js"></script>
        
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Information System</h2>
                    <button type="button" class="btn btn-primary" id="btnLoadChart">Load Chart</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">IS Discrete Bar Chart</div>
                        <div class="panel-body">
                            <div id="chart">
                                <svg></svg>
                                <script>
                                    drawChart();
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">IS Donut Bar Chart</div>
                        <div class="panel-body">
                            <div id="chart2">
                                <svg></svg>
                                <script>
                                    drawChart2();
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>