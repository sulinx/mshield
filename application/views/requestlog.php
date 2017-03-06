<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>网站信息</title>
    <!-- Bootstrap Styles-->
    <link href="../../../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../../../../assets/css/font-awesome.css" rel="sylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../../../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../../../../assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">网站状态</a>
            </div>

            
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                   
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa">关于本系统</i>
                    </a>

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../../../../index.php/ucenter/weblog/1">安全状态监控</a>
                    </li>
                    <li>
                        <a href="../../../../index.php/ucenter/requestlog/1">访问量监控</a>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            "<?=$siteinfo->name;?>"站点的当前状态 <small><?=$siteinfo->url;?></small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                


                <div class="row">


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                流量信息(最近24小时)
                            </div>
                            <div id="tester" class="panel-body">
                            </div>
                        </div>
                    </div>
                    

                </div>
                <!-- /. ROW  -->

                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                访问量详细信息
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>时间</th>
                                                <th>总ip</th>
                                                <th>总访问量</th>
                                                <th>正常访问量</th>
                                                <th>有害访问量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0:00</td>
                                                <td>32</td>
                                                <td>423</td>
                                                <td>365</td>
                                                <td>58</td>
                                            </tr>
                                            <tr>
                                                <td>4:00</td>
                                                <td>23</td>
                                                <td>457</td>
                                                <td>359</td>
                                                <td>98</td>
                                            </tr>
                                            <tr>
                                                <td>8:00</td>
                                                <td>44</td>
                                                <td>反射型XSS</td>
                                                <td>390</td>
                                                <td>90</td>
                                            </tr>
                                            <tr>
                                                <td>12:00</td>
                                                <td>12</td>
                                                <td>430</td>
                                                <td>381</td>
                                                <td>49</td>
                                            </tr>
                                            <tr>
                                                <td>16:00</td>
                                                <td>35</td>
                                                <td>602</td>
                                                <td>456</td>
                                                <td>146</td>
                                            </tr>
                                            <tr>
                                                <td>20:00</td>
                                                <td>76</td>
                                                <td>514</td>
                                                <td>472</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <td>24:00</td>
                                                <td>36</td>
                                                <td>510</td>
                                                <td>334</td>
                                                <td>176</td>
                                            </tr>
                                            
                                           
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
      <script src="../../../../assets/js/Chart.js"></script>
    <script src="../../../../assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="../../../../assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../../../../assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../../../../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../../../../assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="../../../../assets/js/custom-scripts.js"></script>
        <script>
        var canvas = document.createElement("canvas");
        canvas.width = 1500;
        canvas.height = 400;
        var ctx = canvas.getContext("2d");
        var data = {
            labels : ["0:00","4:00","8:00","12:00","16:00","20:00","24:00"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [365,359,390,381,356,355,340]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [58,98,90,49,146,47,170]
                }
            ]
        };
        var defaults = {

            //Boolean - If we show the scale above the chart data
            scaleOverlay : false,

            //Boolean - If we want to override with a hard coded scale
            scaleOverride : false,

            //** Required if scaleOverride is true **
            //Number - The number of steps in a hard coded scale
            scaleSteps : null,
            //Number - The value jump in the hard coded scale
            scaleStepWidth : null,
            //Number - The scale starting value
            scaleStartValue : null,

            //String - Colour of the scale line
            scaleLineColor : "rgba(0,0,0,.1)",

            //Number - Pixel width of the scale line
            scaleLineWidth : 1,

            //Boolean - Whether to show labels on the scale
            scaleShowLabels : false,

            //Interpolated JS string - can access value
            scaleLabel : "<%=value%>",

            //String - Scale label font declaration for the scale label
            scaleFontFamily : "'Arial'",

            //Number - Scale label font size in pixels
            scaleFontSize : 12,

            //String - Scale label font weight style
            scaleFontStyle : "normal",

            //String - Scale label font colour
            scaleFontColor : "#666",

            ///Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines : true,

            //String - Colour of the grid lines
            scaleGridLineColor : "rgba(0,0,0,.05)",

            //Number - Width of the grid lines
            scaleGridLineWidth : 1,

            //Boolean - Whether the line is curved between points
            bezierCurve : true,

            //Boolean - Whether to show a dot for each point
            pointDot : true,

            //Number - Radius of each point dot in pixels
            pointDotRadius : 3,

            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth : 1,

            //Boolean - Whether to show a stroke for datasets
            datasetStroke : true,

            //Number - Pixel width of dataset stroke
            datasetStrokeWidth : 2,

            //Boolean - Whether to fill the dataset with a colour
            datasetFill : true,

            //Boolean - Whether to animate the chart
            animation : true,

            //Number - Number of animation steps
            animationSteps : 60,

            //String - Animation easing effect
            animationEasing : "easeOutQuart",

            //Function - Fires when the animation is complete
            onAnimationComplete : null

        }
        document.getElementById("tester").appendChild(canvas);
        new Chart(ctx).Line(data,defaults);
        
    </script>

</body>

</html>