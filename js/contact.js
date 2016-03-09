/**
 * Created by Administrator on 2015/12/28.
 */
require(["jquery"],function($){
    var $username = $("[name=username]");
    var $email = $("[name=email]");
    var $content = $("[name=content]");

    var $nspan =  $(".uname");
    var $espan =  $(".emai");
    var $cspan =  $(".cont");
    //单击submit之后判断input中是否为空
    $("#submit").on("click",function(){

        //前端验证是否为空
        if($username.val()=="") {
            $username.focus();
            $nspan.html("用户名不能为空！").css({color:"red",fontWeight:"bold"});
        }else if ($username.val() !="" && $email.val()=="") {
            $nspan.empty();
            $email.focus();
            $espan.html("邮箱不能为空！").css({color:"red",fontWeight:"bold"});
        }else if($email.val()!=""&&$content.val()=="") {
            $espan.empty();
            $content.focus();
            $cspan.html("留言内容不能为空！").css({color:"red",fontWeight:"bold"});
        }else {
            $cspan.empty();
        }
        //后台数据库验证信息的准确性
        $.post("welcome/message",{
            username:$username.val(),
            email:$email.val(),
            content:$content.val()
        },function(res){
            if(res=="fail") {
                //$username.focus();
                //$nspan.html("用户名不能为空！").css({color:"red",fontWeight:"bold"});
            }else{
                alert("留言成功！");
                //清空input中的值和span内提示的值
                $nspan.empty();$espan.empty();$cspan.empty();
                $username.val(this.value,"");$email.val(this.value,"");$content.val(this.value,"");
            }
        });
    });
    //username文本框失去焦点时判断是否已存在
    $username.on("blur",function(){
        if($username.val()!="") {
            $.get("welcome/message_check_name",{
                username:this.value
            },function(res) {
                if (res == "fail") {
                    $nspan.html("该用户名已存在，请重新输入！").css({color: "red", fontWeight: "bold"});
                    $(this).focus();
                } else {
                    $nspan.html("√").css({color: "green", fontWeight: "bold"});
                }
            });
        }
    });
});

