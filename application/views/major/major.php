<div class="layui-body layui-bg-gray" id="major">
    <div style="padding: 15px;" id="major">
        <div class="layui-card">
            <div class="layui-card-header">
                专业信息列表
                <button class="layui-btn layui-btn-radius layui-btn-sm" id="major_add_btn">
                    <i class="layui-icon">&#xe608;</i> 添加专业
                </button>
            </div>
            <div class="layui-card-body">
                <table class="layui-table" lay-size="sm">
                    <colgroup>
                        <col width="60">
                        <col width="100">
                        <col width="110">
                        <col>
                        <col width="40">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>专业ID</th>
                            <th>所属学院</th>
                            <th>专业名称</th>
                            <th>专业简介</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($major_list as $major):?>
                            <tr>
                                <td><?php echo $major['major_id'];?></td>
                                <td><?php echo $major['college_name'];?></td>
                                <td><?php echo $major['major_name'];?></td>
                                <td><?php echo $major['major_introduction'];?></td>
                                <td>
                                    <a href="<?php echo site_url('web/org_mgt/delete_major').'?major_id='.$major['major_id']; ?>" class="layui-btn layui-btn-danger layui-btn-xs">
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
<div id="addMajorMsgForm">
    <form class="layui-form" method="post" action="<?php echo site_url('web/org_mgt/add_major') ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">专业名称</label>
            <div class="layui-input-block">
                <input type="text" name="major_name" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">专业简介</label>
            <div class="layui-input-block">
                <textarea name="major_introduction" required  lay-verify="required" placeholder="请输入简介" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">所属学院</label>
            <div class="layui-input-block">
            <select name="college_id" lay-verify="required">
                    <option value=""></option>
                <?php foreach ($college_option as $option):?>
                    <option value="<?php echo $option['college_id'];?>"><?php echo $option['college_name']; ?></option>
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