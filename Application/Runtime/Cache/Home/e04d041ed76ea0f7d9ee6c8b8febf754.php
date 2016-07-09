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
    
    <link href="/Public/index/css/common.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/index/js/date.js" ></script>
    <script type="text/javascript" src="/Public/index/js/iscroll.js" ></script>
    <script type="text/javascript">
        $(function(){
            $('#beginTime').date();
            $('#endTime').date();
        });
    </script>
    <style type="text/css">
        .weui_cell {
            border-bottom: 1px solid #E5E5E5;
        }
        .price {
            float: right;
            color: #F00;
            font-weight: bold;
        }
        .footer #footerMe a {
            background-image: url("/Public/index/images/sy.png");
        }
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
        <div class="col-100 ui-border navpre">账单查询</div>
    </div>

            
    <div class="weui_cells_radio">
        <label class="weui_cell weui_check_label" for="x11">
            <div class="weui_cell_bd weui_cell_primary">
                <p>收入</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" class="weui_check" name="radio1" id="x11">
                <span class="weui_icon_checked"></span> </div>
        </label>
        <label class="weui_cell weui_check_label" for="x12">
            <div class="weui_cell_bd weui_cell_primary">
                <p>支出</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" name="radio1" class="weui_check" id="x12">
                <span class="weui_icon_checked"></span> </div>
        </label>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_hd">
            <label class="weui_label" style="width:7em;">分类选择</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <select class="weui_select" name="category">
                <option value="2">QQ号</option>
                <option value="3">Email</option>
            </select>
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_hd">
            <label class="weui_label" style="width:7em;">开始时间</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <input  id="beginTime" class="kbtn weui_input" />
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_hd">
            <label class="weui_label" style="width:7em;">结束时间</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <input id="endTime" class="kbtn weui_input" />
        </div>
    </div>
    <div class="weui_btn_area"> <a class="weui_btn weui_btn_primary" href="javascript:" id="showTooltips">立即查询</a> </div>
    <div id="datePlugin"></div>
    <br/>

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