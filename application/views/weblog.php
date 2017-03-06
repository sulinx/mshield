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


                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                攻击信息直方图
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                攻击类型所占比例
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                漏洞详细信息
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>所在文件名称</th>
                                                
                                                <th>漏洞类型</th>
                                                <th>危险评级</th>
                                                <th>修复说明</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>message.php</td>
                                                
                                                <td>存储型XSS</td>
                                                <td>★★★</td>
                                                <td>进行过滤</td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>search.php</td>
                                               
                                                <td>CC攻击</td>
                                                <td>★★★★</td>
                                                <td>限制ip</td>
                                            </tr>
                                            <tr>
                                                <td>article.php</td>
                                               
                                                <td>SQL注入</td>
                                                <td>★★★★</td>
                                                <td>进行过滤</td>
                                            </tr>
                                        
                                            <tr>
                                                <td>upload.php</td>
                                                
                                                <td>上传恶意文件</td>
                                                <td>★★★★</td>
                                                <td>进行过滤</td>
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


</body>

</html>