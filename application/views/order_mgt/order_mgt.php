<div class="layui-body layui-bg-gray">
    <div style="padding: 15px;" id="order_mgt">
        <div class="layui-card">
            <div class="layui-card-header">
                工单列表
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
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>申请ID</th>
                            <th>申请时间</th>
                            <th>查看人</th>
                            <th>查看人角色</th>
                            <th>被查看人</th>
                            <th>被查看人角色</th>
                            <th>申请人查看理由</th>
                            <th>申请结果</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($apply_list as $apply):?>
                            <tr>
                                <td><?php echo $apply['apply_id'];?></td>
                                <td><?php echo $apply['apply_time'];?></td> 
                                <td><?php echo $apply['apply_user_name'];?></td> 
                                <td><?php echo $apply['apply_user_type'] === '2' ? '学生': '教师';?></td>
                                <td><?php echo $apply['check_user_name'];?></td>
                                <td><?php echo $apply['check_user_type'] === '2' ? '学生': '教师';?></td>
                                <td><?php echo $apply['apply_reason'];?></td>
                                <td>
                                    <?php 
                                        if ($apply['apply_result'] === '0') {
                                            echo '待审核';
                                        } else if ($apply['apply_result'] === '1') {
                                            echo '审核通过';
                                        } else {
                                            echo '审核不通过';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if ($apply['apply_result'] === '0') {
                                            echo '<a title="审核通过" href="'.site_url('web/order_mgt/pass_apply').'?apply_id='.$apply['apply_id'].'"
                                            class="layui-btn layui-btn-normal layui-btn-xs"> 
                                            <i class="layui-icon">&#xe605;</i></a>';
                                            echo '<a title="审核不通过" href="'.site_url('web/order_mgt/unpass_apply').'?apply_id='.$apply['apply_id'].'"
                                            class="layui-btn layui-btn-danger layui-btn-xs"> 
                                            <i class="layui-icon">&#x1006;</i></a>';
                                        } else {
                                            echo '<a title="删除工单" href="'.site_url('web/order_mgt/delete_apply').'?apply_id='.$apply['apply_id'].'"
                                            class="layui-btn layui-btn-danger layui-btn-xs"> 
                                            <i class="layui-icon">&#xe640;</i></a>';
                                        }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</div>