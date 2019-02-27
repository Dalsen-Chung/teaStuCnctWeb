layui.use('layer', function(){
    var layer = layui.layer;
    
  /* 学院信息页面添加信息弹窗 */
  $('#college_add_btn').click(function() {
      layer.open({
          id: 'college_add',
          type: 1,
          title: '<i class="layui-icon">&#xe654;</i> 添加学院',
          content: $('#addCollegeMsgForm'),
          area: '600px',
          closeBtn: 2,
          shadeClose: true,
          resize: false
      });
  });

  /* 专业信息页面添加信息弹窗 */
  $('#major_add_btn').click(function() {
    layer.open({
        id: 'major_add',
        type: 1,
        title: '<i class="layui-icon">&#xe654;</i> 添加专业',
        content: $('#addMajorMsgForm'),
        area: '600px',
        closeBtn: 2,
        shadeClose: true,
        resize: false
    });
  });

  /* 教学及科研部门信息页面添加信息弹窗 */
  $('#edu_branch_add_btn').click(function() {
    layer.open({
        id: 'edu_branch_add',
        type: 1,
        title: '<i class="layui-icon">&#xe654;</i> 添加部门',
        content: $('#addEduBranchMsgForm'),
        area: '600px',
        closeBtn: 2,
        shadeClose: true,
        resize: false
    });
  });

  /* 学生信息页面添加信息弹窗 */
  $('#student_add_btn').click(function() {
    layer.open({
        id: 'student_add',
        type: 1,
        title: '<i class="layui-icon">&#xe654;</i> 添加学生',
        content: $('#addStudentMsgForm'),
        area: ['600px', '610px'],
        closeBtn: 2,
        offset: '20px',
        shadeClose: true,
        resize: false
    });
  });

  /* 教师信息页面添加信息弹窗 */
  $('#teacher_add_btn').click(function() {
    layer.open({
        id: 'teacher_add',
        type: 1,
        title: '<i class="layui-icon">&#xe654;</i> 添加教师',
        content: $('#addTeacherMsgForm'),
        area: ['600px', '610px'],
        closeBtn: 2,
        offset: '20px',
        shadeClose: true,
        resize: false
    });
  });

  /* 管理员信息页面添加信息弹窗 */
  $('#admin_add_btn').click(function() {
    layer.open({
        id: 'admin_add',
        type: 1,
        title: '<i class="layui-icon">&#xe654;</i> 添加管理员',
        content: $('#addAdminMsgForm'),
        area: '600px',
        closeBtn: 2,
        shadeClose: true,
        resize: false
    });
  });
});

layui.use('upload', function(){
  var upload = layui.upload;
    
  /* 学院信息页面上传学院图标模块 */
  var uploadCollegeIcon = upload.render({
    elem: '#college_upload_icon', //绑定元素
    url: '../../api/college/upload_icon', //上传接口
    field: 'iconImg',
    acceptMime: 'image/*', //只显示图片文件
    done: function(res){
      //上传完毕回调
      if (res.upload_data) {
          console.log(res.upload_data)
          var icon_path = res.upload_data.file_name;
          $('#college_icon').val(icon_path);
          layer.open({
              type: 0, 
              content: '<div style="text-align:center;"><i class="layui-icon">&#xe605;</i> 图片上传成功!</div>'
          });
      } else {
          var error = res.error;
          layer.open({
              type: 0, 
              content: `<div style="text-align:center;"><i class="layui-icon">&#x1006;</i> 图片上传失败：${error}</div>`
          });
      }
    }
  });

});

$(document).ready(function () {

});