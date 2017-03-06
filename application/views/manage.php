<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Mshield 管理后台</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="../../assets/css/ionicons.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="../../assets/css/AdminLTE.css" rel="stylesheet" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../assets/css/_all-skins.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <a href="../../../index.php" class="logo">Mshield</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../../assets/img/default.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?=$user?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../../assets/img/default.jpg" class="img-circle" alt="User Image">
                                <p>
                                    <?=$user?>                                  <small>加入时间：2015-03-24 00:00:00</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">个人信息</a>
                                </div>
                                <div class="pull-right">
                                    <a href="../../../index.php/admin/logout" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section style="height: auto;" class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../../assets/img/default.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?=$user?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
                    <a href="../../index.php/admin">
                        <i class="fa fa-dashboard"></i> <span>管理首页</span>
                    </a>
                </li>

                <li>
                    <a href="../../index.php/admin/webinfo">
                        <i class="fa fa-user"></i> <span>网站信息</span>
                    </a>
                </li>

                <li>
                    <a href="../../index.php/admin/checkweb">
                        <i class="fa  fa-pencil"></i> <span>网站审核</span>
                    </a>
                </li>



            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div style="min-height: 780px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                管理后台
                <small>Administration Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">公告&amp;FAQ</h3>
                            <p>Mshield 目前处于测试运营阶段</p>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->

                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">网站列表</h3><br>
                            <p style="display:inline-block">waftest.math1as.com&nbsp;</p><p style="display:inline-block;color:green">[审核通过]</p>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                </div><!-- /.col (right) -->
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
         Processed in：ms    </div>
    <strong>Copyright © 2014-2016 <a href="#">Mshield</a> </strong>
            All rights reserved.  <a href="">服务条款  </a>
</footer>
</div><!-- ./wrapper -->
<div id="analytics-code" style="display:none">
     统计代码
</div>
<!-- jQuery 2.1.3 -->
<script src="../../assets/js/jQuery.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../../assets/js/bootstrap.js" type="text/javascript"></script>

<!-- SlimScroll -->
<script src="../../assets/js/jQuery.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="../../assets/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/js/app.js" type="text/javascript"></script>






</body></html>