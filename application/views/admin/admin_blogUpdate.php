<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin form Examples</title>
    <meta name="description" content="这是一个form页面">
    <meta name="keywords" content="form">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <base href="<?php echo site_url(); ?>"
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
    <style>
        .photo {
            width: 200px;
            height: 200px;
            border:1px solid #ccc;
            color: #ccc;
            font-size: 14px;
        }
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<?php include 'admin_header.php'; ?>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <?php include 'admin_siderbar.php'; ?>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">博客管理</strong> / <small>Blog Management</small></div>
        </div>

        <div class="am-tabs am-margin" data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs">
                <li><a href="#tab2">编辑博客</a></li>
            </ul>
            <div class="am-tabs-bd">
                <div class="am-tab-panel am-fade" id="tab2">
                    <form class="am-form">
                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                标题:
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                <input type="text" class="am-input-sm " name="newTitle" value="<?php echo $rowb->title; ?>" data-id="<?php echo $rowb->blog_id; ?>">
                            </div>
                            <div class="am-hide-sm-only am-u-md-6 ntitle" style="color:red;font-size:14px"></div>
                        </div>

                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                作者ID:
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                <input type="text" class="am-input-sm " name="admin_id" value="<?php echo $rowb->admin_id; ?>" data-id="<?php echo $rowb->blog_id; ?>">
                            </div>
                            <div class="am-hide-sm-only am-u-md-6 ntitle" style="color:red;font-size:14px"></div>
                        </div>

                        <div class="am-g am-margin-top-sm">
                            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                                内容:
                            </div>
                            <div class="am-u-sm-12 am-u-md-10">
                                <textarea rows="20" name="newContent" style="width:400px"><?php echo $rowb->content; ?></textarea>
                            </div>
                            <div class="am-hide-sm-only am-u-md-6 ncontent" style="color:red;font-size:14px"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="am-margin">
            <button type="button" class="am-btn am-btn-primary am-btn-xs newSave">提交保存</button>
            <button type="button" class="am-btn am-btn-primary am-btn-xs giveUp">放弃保存</button>
        </div>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/admin_blogUpdate.js"></script>
</body>
</html>
