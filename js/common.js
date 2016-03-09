/**
 * Created by Administrator on 2015/12/31.
 */
require(["jquery"],function($) {
    var $header = $("#header");
    var $navIcon = $(".navIcon", $header);
    var $navBox = $(".navBox", $header);
    var $navCloseIcon = $(".navCloseIcon", $header);

    $navIcon.on("click", function () {
        $navBox.animate({top: 0});
    });

    //切换navCloseIcon背景图片
    $navCloseIcon.on("mouseover", function () {
        $(this).removeClass("navCloseIcon").addClass("navCloseIconIn");
    }).on("mouseout", function () {
        $(this).removeClass("navCloseIconIn").addClass("navCloseIcon");
    }).on("click", function () {
        $navBox.animate({top: -192});
    });

    //toTop显示/隐藏
    $(window).on("scroll", function () {
        var $scrollTop = $(window).scrollTop();
        var $headerBg = $("#header .headerBg");
        if ($scrollTop + $(window).height() >= $headerBg.height()) {
            $("#toTop").stop().animate({opacity: 1}, 300);
        }
        if ($scrollTop <= 100) {
            $("#toTop").stop().animate({opacity: 0}, 300);
        }
    });
    $("#toTop").on("click", function () {
        $("body").animate({
            scrollTop: 0
        }, 1000);
    });
});