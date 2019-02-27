<div class="layui-body layui-bg-gray" id="teacher">
    <div style="padding: 15px;" id="teacher">
        <div class="layui-card">
            <div class="layui-card-header">
                教师信息列表
                <button class="layui-btn layui-btn-radius layui-btn-sm" id="teacher_add_btn">
                    <i class="layui-icon">&#xe608;</i> 添加教师
                </button>
            </div>
            <div class="layui-card-body">
                <table class="layui-table" lay-size="sm">
                    <colgroup>
                        <col width="60">
                        <col width="80">
                        <col width="100">
                        <col width="60">
                        <col width="50">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <col>
                        <col width="60">
                        <col width="50">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>教师ID</th>
                            <th>姓名</th>
                            <th>登录账号</th>
                            <th>角色ID</th>
                            <th>性别</th>
                            <th>电话</th>
                            <th>学院ID</th>
                            <th>专业ID</th>
                            <th>教授课程</th>
                            <th>是否为辅导员</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($teacher_list as $teacher):?>
                            <tr>
                                <td><?php echo $teacher['tea_id'];?></td>
                                <td><?php echo $teacher['tea_name'];?></td> 
                                <td><?php echo $teacher['tea_account'];?></td> 
                                <td><?php echo $teacher['role_id'];?></td>
                                <td><?php echo $teacher['tea_sex'];?></td>
                                <td><?php echo $teacher['tea_phone'];?></td>
                                <td><?php echo $teacher['college_id'];?></td>
                                <td><?php echo $teacher['major_id'];?></td>
                                <td><?php echo $teacher['tea_course'];?></td>
                                <td><?php echo $teacher['tea_isInstructor'];?></td>
                                <td>
                                    <a href="<?php echo site_url('web/user_mgt/delete_teacher').'?tea_id='.$teacher['tea_id']; ?>" class="layui-btn layui-btn-danger layui-btn-xs">
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
<div id="addTeacherMsgForm">
    <form class="layui-form" method="post" action="<?php echo site_url('web/user_mgt/add_teacher') ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">工号</label>
            <div class="layui-input-block">
                <input type="text" name="tea_account" required  lay-verify="required" placeholder="请输入工号(登录账号)" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="password" name="tea_password" required  lay-verify="required" placeholder="请输入登录密码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-block">
                <input type="text" name="tea_name" required  lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">性别</label>
            <div class="layui-input-block">
            <input type="radio" name="tea_sex" value="男" title="男" checked>
            <input type="radio" name="tea_sex" value="女" title="女">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">角色</label>
            <div class="layui-input-block">
            <select name="role_id" lay-verify="required">
                    <option value=""></option>
                    <option value="1">1</option>
            </select>
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
            <label class="layui-form-label">电话</label>
            <div class="layui-input-block">
                <input type="text" name="tea_phone" required  lay-verify="required" placeholder="请输入教师电话" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">教授课程</label>
            <div class="layui-input-block">
                <textarea name="tea_course" required  lay-verify="required" placeholder="请输入教授课程,以英文格式逗号(,)分割" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">辅导员</label>
            <div class="layui-input-block">
            <input type="radio" name="tea_isInstructor" value="0" title="否" checked>
            <input type="radio" name="tea_isInstructor" value="1" title="是">
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