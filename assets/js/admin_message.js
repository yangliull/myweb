/**
 * Created by Administrator on 2015/12/28.
 */
$(function(){
    $(".mDelete").on("click",function(){
       var messageId = $(this).data("id");
        if(confirm("删除的记录将不可恢复，是否确定删除？")) {
            location.href="admin/delete_message?message_id="+messageId;
        }
    });
});