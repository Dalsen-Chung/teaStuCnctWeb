layui.use('layer', function(){
    var layer = layui.layer;
    
    $('#college_add_btn').click(function() {
        layer.open({
            id: 'college_add',
            type: 1,
            title: '<i class="layui-icon">&#xe654;</i> 添加学院',
            content: $('#aa'), //这里content是一个DOM，注意：最好该元素要存放在body最外层，否则可能被其它的相对元素所影响
            area: '500px',
            closeBtn: 2,
            shadeClose: true,
            resize: false
        });
    });
  });  