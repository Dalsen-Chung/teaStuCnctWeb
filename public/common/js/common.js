layui.use('layer', function(){
    var layer = layui.layer;
    
    /* 学院信息页面添加信息弹窗 */
    $('#college_add_btn').click(function() {
        layer.open({
            id: 'college_add',
            type: 1,
            title: '<i class="layui-icon">&#xe654;</i> 添加学院',
            content: $('#addCollegeMsgForm'), //这里content是一个DOM，注意：最好该元素要存放在body最外层，否则可能被其它的相对元素所影响
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