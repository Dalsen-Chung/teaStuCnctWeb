<div class="layui-header">
  <div class="layui-logo navber-title"><i class="layui-icon siderbar-icon">&#xe653;</i>App-Backstage</div>
  <!-- 头部区域（可配合layui已有的水平导航） -->
  <ul class="layui-nav layui-layout-left">
    <li class="layui-nav-item <?php echo uri_string() === 'web/dashboard'? 'layui-this' : '' ?>">
      <a href="<?php echo site_url('web/dashboard') ?>">控制台</a>
    </li>
    <li class="layui-nav-item <?php echo uri_string() === 'web/nt_mgt/notice_list'? 'layui-this' : '' ?>">
      <a href="<?php echo site_url('web/nt_mgt/notice_list') ?>">公告列表</a>
    </li>
    <li class="layui-nav-item <?php echo uri_string() === 'web/nt_mgt/unreview_list'? 'layui-this' : '' ?>">
      <a href="<?php echo site_url('web/nt_mgt/unreview_list') ?>">待审核公告</a>
    </li>
    <li class="layui-nav-item <?php echo strpos(uri_string(),'user_mgt')  !== false ? 'layui-this' : '' ?>">
      <a href="javascript:;">用户管理</a>
      <dl class="layui-nav-child">
        <dd><a href="<?php echo site_url('web/user_mgt/student') ?>">学生用户</a></dd>
        <dd><a href="<?php echo site_url('web/user_mgt/teacher') ?>">教师用户</a></dd>
        <dd><a href="<?php echo site_url('web/user_mgt/administrators') ?>">管理员用户</a></dd>
      </dl>
    </li>
  </ul>
  <ul class="layui-nav layui-layout-right">
    <li class="layui-nav-item">
      <a href="javascript:;">
        <img src="<?php echo base_url('public/common/image/avatar.jpg') ?>" class="layui-nav-img">
        <?php echo $this->session->admin_name; ?>
      </a>
      <dl class="layui-nav-child">
        <dd><a href="">基本资料</a></dd>
        <dd><a href="">安全设置</a></dd>
      </dl>
    </li>
    <li class="layui-nav-item"><a href="<?php echo site_url('web/logout') ?>">Logout</a></li>
  </ul>
</div>