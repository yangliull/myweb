<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin table Examples</title>
    <meta name="description" content="这是一个 table 页面">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <base href="<?php echo site_url(); ?>"
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">留言管理</strong> / <small>Message Management</small></div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
<!--                        <button type="button" class="am-btn am-btn-default mNew"><span class="am-icon-plus"></span> 新增</button>-->
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>

            <div class="am-u-sm-12 am-u-md-3">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
                </div>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                    <tr>
                        <th class="table-check">
                            <input type="checkbox" /></th>
                        <th class="table-id">ID</th>
                        <th class="table-title">用户名</th>
                        <th class="table-email">邮箱</th>
                        <th class="table-content">内容</th>
                        <th class="table-time">时间</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($messages as $message) {
                    ?>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td><?php echo $message -> message_id; ?></td>
                        <td><a href="#"><?php echo $message -> username; ?></a></td>
                        <td><?php echo $message -> email; ?></td>
                        <td><?php echo $message -> content; ?></td>
                        <td><?php echo $message -> add_time; ?></td>
                        <td>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
<!--                                    <button data-id="--><?php //echo $message -> message_id; ?><!--" class="am-btn am-btn-default am-btn-xs am-text-secondary mEdit"><span-->
<!--                                            class="am-icon-pencil-square-o"></span> 编辑-->
<!--                                    </button>-->
                                    <button type="button" data-id="<?php echo $message -> message_id; ?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only mDelete"><span
                                            class="am-icon-trash-o"></span> 删除
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
                <hr />
            </div>
        </div>
    </div>
    <!-- content end -->
</div>
<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
<!--[if lt IE 9]>
<!--<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>-->
<!--<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>-->
<!--<script src="assets/js/amazeui.ie8polyfill.min.js"></script>-->
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/admin_message.js"></script>
</body>
</html>
