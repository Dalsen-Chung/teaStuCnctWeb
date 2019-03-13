<div class="layui-body layui-bg-gray" id="admin">
    <div style="padding: 15px;" id="admin">
        <div class="layui-card">
            <div class="layui-card-header">
                管理员信息列表
                <button class="layui-btn layui-btn-radius layui-btn-sm" id="admin_add_btn">
                    <i class="layui-icon">&#xe608;</i> 添加管理员
                </button>
            </div>
            <div class="layui-card-body">
                <table class="layui-table" lay-size="sm">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>管理员ID</th>
                            <th>姓名</th>
                            <th>登录账号</th>
                            <th>所属学院</th>
                            <th>所属专业</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($admin_list as $admin):?>
                            <tr>
                                <td><?php echo $admin['admin_id'];?></td>
                                <td><?php echo $admin['admin_name'];?></td> 
                                <td><?php echo $admin['admin_account'];?></td> 
                                <td><?php echo $admin['college_name'];?></td>
                                <td><?php echo $admin['major_name'];?></td>
                                <td>
                                    <a href="<?php echo site_url('web/user_mgt/delete_administrators').'?admin_id='.$admin['admin_id']; ?>" 
                                        class="layui-btn layui-btn-danger layui-btn-xs <?php echo $admin['admin_account'] === $this->session->account ? 'layui-btn-disabled' : ''; ?>"> 
                                        <i class="layui-icon">&#xe640;</i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="addAdminMsgForm">
    <form class="layui-form" method="post" action="<?php echo site_url('web/user_mgt/add_administrators') ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">账号</label>
            <div class="layui-input-block">
                <input type="text" name="admin_account" required  lay-verify="required" placeholder="请输入管理员账号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="password" name="admin_password" required  lay-verify="required" placeholder="请输入登录密码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-block">
                <input type="text" name="admin_name" required  lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">学院</label>
            <div class="layui-input-block">
            <select id="stu_college_select" name="college_id" lay-verify="required">
                    <option value=""></option>
                    <?php foreach ($college_option as $option):?>
                        <option value="<?php echo $option['college_id'];?>"><?php echo $option['college_name']; ?></option>
                    <?php endforeach;?>
            </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">专业</label>
            <div class="layui-input-block">
            <select name="major_id" lay-verify="required">
                    <option value=""></option>
                    <?php foreach ($major_option as $option):?>
                        <option value="<?php echo $option['major_id'];?>"><?php echo $option['major_name']; ?></option>
                    <?php endforeach;?>
            </select>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="*">添加</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
</div>