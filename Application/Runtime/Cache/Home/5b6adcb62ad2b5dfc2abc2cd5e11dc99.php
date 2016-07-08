<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>管理员验证</title>
    <link rel="stylesheet" type="text/css" href="/Public/login/css/style.css" />
    <script type="text/javascript" src="/Public/login/js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="/Public/login/js/placeholder.js"></script>
    <script type="text/javascript" src="/Public/layer/layer.js"></script>
</head>
<body>
    <form id="slick-login">
        <label for="password">password</label><input type="tel" name="pwd" class="placeholder" placeholder="请输入授权码" onchange="change()">
    </form>
<script type="text/javascript">
    function change(){
        $.post("<?php echo U('Login/yzlogin');?>",
        {
            pwd:$('input[name=pwd]').val()
        },
        function(data,status){
            if(data==1){
                layer.msg('授权成功');
                setTimeout(function(){
                    window.location.href = "<?php echo U('Index/index');?>";
                },1200)
            }else{
                layer.msg('授权码错误');
            }
        });
    }
</script>
</body>
</html>