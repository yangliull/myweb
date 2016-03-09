/**
 * Created by Administrator on 2015/12/29.
 */
$(function(){
    var $newTitle = $("[name=newTitle]");
    var $newContent = $("[name=newContent]");
    var $admin_id = $("[name=admin_id]");

    var $ntitle =  $(".ntitle");
    var $ncontent =  $(".ncontent");

    $(".newSave").on("click",function(){

        //前端验证是否为空
        if($newTitle.val()=="") {
            $newTitle.focus();
            $ntitle.html("标题不能为空！");
        }else if ($newTitle.val() !="" && $newContent.val()=="") {
            $ntitle.empty();
            $newContent.focus();
            $ncontent.html("内容不能为空！");
        }else if($newContent.val() !=""){
            $ntitle.empty();$ncontent.empty();
        }

        //后台数据库验证信息的准确性
        $.post("admin/add_blog",{
            title:$newTitle.val(),
            content:$newContent.val(),
            admin_id:$admin_id.val()
        },function(res){
            if(res=="fail") {
                //$ntitle.focus();
                //$ntitle.html("标题和内容不能为空，请填写！").css({color:"red",fontWeight:"bold"});
            }else{
                alert("博客新增成功！");
                //清空input中的值和span内提示的值
                $ntitle.empty();$ncontent.empty();
                $newTitle.val(this.value,"");$newContent.val(this.value,"");
                location.href="admin/admin_blog";
            }
        });
    });

    $(".giveUp").on("click",function(){
        location.href="admin/admin_blog";
    });
});
