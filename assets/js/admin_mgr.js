/**
 * Created by Administrator on 2015/12/27.
 */
$(function(){
    $(".uDelete").on("click",function(){
        var adminId = $(this).data('id');
        if(confirm("删除的记录将不可恢复，是否确定删除？")) {
           location.href = 'admin/delete_admin?admin_id='+adminId;
        }
    });

    $(".uNew").on("click",function(){
        location.href = 'admin/admin_mgrNew';
    });

    $(".uEdit").on("click",function(){
        var adminId = $(this).data("id");
        location.href = 'admin/admin_mgrUpdate?admin_id='+adminId;
    });
});


