<div class="layui-body layui-bg-gray" id="student">
    <div style="padding: 15px;" id="student">
        <div class="layui-card">
            <div class="layui-card-header">
                学生信息列表
                <button class="layui-btn layui-btn-radius layui-btn-sm" id="student_add_btn">
                    <i class="layui-icon">&#xe608;</i> 添加学生
                </button>
            </div>
            <div class="layui-card-body">
                <table class="layui-table" lay-size="sm">
                    <colgroup>
                        <col width="60">
                        <col width="50">
                        <col width="50">
                        <col width="60">
                        <col width="50">
                        <col width="70">
                        <col width="70">
                        <col width="60">
                        <col width="60">
                        <col width="50">
                        <col>
                        <col width="50">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>学生ID</th>
                            <th>姓名</th>
                            <th>登录账号</th>
                            <th>角色ID</th>
                            <th>性别</th>
                            <th>电话</th>
                            <th>年级</th>
                            <th>学院ID</th>
                            <th>专业ID</th>
                            <th>班级</th>
                            <th>家庭住址</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($student_list as $student):?>
                            <tr>
                                <td><?php echo $student['stu_id'];?></td>
                                <td><?php echo $student['stu_name'];?></td> 
                                <td><?php echo $student['stu_account'];?></td> 
                                <td><?php echo $student['role_id'];?></td>
                                <td><?php echo $student['stu_sex'];?></td>
                                <td><?php echo $student['stu_phone'];?></td>
                                <td><?php echo $student['stu_grade'];?></td>
                                <td><?php echo $student['college_id'];?></td>
                                <td><?php echo $student['major_id'];?></td>
                                <td><?php echo $student['stu_class'];?></td>
                                <td><?php echo $student['stu_address'];?></td>
                                <td>
                                    <a href="<?php echo site_url('web/user_mgt/delete_student').'?stu_id='.$student['stu_id']; ?>" class="layui-btn layui-btn-danger layui-btn-xs">
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
<div id="addStudentMsgForm">
    <form class="layui-form" method="post" action="<?php echo site_url('web/user_mgt/add_student') ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">学号</label>
            <div class="layui-input-block">
                <input type="text" name="stu_account" required  lay-verify="required" placeholder="请输入学号(登录账号)" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="password" name="stu_password" required  lay-verify="required" placeholder="请输入登录密码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-block">
                <input type="text" name="stu_name" required  lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">性别</label>
            <div class="layui-input-block">
            <input type="radio" name="stu_sex" value="男" title="男" checked>
            <input type="radio" name="stu_sex" value="女" title="女">
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
            <label class="layui-form-label">年级</label>
            <div class="layui-input-block">
                <input type="text" name="stu_grade" required  lay-verify="required" placeholder="请输入年级,如：2015级" autocomplete="off" class="layui-input">
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
            <label class="layui-form-label">班级</label>
            <div class="layui-input-block">
                <input type="text" name="stu_class" required  lay-verify="required" placeholder="请输入班级,如：二班" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">电话</label>
            <div class="layui-input-block">
                <input type="text" name="stu_phone" required  lay-verify="required" placeholder="请输入学生电话" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">家庭住址</label>
            <div class="layui-input-block">
                <textarea name="stu_address" required  lay-verify="required" placeholder="请输入学生家庭住址" class="layui-textarea"></textarea>
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