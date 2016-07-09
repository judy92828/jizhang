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
    
    <link rel="stylesheet" href="/Public/index/css/data-editor.css"/>
    <link href="/Public/index/css/common.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/index/js/date.js" ></script>
    <script type="text/javascript" src="/Public/index/js/iscroll.js" ></script>
    <script type="text/javascript">
        $(function(){
            $('#beginTime').date();
        });
    </script>
    <script type="text/javascript">
        function change(){
            var price=$('input[name=price]').val();
            $('#lblTotal').text(price);
        }
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
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #00c191;
            background-color: #000;
            z-index: 10;
        }
        input{ text-align:center;}
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
            
            
    <div class="weui_cells_title" style="border-bottom:1px solid #CCC; padding-bottom:5px;"><span style="text-align:center; display:block; overflow:hidden; width:100%;">账目明细</span></div>

            
    <div class="weui_cell">
        <div class="weui_cell_hd">
            <label class="weui_label">金额</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <input class="weui_input" type="number" name="price" onChange="change()" placeholder="请输入金额">
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_hd">
            <label class="weui_label">日期</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <input  id="beginTime" class="kbtn weui_input" />
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_hd">
            <label class="weui_label" style="width:7em;">类别</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <select class="weui_select" name="category">
                <option value="2">购物消费</option>
                <option value="3">餐饮</option>
            </select>
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary">
            <textarea class="weui_textarea" placeholder="请输入备注信息" rows="3"></textarea>
        </div>
    </div>
    <div id="datePlugin"></div>

        </div>
        
    <div class="footer">
        <a id="btnSubmit" href="javascript:;">保存</a>
        <div class="left">
            总额：<label id="lblTotal">0</label> 元
        </div>
    </div>

    </div>
</div>
<script src="/Public/index/js/example.js"></script>
</body>
</html>