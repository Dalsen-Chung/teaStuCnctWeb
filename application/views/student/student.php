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
                    <!-- <colgroup>
                        <col width="60">
                        <col width="150">
                        <col>
                        <col width="110">
                        <col>
                        <col width="40">
                    </colgroup> -->
                    <thead>
                        <tr>
                            <th>学生用户ID</th>
                            <th>姓名</th>
                            <th>学生角色ID</th>
                            <th>性别</th>
                            <th>电话</th>
                            <th>年级</th>
                            <th>学院ID</th>
                            <th>专业ID</th>
                            <th>班级</th>
                            <th>家庭住址</th>
                            <th>登录账号</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($student_list as $student):?>
                            <tr>
                                <td><?php echo $student['student_id'];?></td>
                                <td><?php echo $student['student_name'];?></td>
                                <td><img src="<?php echo base_url('public/common/image/student/'.$student['student_icon']);?>" alt=""></td>
                                <td><?php echo $student['student_address'];?></td>
                                <td><?php echo $student['student_introduction'];?></td>
                                <td>
                                    <a href="<?php echo site_url('web/org_mgt/delete_student').'?student_id='.$student['student_id']; ?>" class="layui-btn layui-btn-danger layui-btn-xs">
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
    <form class="layui-form" method="post" action="<?php echo site_url('web/org_mgt/add_student') ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">学号(登录账号)</label>
            <div class="layui-input-block">
                <input type="text" name="stu_account" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
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
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="*">添加</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
</div>