<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title><?php echo ($title); ?></title>
    <link href="/Public/index/css/core.css" rel="stylesheet" />
    <link href="/Public/index/css/pc.css" rel="stylesheet" media="screen and (min-width:700px)"/>
    <link href="/Public/index/css/me-index.css" rel="stylesheet" />
    <script src="/Public/index/js/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" href="/Public/index/css/weui.css"/>
    <link rel="stylesheet" href="/Public/index/css/weui2.css"/>
    <script src="/Public/index/js/zepto.min.js"></script>
    <script src="/Public/layer/layer.js"></script>
    <style type="text/css">
        .weui_media_box.weui_media_appmsg{ border-bottom:1px solid #E5E5E5;}
        .footer #footerMe a {background-image: url("/Public/index/images/sy.png");}
        #linkMessage p{ line-height:20px; font-size:14px; color:#fff;}
        #linkMessage p:first-child{ font-weight:bold; color:#6C0;}
    </style>
    
    <script type="text/javascript">
        $(function() {
            $('.cate').click(function () {
//                $('#category').toggle();
                $('#dialog').show();
            })
            $('.submit').click(function () {
                layer.load();
                var cate = $("input[name=category]").val();
                if (cate == null || cate == undefined || cate == '') {
                    layer.msg('分类名不能为空！')
                } else {
                    $.post("<?php echo U('Index/category');?>",
                    {
                        category:$("input[name=category]").val()
                    },
                    function(data,status){
                        if(data==1){
                            layer.closeAll('loading');
                            layer.msg('添加成功');
                            setTimeout(function(){
                                window.location.reload();
                            },1200)
                        }else if(data==0){
                            layer.msg('添加失败');
                            layer.closeAll('loading');

                        }else if(data==2){
                            layer.msg('该分类存在');
                            layer.closeAll('loading');
                        }
                    });
                }
            })
        });
    </script>
    <style type="text/css">
        .weui_cell{border-bottom: 1px solid #ccc;}
    </style>

</head>
<body ontouchstart>
<div id="body" class="weixin">
    <div class="page has-footer">
        <div class="header"> </div>
        <div class="content">
            
                <div class="section-bg"> <a class="user-wrap" href="index.html"> <img /> </a>
                <div class="user-name" id="lblNickname"></div>
                <div class="section-numbers">
                    <ul>
                        <li id="linkMessage">
                            <a href="/app/message">
                                <p>昨日支出</p>
                                <p>400元</p>
                            </a>
                        </li>
                        <li id="linkMessage">
                            <a href="/app/message">
                                <p>本周支出</p>
                                <p>239元</p>
                            </a>
                        </li>
                        <li id="linkMessage">
                            <a href="/app/message">
                                <p>本月支出</p>
                                <p>9878元</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
    <div class="row no-gutter">
        <div class="col-100 ui-border navpre cate">添加分类</div>
    </div>

            
    <div class="weui_cell weui_vcode" id="category" style="display:none;">

        <div class="weui_cell_ft submit"> <img src="/Public/index/images/sub.png"> </div>
    </div>
    <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui_cell">
        <div class="weui_cell_hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
        <div class="weui_cell_bd weui_cell_primary">
            <p id="body<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></p>
        </div>
        <div class="weui_cell_ft edit<?php echo ($vo["id"]); ?>"><span onclick="edit(<?php echo ($vo["id"]); ?>)">修改</span> | <span onclick="del(<?php echo ($vo["id"]); ?>)">删除</span></div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="dialog" id='dialog' style="display:none;">
        <div class="d-box">
            <div onclick="$('#dialog').hide();" class="d-close">X</div>
            <div class="weui_cell_bd weui_cell_primary" style="height:auto; display: block; overflow: hidden; background-color: #fff;">
                <div>
                    <input class="weui_input" name="category" type="text" placeholder="请输入分类名称" style="width: 80%; margin-top: 20px; border: 1px solid #ccc;height: 40px;">
                    <div class="weui_btn_area">
                        <a class="weui_btn weui_btn_primary submit" href="javascript:" id="showTooltips">确定</a>
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function edit(key){
            $('#body'+key).html('<input type="text" name="category" id="text'+key+'" class="weui_input" value="'+$('#body'+key).text()+'" />');
            $('.edit'+key).html('<a class="weui_btn weui_btn_primary" onclick="sub('+key+')" href="javascript:" style="font-size: 10px; line-height: 25px;">确定</a> ');
            $('#text'+key).focus().val($('#text'+key).val());
        }
        function sub(id){
            var cate = $('#text'+id).val();
            if (cate == null || cate == undefined || cate == '') {
                layer.msg('分类名不能为空！')
            }else{
                layer.load();
                $.post("<?php echo U('Index/cateedit');?>",
                {
                    category:cate,
                    id:id
                },
                function(data,status){
                    if(data==1){
                        layer.closeAll('loading');
                        layer.msg('修改成功');
                        setTimeout(function(){
                            window.location.reload();
                        },1200)
                    }else if(data==0){
                        layer.msg('修改失败');
                        layer.closeAll('loading');

                    }else if(data==2){
                        layer.msg('该分类存在');
                        layer.closeAll('loading');
                    }
                });
            }
        }
        function del(id){
            if (id == null || id == undefined || id == '') {
                layer.msg('数据错误！');
            }else{
                layer.confirm('你确定删除该数据吗', {
                    btn: ['确定','取消'] //按钮
                }, function(){
                    layer.load();
                    $.post("<?php echo U('Index/catedel');?>",
                    {
                        id:id
                    },
                    function(data,status){
                        layer.closeAll('loading');
                        if(data==1){layer.msg('删除成功');setTimeout(function(){window.location.reload();},1200)}else{layer.msg('删除失败')}
                    });
                }, function(){

                });
            }
        }
    </script>

        </div>
        
        <div class="footer">
            <ul class="nav">
                <li id="footerHome" class=""> <a href="<?php echo U('Index/category');?>">账本分类</a> </li>
                <li id="footerDiscover" class=""> <a href="<?php echo U('Index/income');?>">收入账单</a> </li>
                <li id="footerMe" class=""> <a href="<?php echo U('Index/expend');?>">支出账单</a> </li><!-- class="selected"-->
            </ul>
        </div>
        
    </div>
</div>
<script src="/Public/index/js/example.js"></script>
</body>
</html>