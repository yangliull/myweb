/**
 * Created by Administrator on 2016/1/3.
 */
$(function(){
    $(".cDelete").on("click",function(){
        var commId = $(this).data("id");
        if(confirm("删除的记录将不可恢复，是否确定删除？")) {
            location.href="admin/delete_comment?comm_id="+commId;
        }
    });
});