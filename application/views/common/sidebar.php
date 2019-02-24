<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test"  id="sidebar">
        <li class="layui-nav-item <?php echo uri_string() === 'web/dashboard'? 'layui-this' : '' ?>">
            <a href="<?php echo site_url('web/dashboard') ?>">
                <i class="layui-icon siderbar-icon">&#xe665;</i>控制台
            </a>
        </li>
        <li class="layui-nav-item <?php echo strpos(uri_string(),'org_mgt')  !== false ? 'layui-nav-itemed' : '' ?>">
            <a href="javascript:;"><i class="layui-icon siderbar-icon">&#xe66c;</i>机构管理</a>
            <dl class="layui-nav-child">
                <dd <?php echo strpos(uri_string(),'college')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/org_mgt/college') ?>">学院信息</a>
                </dd>
                <dd <?php echo strpos(uri_string(),'major')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/org_mgt/major') ?>">专业信息</a>
                </dd>
                <dd <?php echo strpos(uri_string(),'edu_branch')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/org_mgt/edu_branch') ?>">教学及科研部门</a>
                </dd>
            </dl>
        </li>
        <li class="layui-nav-item <?php echo strpos(uri_string(),'nt_mgt')  !== false ? 'layui-nav-itemed' : '' ?>">
            <a href="javascript:;"><i class="layui-icon siderbar-icon">&#xe667;</i>公告管理</a>
            <dl class="layui-nav-child">
                <dd <?php echo strpos(uri_string(),'notice_list')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/nt_mgt/notice_list') ?>">公告列表</a>
                </dd>
                <dd <?php echo strpos(uri_string(),'unreview_list')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/nt_mgt/unreview_list') ?>">待审核公告</a>
                </dd>
            </dl>
        </li>
        <li class="layui-nav-item <?php echo strpos(uri_string(),'user_mgt')  !== false ? 'layui-nav-itemed' : '' ?>">
            <a href="javascript:;"><i class="layui-icon siderbar-icon">&#xe66f;</i>用户管理</a>
            <dl class="layui-nav-child">
                <dd <?php echo strpos(uri_string(),'student')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/user_mgt/student') ?>">学生用户</a>
                </dd>
                <dd <?php echo strpos(uri_string(),'teacher')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/user_mgt/teacher') ?>">教师用户</a>
                </dd>
                <dd <?php echo strpos(uri_string(),'administrators')  !== false ? 'class="layui-this"' : '' ?> >
                    <a href="<?php echo site_url('web/user_mgt/administrators') ?>">管理员用户</a>
                </dd>
            </dl>
        </li>
      </ul>
    </div>
</div>