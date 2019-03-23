<div class="layui-body layui-bg-gray">
    <div style="padding: 15px;" id="notice_list">
        <div class="layui-card">
            <div class="layui-card-header">
                所有公告列表
            </div>
            <div class="layui-card-body">
                <table class="layui-table" lay-size="sm">
                    <colgroup>
                        <col width="60">
                        <col width="70">
                        <col width="150">
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
                            <th>公告ID</th>
                            <th>发布教师</th>
                            <th>发布时间</th>
                            <th>公告标题</th>
                            <th>公告内容</th>
                            <th>浏览次数</th>
                            <th>可查看学院</th>
                            <th>可查看专业</th>
                            <th>审核状态</th>
                            <th>是否为广播</th>
                            <th>操作</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach ($notice_list as $notice):?>
                            <tr>
                                <td><?php echo $notice['notice_id'];?></td>
                                <td><?php echo $notice['tea_name'];?></td> 
                                <td><?php echo $notice['notice_time'];?></td> 
                                <td><?php echo $notice['notice_title'];?></td>
                                <td><?php echo $notice['notice_content'];?></td>
                                <td><?php echo $notice['notice_read_times'];?></td>
                                <td><?php echo $notice['college_name'];?></td>
                                <td><?php echo $notice['major_name'];?></td>
                                <td>
                                    <?php 
                                        if ($notice['notice_pass_review'] === '0') {
                                            echo '待审核';
                                        } else if ($notice['notice_pass_review'] === '1') {
                                            echo '审核通过';
                                        } else {
                                            echo '审核不通过';
                                        }
                                    ?>
                                </td>
                                <td><?php echo $notice['notice_is_all'] === '0' ? '否' : '是';?></td>
                                <td>
                                    <a title="点击删除公告" href="<?php echo site_url('web/nt_mgt/delete_notice').'?notice_id='.$notice['notice_id']; ?>" 
                                        class="layui-btn layui-btn-danger layui-btn-xs"> 
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