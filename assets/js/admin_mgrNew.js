/**
 * Created by Administrator on 2015/12/29.
 */
$(function(){
    var $newName = $("[name=newName]");
    var $newPwd = $("[name=newPwd]");
    var $newPwdT = $("[name=newPwdT]");

    var $nspan =  $(".nname");
    var $pspan =  $(".npwd");
    var $ptspan =  $(".npwdt");

    $newName.on("blur",function(){
        if($newName.val()!="") {
            $.get("admin/admin_check_name",{
                username:this.value
            },function(res) {
                if (res == "fail") {
                    $(this).focus();
                    $nspan.html("该用户名已存在，请重新输入！").css({color: "red", fontWeight: "bold"});
                }else {
                    $nspan.html("√").css({color: "green", fontWeight: "bold"});
                }
            });
        }
    });

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
        if($newPwd.val()==$newPwdT.val()) {
            $.post("admin/add_admin",{
                admin_name:$newName.val(),
                admin_pwd:$newPwd.val()
            },function(res){
                if(res=="fail") {
                    $nspan.html("用户名错误，请重新填写！").css({color:"red",fontWeight:"bold"});
                }else{
                    alert("新建成功！");
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
    });

    $(".giveUp").on("click",function(){
        location.href="admin/admin_mgr";
    });
});