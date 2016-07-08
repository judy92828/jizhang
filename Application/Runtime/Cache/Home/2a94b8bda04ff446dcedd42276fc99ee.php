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
                <div class="col-50 ui-border navpre" style="background-image:url(/Public/index/images/me-feedback.png);"><a href="<?php echo U('Index/addincome');?>">收入记账</a></div>
                <div class="col-50 ui-border navpre" style="background-image:url(/Public/index/images/me-book.png);"><a href="<?php echo U('Index/addexpend');?>">支出记账</a></div>
            </div>
            
            
            <div class="weui_panel_bd"> <a href="javascript:void(0);" class="weui_media_box weui_media_appmsg">
                <div class="weui_media_hd"> <img class="weui_media_appmsg_thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAeFBMVEUAwAD///+U5ZTc9twOww7G8MYwzDCH4YcfyR9x23Hw+/DY9dhm2WZG0kbT9NP0/PTL8sux7LFe115T1VM+zz7i+OIXxhes6qxr2mvA8MCe6J6M4oz6/frr+us5zjn2/fa67rqB4IF13XWn6ad83nxa1loqyirn+eccHxx4AAAC/klEQVRo3u2W2ZKiQBBF8wpCNSCyLwri7v//4bRIFVXoTBBB+DAReV5sG6lTXDITiGEYhmEYhmEYhmEYhmEY5v9i5fsZGRx9PyGDne8f6K9cfd+mKXe1yNG/0CcqYE86AkBMBh66f20deBc7wA/1WFiTwvSEpBMA2JJOBsSLxe/4QEEaJRrASP8EVF8Q74GbmevKg0saa0B8QbwBdjRyADYxIhqxAZ++IKYtciPXLQVG+imw+oo4Bu56rjEJ4GYsvPmKOAB+xlz7L5aevqUXuePWVhvWJ4eWiwUQ67mK51qPj4dFDMlRLBZTqF3SDvmr4BwtkECu5gHWPkmDfQh02WLxXuvbvC8ku8F57GsI5e0CmUwLz1kq3kD17R1In5816rGvQ5VMk5FEtIiWislTffuDpl/k/PzscdQsv8r9qWq4LRWX6tQYtTxvI3XyrwdyQxChXioOngH3dLgOFjk0all56XRi/wDFQrGQU3Os5t0wJu1GNtNKHdPqYaGYQuRDfbfDf26AGLYSyGS3ZAK4S8XuoAlxGSdYMKwqZKM9XJMtyqXi7HX/CiAZS6d8bSVUz5J36mEMFDTlAFQzxOT1dzLRljjB6+++ejFqka+mXIe6F59mw22OuOw1F4T6lg/9VjL1rLDoI9Xzl1MSYDNHnPQnt3D1EE7PrXjye/3pVpr1Z45hMUdcACc5NVQI0bOdS1WA0wuz73e7/5TNqBPhQXPEFGJNV2zNqWI7QKBd2Gn6AiBko02zuAOXeWIXjV0jNqdKegaE/kJQ6Bfs4aju04lMLkA2T5wBSYPKDGF3RKhFYEa6A1L1LG2yacmsaZ6YPOSAMKNsO+N5dNTfkc5Aqe26uxHpx7ZirvgCwJpWq/lmX1hA7LyabQ34tt5RiJKXSwQ+0KU0V5xg+hZrd4Bn1n4EID+WkQdgLfRNtvil9SPfwy+WQ7PFBWQz6dGWZBLkeJFXZGCfLUjCgGgqXo5TuSu3cugdcTv/HjqnBTEMwzAMwzAMwzAMwzAMw/zf/AFbXiOA6frlMAAAAABJRU5ErkJggg==" alt=""> </div>
                <div class="weui_media_bd">
                    <h4 class="weui_media_title">标题一<span class="price">¥30.00</span></h4>
                    <p class="weui_media_desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                </div>
            </a> <a href="javascript:void(0);" class="weui_media_box weui_media_appmsg">
                <div class="weui_media_hd"> <img class="weui_media_appmsg_thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAeFBMVEUAwAD///+U5ZTc9twOww7G8MYwzDCH4YcfyR9x23Hw+/DY9dhm2WZG0kbT9NP0/PTL8sux7LFe115T1VM+zz7i+OIXxhes6qxr2mvA8MCe6J6M4oz6/frr+us5zjn2/fa67rqB4IF13XWn6ad83nxa1loqyirn+eccHxx4AAAC/klEQVRo3u2W2ZKiQBBF8wpCNSCyLwri7v//4bRIFVXoTBBB+DAReV5sG6lTXDITiGEYhmEYhmEYhmEYhmEY5v9i5fsZGRx9PyGDne8f6K9cfd+mKXe1yNG/0CcqYE86AkBMBh66f20deBc7wA/1WFiTwvSEpBMA2JJOBsSLxe/4QEEaJRrASP8EVF8Q74GbmevKg0saa0B8QbwBdjRyADYxIhqxAZ++IKYtciPXLQVG+imw+oo4Bu56rjEJ4GYsvPmKOAB+xlz7L5aevqUXuePWVhvWJ4eWiwUQ67mK51qPj4dFDMlRLBZTqF3SDvmr4BwtkECu5gHWPkmDfQh02WLxXuvbvC8ku8F57GsI5e0CmUwLz1kq3kD17R1In5816rGvQ5VMk5FEtIiWislTffuDpl/k/PzscdQsv8r9qWq4LRWX6tQYtTxvI3XyrwdyQxChXioOngH3dLgOFjk0all56XRi/wDFQrGQU3Os5t0wJu1GNtNKHdPqYaGYQuRDfbfDf26AGLYSyGS3ZAK4S8XuoAlxGSdYMKwqZKM9XJMtyqXi7HX/CiAZS6d8bSVUz5J36mEMFDTlAFQzxOT1dzLRljjB6+++ejFqka+mXIe6F59mw22OuOw1F4T6lg/9VjL1rLDoI9Xzl1MSYDNHnPQnt3D1EE7PrXjye/3pVpr1Z45hMUdcACc5NVQI0bOdS1WA0wuz73e7/5TNqBPhQXPEFGJNV2zNqWI7QKBd2Gn6AiBko02zuAOXeWIXjV0jNqdKegaE/kJQ6Bfs4aju04lMLkA2T5wBSYPKDGF3RKhFYEa6A1L1LG2yacmsaZ6YPOSAMKNsO+N5dNTfkc5Aqe26uxHpx7ZirvgCwJpWq/lmX1hA7LyabQ34tt5RiJKXSwQ+0KU0V5xg+hZrd4Bn1n4EID+WkQdgLfRNtvil9SPfwy+WQ7PFBWQz6dGWZBLkeJFXZGCfLUjCgGgqXo5TuSu3cugdcTv/HjqnBTEMwzAMwzAMwzAMwzAMw/zf/AFbXiOA6frlMAAAAABJRU5ErkJggg==" alt=""> </div>
                <div class="weui_media_bd">
                    <h4 class="weui_media_title">标题二</h4>
                    <p class="weui_media_desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                </div>
            </a> </div>
            
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