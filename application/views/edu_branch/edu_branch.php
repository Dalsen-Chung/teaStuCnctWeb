<div class="layui-body layui-bg-gray" id="edu_branch">
    <div style="padding: 15px;" id="edu_branch">
        <div class="layui-card">
            <div class="layui-card-header">
                教学及科研部门信息列表
                <button class="layui-btn layui-btn-radius layui-btn-sm" id="edu_branch_add_btn">
                    <i class="layui-icon">&#xe608;</i> 添加部门
                </button>
            </div>
            <div class="layui-card-body">
                <table class="layui-table" lay-size="sm">
                    <colgroup>
                        <col width="60">
                        <col width="100">
                        <col width="100">
                        <col>
                        <col width="40">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>部门ID</th>
                            <th>部门名称</th>
                            <th>部门地址</th>
                            <th>部门简介</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($edu_branch_list as $edu_branch):?>
                            <tr>
                                <td><?php echo $edu_branch['edu_branch_id'];?></td>
                                <td><?php echo $edu_branch['edu_branch_name'];?></td>
                                <td><?php echo $edu_branch['edu_branch_address'];?></td>
                                <td><?php echo $edu_branch['edu_branch_introduction'];?></td>
                                <td>
                                    <a href="<?php echo site_url('web/org_mgt/delete_edu_branch').'?edu_branch_id='.$edu_branch['edu_branch_id']; ?>" class="layui-btn layui-btn-danger layui-btn-xs">
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
<div id="addEduBranchMsgForm">
    <form class="layui-form" method="post" action="<?php echo site_url('web/org_mgt/add_edu_branch') ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">部门名称</label>
            <div class="layui-input-block">
                <input type="text" name="edu_branch_name" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">部门地址</label>
            <div class="layui-input-block">
            <input type="text" name="edu_branch_address" required  lay-verify="required" placeholder="请输入地址" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">部门简介</label>
            <div class="layui-input-block">
                <textarea name="edu_branch_introduction" required  lay-verify="required" placeholder="请输入简介" class="layui-textarea"></textarea>
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