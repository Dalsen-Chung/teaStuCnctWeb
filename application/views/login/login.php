<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>高校师生通讯录管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('public/layui/css/layui.css') ?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('public/common/css/login.css') ?>">
</head>
<body>
    <div class="loginWarp">
        <div class="formWarp">
            <form class="layui-form layui-form-pane" method="post" action="<?php echo site_url('login/do') ?>">
                <div class="warpTitle">
                    <span><i class="layui-icon">&#xe656;</i>高校师生通讯录管理后台</span>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><i class="layui-icon">&#xe66f;</i> 用户名</label>
                    <div class="layui-input-block">
                        <input type="text" name="account" placeholder="请输入用户名" lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><i class="layui-icon">&#xe673;</i> 密码</label>
                    <div class="layui-input-block">
                        <input type="password" name="password" placeholder="请输入密码" lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><i class="layui-icon">&#xe679;</i> 验证码</label>
                    <div class="layui-input-block">
                        <input type="text" name="verify_code" placeholder="请输入验证码" lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                <a href="<?php echo site_url() ?>" title="点击刷新">
                    <?php echo $codeimg;?>
                </a>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="*">登录</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url('public/layui/layui.all.js') ?>"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script>
        layui.use('form', function(){
            var form = layui.form;
        //各种基于事件的操作，下面会有进一步介绍
        });
    </script>
</body>
</html>