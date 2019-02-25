<div class="layui-body layui-bg-gray" id="college">
    <div style="padding: 15px;" id="college">
        <div class="layui-card">
            <div class="layui-card-header">
                学院信息列表
                <button class="layui-btn layui-btn-radius layui-btn-sm" id="college_add_btn">
                    <i class="layui-icon">&#xe608;</i> 添加学院
                </button>
            </div>
            <div class="layui-card-body">
            <table class="layui-table">
                <colgroup>
                    <col width="150">
                    <col width="200">
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>学院ID</th>
                        <th>学院名称</th>
                        <th>学院图标</th>
                        <th>学院地址</th>
                        <th>学院简介</th>
                        <th>操作</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php foreach ($college_list as $college):?>
                        <tr>
                            <td><?php echo $college['college_id'];?></td>
                            <td><?php echo $college['college_name'];?></td>
                            <td><img src="<?php echo $college['college_icon'];?>" alt=""></td>
                            <td><?php echo $college['college_address'];?></td>
                            <td><?php echo $college['college_introduction'];?></td>
                            <td>
                                <a href="http://www.layui.com" class="layui-btn layui-btn-xs">
                                    <i class="layui-icon">&#xe642;</i>
                                </a>
                                <a href="http://www.layui.com" class="layui-btn layui-btn-danger layui-btn-xs">
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
<div id="addCollegeMsgForm">
    <form class="layui-form" method="post" action="<?php echo site_url('web/org_mgt/add_college') ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">学院名称</label>
            <div class="layui-input-block">
                <input type="text" name="college_name" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">学院图标</label>
            <div class="layui-input-block">
                <button type="button" class="layui-btn layui-btn-normal" id="college_upload_icon">
                    <i class="layui-icon">&#xe67c;</i>上传图片
                </button>
                <input type="hidden" name="college_icon" required  lay-verify="required" id="college_icon">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">学院地址</label>
            <div class="layui-input-block">
            <input type="text" name="college_address" required  lay-verify="required" placeholder="请输入地址" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">学院简介</label>
            <div class="layui-input-block">
                <textarea name="college_introduction" required  lay-verify="required" placeholder="请输入简介" class="layui-textarea"></textarea>
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