/**
 * Created by xiecheng on 2017/7/10.
 */

$(document).on("pageinit", function(){
    $("#left img").on("tap", function(){
        location.href = "welcome/index";
    });

    $('#collect-btn').on('tap',function(){
        //将收藏信息插入数据库
        // user_id  product_id
        var _that = $(this);
        var productId = $('#hidden-product-id').val();
        $.get('user/collect',{'productId':productId},function(){
            _that.text('取消');
        },'text');
    });
});

