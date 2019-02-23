<div class="layui-header">
  <div class="layui-logo navber-title"><i class="layui-icon siderbar-icon">&#xe653;</i>App-Backstage</div>
  <!-- 头部区域（可配合layui已有的水平导航） -->
  <ul class="layui-nav layui-layout-left">
    <li class="layui-nav-item"><a href="">控制台</a></li>
    <li class="layui-nav-item"><a href="">商品管理</a></li>
    <li class="layui-nav-item"><a href="">用户</a></li>
    <li class="layui-nav-item">
      <a href="javascript:;">其它系统</a>
      <dl class="layui-nav-child">
        <dd><a href="">邮件管理</a></dd>
        <dd><a href="">消息管理</a></dd>
        <dd><a href="">授权管理</a></dd>
      </dl>
    </li>
  </ul>
  <ul class="layui-nav layui-layout-right">
    <li class="layui-nav-item">
      <a href="javascript:;">
        <img src="<?php echo base_url('public/common/image/avatar.jpg') ?>" class="layui-nav-img">
        Shirly
      </a>
      <dl class="layui-nav-child">
        <dd><a href="">基本资料</a></dd>
        <dd><a href="">安全设置</a></dd>
      </dl>
    </li>
    <li class="layui-nav-item"><a href="<?php echo site_url('logout') ?>">Logout</a></li>
  </ul>
</div>