<div class="layui-body layui-bg-gray" id="sysmgt">
    <div style="padding: 30px;">
        <fieldset class="layui-elem-field">
            <legend>基本资料</legend>
            <div class="layui-field-box">
                <form class="layui-form" method="post" action="<?php echo site_url('web/sys_mgt/updateInfo') ?>" style="width: 500px">
                    <div class="layui-form-item">
                        <label class="layui-form-label">姓名</label>
                        <div class="layui-input-inline">
                            <input type="text" name="name" value="<?php echo $baseInfo['admin_name'] ?>" required  lay-verify="required" disabled autocomplete="off" class="layui-input">
                            <input type="hidden" name="admin_id" value="<?php echo $baseInfo['admin_id'] ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">账号</label>
                        <div class="layui-input-inline">
                            <input type="text" name="account" value="<?php echo $baseInfo['admin_account'] ?>" required  lay-verify="required" disabled autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">学院</label>
                        <div class="layui-input-inline">
                            <input type="text" name="college" value="<?php echo $baseInfo['college_name'] ?>" required  lay-verify="required" disabled autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">专业</label>
                        <div class="layui-input-inline">
                            <input type="text" name="major" value="<?php echo $baseInfo['major_name'] ?>" required  lay-verify="required" disabled autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">旧密码</label>
                        <div class="layui-input-inline">
                        <input type="password" name="oldPassword" required lay-verify="required" placeholder="请输入旧密码" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">新密码</label>
                        <div class="layui-input-inline">
                        <input type="password" name="newPassword" required lay-verify="required" placeholder="请输入新密码" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit>立即提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
</div>