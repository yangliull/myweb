/**
 * Created by Administrator on 2016/1/3.
 */
$(function(){
    var $newTitle = $("[name=newTitle]");
    var $newContent = $("[name=newContent]");
    var $admin_id = $("[name=admin_id]");
    //获取当前admin的ID值
    var blogId = $newTitle.data("id");

    var $ntitle =  $(".ntitle");
    var $ncontent =  $(".ncontent");



    $(".newSave").on("click",function(){
        //前端验证是否为空
        if($newTitle.val()=="") {
            $newTitle.focus();
            $ntitle.html("用户名不能为空！");
        }else if ($newTitle.val() !="" && $newContent.val()=="") {
            $ntitle.empty();
            $newContent.focus();
            $ncontent.html("密码不能为空！");
        }else if ($newContent.val()!="") {
            $ncontent.empty();
        }

        //后台数据库验证信息的准确性
        if(confirm("确定要修改信息？")) {
            $.get("admin/update_blog",{
                blog_id:blogId,
                admin_id:$admin_id.val(),
                title:$newTitle.val(),
                content:$newContent.val()
            },function(res){
                if(res=="fail") {
                    //$newTitle.focus();
                    //$ntitle.html("用户名不能为空！").css({color:"red",fontWeight:"bold"});
                }else{
                    alert("编辑成功！");
                    //清空input中的值和span内提示的值
                    $ntitle.empty();$ncontent.empty();
                    $newTitle.val(this.value,"");$newContent.val(this.value,"");
                    location.href="admin/admin_blog";
                }
            });
        }
    });

    $(".giveUp").on("click",function(){
        location.href="admin/admin_blog";
    });
});