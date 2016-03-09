$(function(){
    var $newName = $("[name=newName]");
    var $newPwd = $("[name=newPwd]");
    var $newPwdT = $("[name=newPwdT]");

    var $nspan =  $(".nname");
    var $pspan =  $(".npwd");
    var $ptspan =  $(".npwdt");

    //获取当前admin的ID值
    var adminId = $newName.data("id");

    $(".newSave").on("click",function(){
        //前端验证是否为空
        if($newName.val()=="") {
            $newName.focus();
            $nspan.html("用户名不能为空！");
        }else if ($newName.val() !="" && $newPwd.val()=="") {
            $nspan.empty();
            $newPwd.focus();
            $pspan.html("密码不能为空！");
        }else if ($newPwd.val()!=""&&$newPwdT.val()=="") {
            $pspan.empty();
            $newPwdT.focus();
            $ptspan.html("两次密码输入需相同！");
        }


         //后台数据库验证信息的准确性
        if(confirm("确定要修改信息？")) {
            if($newPwd.val()==$newPwdT.val()) {
                $.get("admin/update_admin",{
                    admin_id:adminId,
                    admin_name:$newName.val(),
                    admin_pwd:$newPwd.val()
                },function(res){
                    if(res=="fail") {
                        //$username.focus();
                        //$nspan.html("用户名不能为空！").css({color:"red",fontWeight:"bold"});
                    }else{
                        alert("编辑成功！");
                        //清空input中的值和span内提示的值
                        $nspan.empty();$pspan.empty();$ptspan.empty();
                        $newName.val(this.value,"");$newPwd.val(this.value,"");$newPwdT.val(this.value,"");
                        location.href="admin/admin_mgr";
                    }
                });
            }else {
                $nspan.empty();$pspan.empty();
                $newPwdT.focus();
                $ptspan.html("两次密码输入需相同！");
            }
        }
    });

    $(".giveUp").on("click",function(){
        location.href="admin/admin_mgr";
    });
});