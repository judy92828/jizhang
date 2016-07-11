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
    
</head>
<body ontouchstart>
<div id="body" class="weixin">
    <div class="page has-footer">
        <div class="header"> </div>
        <div class="content">
            
                <div class="section-bg"> <a class="user-wrap" href="/"> <img src="/Public/index/images/logo.png" /> </a>
                <div class="user-name" id="lblNickname"></div>
                <div class="section-numbers">
                    <ul>
                        <li id="linkMessage">
                            <a href="javascript:;">
                                <p>昨日支出</p>
                                <p><?php if($zrsum != null): echo ($zrsum); else: ?>0<?php endif; ?>元</p>
                            </a>
                        </li>
                        <li id="linkMessage">
                            <a href="javascript:;">
                                <p>本周支出</p>
                                <p><?php if($bzsum != null): echo ($bzsum); else: ?>0<?php endif; ?>元</p>
                            </a>
                        </li>
                        <li id="linkMessage">
                            <a href="javascript:;">
                                <p>本月支出</p>
                                <p><?php if($bysum != null): echo ($bysum); else: ?>0<?php endif; ?>元</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
    <div class="row no-gutter">
        <div class="col-50 ui-border navpre"><?php if(is_null($sum)){ ?>0<?php }else{ echo ($sum); } ?>元</div>
        <div class="col-50 ui-border navpre"><a href="<?php echo U('Index/seach');?>">查询账单</a></div>
    </div>

            
    <div class="weui_panel_bd">
        <?php if(is_array($bill)): $i = 0; $__LIST__ = $bill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:void(0);" class="weui_media_box weui_media_appmsg">
                <div class="weui_media_hd"> <img class="weui_media_appmsg_thumb" src="<?php if($vo['mold']==0){ ?>/Public/index/images/x.png<?php }else{ ?>/Public/index/images/k.png<?php } ?>" alt=""> </div>
                <div class="weui_media_bd">
                    <h4 class="weui_media_title">
                        <?php if($vo['mold']==0){?>
                        <?php if($vo['type']==0){echo '微信';}else if($vo['type']==1){echo "支付宝";}else if($vo['type']==2){echo "银行卡";}else if($vo['type']==3){echo "现金";} ?>
                        <?php }else{ ?>
                        <?php echo catename($vo['type']); ?>
                        <?php } ?>
                        <span class="price">¥<?php if(strpos($vo['price'],'.')){ ?> <?php echo ($vo["price"]); ?> <?php }else{ ?> <?php echo ($vo["price"]); ?>.00 <?php } ?></span></h4>
                    <p class="weui_media_desc"><?php echo ($vo["msg"]); ?></p>
                </div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

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