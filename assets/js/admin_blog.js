/**
 * Created by Administrator on 2015/12/29.
 */
$(function(){
    $(".bDelete").on("click",function(){
        var blogId = $(this).data("id");
        if(confirm("删除的记录将不可恢复，是否确定删除？")) {
            location.href="admin/delete_blog?blog_id="+blogId;
        }
    });

    $(".bNew").on("click",function(){
        location.href = 'admin/admin_blogNew';
    });

    $(".bEdit").on("click",function(){
        var blogId = $(this).data("id");
        location.href = 'admin/admin_blogUpdate?blog_id='+blogId;
    });
});