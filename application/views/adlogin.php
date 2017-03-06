<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Mshield 后台管理</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="../../assets/css/AdminLTE.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/blue.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Mshield</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">登录管理后台</p>

            <form>
            <div class="form-group has-feedback">
                <input id="name" name="name" class="form-control" placeholder="用户名" type="text">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="passwd" name="Password" class="form-control" placeholder="密码" type="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            </form>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_square-blue"><input style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" id="remember_me" value="week" type="checkbox"><ins style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> 记住我
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button id="login" type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div><!-- /.col -->
            </div>
            <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
                <button type="button" class="close" id="ok-close" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> 登录成功!</h4>
                <p id="msg-success-p"></p>
            </div>
            <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;">
                <button type="button" class="close" id="error-close" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> 出错了!</h4>
                <p id="msg-error-p"></p>
            </div>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.3 -->
<script src="../../assets/js/jQuery.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../../assets/js/bootstrap.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="../../assets/js/icheck.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    // $("#msg-error").hide(100);
    // $("#msg-success").hide(100);
</script>
<script>

    $(document).ready(function(){
        function login(){
            $.ajax({
                type:"POST",
                url:"../../index.php/adlogin/check",
                dataType:"json",
                data:{
                    name: $("#name").val(),
                    passwd: $("#passwd").val(),
                    remember_me: $("#remember_me").val()
                },
                success:function(data){
                    if(data.ok){
                        $("#msg-error").hide(100);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='../../index.php/admin'", 2000);
                    }else{
                        $("#msg-error").hide(10);
                        $("#msg-error").show(100);
                        $("#msg-error-p").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误："+jqXHR.status);
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                login();
            }
        });
        $("#login").click(function(){
            login();
        });
         $("#ok-close").click(function(){
            $("#msg-success").hide(100);
        });
        $("#error-close").click(function(){
            $("#msg-error").hide(100);
        });
    })
</script>


</body></html>