// stop reloading same page
var links = document.querySelectorAll('a[href]');
var cbk = function(e) {
    if (e.currentTarget.href === window.location.href) {
        e.preventDefault();
        e.stopPropagation();
        jQuery(".preloader.js-preloader.flex-center").hide();
    }
};
for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', cbk);
}
// add text in attribute in nav links
jQuery(".main_nav_bar a").each(function() {
    var p = jQuery(this).text();
    jQuery(this).attr('data-text', p);
}); 
// close menu on click nav links
jQuery(".main_nav_bar li a,.navbar-brand,.backButton").click(function() {
    jQuery(".Header_outer,header,.navbar-toggler").removeClass("active");
});
// toggle menu
jQuery(".navbar-toggler").click(function() {
    jQuery(".Header_outer,header ,.navbar-toggler").toggleClass("active"); 
    changeBgColor();
});
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// mousewheel jquery
jQuery(window).on("wheel", function(e) {
    var a = parseInt(jQuery("#TextVal").val());
    var b = parseInt(jQuery("#TextStop").val());
    if (e.originalEvent.deltaY > 0) {

        if (b == 1) {
            jQuery("#TextStop").val("0");
            setTimeout(function() {
                jQuery("#TextStop").val("1");
            }, 800);
            // *****************Text full page screen **************************
            if (jQuery(".Text_Screen").hasClass('TextFullPage')) {
                var n = jQuery(".Text_Screen > div").length;
                if (a <= n - 2) {
                    scrollDown();
                    BtnShowHide();
                }
            }
            // ****************Text full page screen end *************************
            // **full screen page start ******************************************
            else if (jQuery("#home_page").hasClass("activeHomeScreen")) {
                var s = jQuery(".activeHomeScreen > div").length;
                if (a <= s - 1) {
                    scrollDownAnimate();
                    BtnShowHide();
                }
            }
            // **full screen page end ********************************************
            // **post single page start ******************************************
            else if (jQuery("#home_page").hasClass("singlePageScreen")) {
                var s = jQuery(".singlePageScreen > div").length;
                if (a <= s - 1) {
                    scrollDownSingle();
                    BtnShowHide();
                }
            }
            // **post single page end********************************************
        }
    } else {
        if (b == 1) {
            jQuery("#TextStop").val("0");
            setTimeout(function() {
                jQuery("#TextStop").val("1");
            }, 800);
            // *****************Text full page screen ***************************
            if (jQuery(".Text_Screen").hasClass('TextFullPage')) {
                var n = jQuery(".Text_Screen > div").length;
                if (a >= 1) {
                    scrollUp();
                    BtnShowHide();
                }
            }
            // ******************Text full page screen end***********************  
            // **full screen page start *****************************************
            else if (jQuery("#home_page").hasClass("activeHomeScreen")) {
                var s = jQuery(".activeHomeScreen > div").length;
                if (a >= 1) {
                    scrollUpAnimate();
                    BtnShowHide();
                }
            }
            // **full screen page end ********************************************

            // **post single page start ******************************************
            else if (jQuery("#home_page").hasClass("singlePageScreen")) {
                var s = jQuery(".singlePageScreen > div").length;
                if (a >= 1) {
                    scrollUpSingle();
                    BtnShowHide();
                }
            }
            // **post single page end********************************************
        }
    }
});
// mousewheel jquery end
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// on click jquery start
jQuery(document).on("click", 'button#nextBtnText:not(.activeBtn)', function() {
    jQuery(this).addClass('activeBtn');
    jQuery(this).removeClass('activeBtn');

    var a = parseInt(jQuery("#TextVal").val());
    var b = parseInt(jQuery("#TextStop").val());
    if (b == 1) {
        jQuery("#TextStop").val("0");
        setTimeout(function() {
            jQuery("#TextStop").val("1");
        }, 800);
        // *****************Text full page screen **************************
        if (jQuery(".Text_Screen").hasClass('TextFullPage')) {
            var n = jQuery(".Text_Screen > div").length;
            // if (a == n - 1) {
            //     jQuery("#TextVal").val("0");
            //     jQuery(".text_wrap span").text("1");
            //     jQuery(".TextFullPage > div").removeClass("prevScreen").removeClass("active").removeClass("nextScreen").addClass("inActive").css("opacity", "0").css("z-index", "-1");
            //     jQuery(".TextFullPage > div").eq(0).addClass("active").css("opacity", "1").css("z-index", "9").removeClass("inActive");
            //     jQuery(".TextFullPage > div").eq(0).prev().addClass("prevScreen").css("opacity", "1").css("z-index", "1").removeClass("inActive");
            //     jQuery(".TextFullPage > div h3,.TextFullPage > div p").css("transform", "translateY(0)").css("opacity", "1");
            //     jQuery(".TextFullPage > div.prevScreen h3,.TextFullPage > div.prevScreen p").css("transform", "translateY(-30px)").css("opacity", "0");
            // } else
             if (a <= n - 2) {
                scrollDown();
                BtnShowHide();
            }
        }
        // ****************Text full page screen end *************************
        // **full screen page start ******************************************
        else if (jQuery("#home_page").hasClass("activeHomeScreen")) {
            var s = jQuery(".activeHomeScreen > div").length;
            // if (a == s) {
            //     jQuery("#TextVal").val("0");
            //     jQuery(".down_arrow").removeClass("rotateArrow");
            //     jQuery(".navbar-toggler,.Header_outer ").removeClass("active");
            //     jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
            //     jQuery("#home_page .slide_sec").css('transform', '');
            //     jQuery(".Screens ~ .Screens .slide_sec ").css('transition', 'unset');
            //     jQuery("#home_page > div").eq(0).addClass("active_screen");
            // } else 
            if (a <= s - 1) {
                scrollDownAnimate();
                BtnShowHide();
                // jQuery(".navbar-toggler,.Header_outer").removeClass("active");  

            }
        }
        // **full screen page end ******************************************** 
        // **post single page start ******************************************
        else if (jQuery("#home_page").hasClass("singlePageScreen")) {
            var s = jQuery(".singlePageScreen > div").length;
            if (a == s) {
                jQuery("#TextVal").val("0");
                jQuery(".down_arrow").removeClass("rotateArrow");
                jQuery(".navbar-toggler,.Header_outer,header").removeClass("active");
                jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
                jQuery(".singlePageScreen > div").css('transform', '').css('transition', 'unset');;
                jQuery("#home_page > div").eq(0).addClass("active_screen"); 
            } else if (a <= s - 1) {
                scrollDownSingle();

            }
        }
        // **post single page end ******************************************** 
    }
});
// on click scrollUp
jQuery(document).on("click", 'button#prevBtnText:not(.activeBtn)', function() {
    jQuery(this).addClass('activeBtn');
    jQuery(this).removeClass('activeBtn'); 
    var a = parseInt(jQuery("#TextVal").val());
    var b = parseInt(jQuery("#TextStop").val());
    if (b == 1) {
        jQuery("#TextStop").val("0");
        setTimeout(function() {
            jQuery("#TextStop").val("1");
        }, 800);
        // *****************Text full page screen **************************
        if (jQuery(".Text_Screen").hasClass('TextFullPage')) {
            var n = jQuery(".Text_Screen > div").length;
            // if (a == n - 1) {
            //     jQuery("#TextVal").val("0");
            //     jQuery(".text_wrap span").text("1");
            //     jQuery(".TextFullPage > div").removeClass("prevScreen").removeClass("active").removeClass("nextScreen").addClass("inActive").css("opacity", "0").css("z-index", "-1");
            //     jQuery(".TextFullPage > div").eq(0).addClass("active").css("opacity", "1").css("z-index", "9").removeClass("inActive");
            //     jQuery(".TextFullPage > div").eq(0).prev().addClass("prevScreen").css("opacity", "1").css("z-index", "1").removeClass("inActive");
            //     jQuery(".TextFullPage > div h3,.TextFullPage > div p").css("transform", "translateY(0)").css("opacity", "1");
            //     jQuery(".TextFullPage > div.prevScreen h3,.TextFullPage > div.prevScreen p").css("transform", "translateY(-30px)").css("opacity", "0");
            // } else 
            if (a >= 1) {
                scrollUp();
                BtnShowHide();
            }
        }
        // ****************Text full page screen end *************************
        // **full screen page start ******************************************
        else if (jQuery("#home_page").hasClass("activeHomeScreen")) {
            var s = jQuery(".activeHomeScreen > div").length;
            // if (a == s) {
            //     jQuery("#TextVal").val("0");
            //     jQuery(".down_arrow").removeClass("rotateArrow");
            //     jQuery(".navbar-toggler,.Header_outer ").removeClass("active");
            //     jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
            //     jQuery("#home_page .slide_sec").css('transform', '');
            //     jQuery(".Screens ~ .Screens .slide_sec ").css('transition', 'unset');
            //     jQuery("#home_page > div").eq(0).addClass("active_screen");
            // } else 
            if (a >= 1) {
                scrollUpAnimate();
                BtnShowHide();
                // jQuery(".navbar-toggler,.Header_outer").removeClass("active");  

            }
        }
        // **full screen page end ******************************************** 
        // **post single page start ******************************************
        // else if (jQuery("#home_page").hasClass("singlePageScreen")) {
        //     var s = $(".singlePageScreen > div").length;
        //     if (a == s) {
        //         jQuery("#TextVal").val("0");
        //         jQuery(".down_arrow").removeClass("rotateArrow");
        //         jQuery(".navbar-toggler,.Header_outer ").removeClass("active");
        //         jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
        //         jQuery(".singlePageScreen > div").css('transform', '').css('transition', 'unset');;
        //         jQuery("#home_page > div").eq(0).addClass("active_screen");
        //     } else if (a <= s - 1) {
        //         scrollDownSingle();

        //     }
        // }
        // **post single page end ******************************************** 
    }
});
// on click jquery end 
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// touch jquery start here
document.addEventListener("touchstart", handleTouchStart, { passive: false });
document.addEventListener("touchmove", handleTouchMove, { passive: false });
var xDown = null;
var yDown = null;

function getTouches(evt) {
    return (
        evt.touches || evt.originalEvent.touches // browser API
    ); // jQuery
}

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
    if (!xDown || !yDown) {
        return;
    }
    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;
    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;
    if (Math.abs(xDiff) > Math.abs(yDiff)) {
        if (xDiff > 0) {
            // left 
         //    if (jQuery(".is-cover").hasClass("case-studies-single")){
         //    	jQuery(".modalNot > div > a.down_arrow.nextBtn").trigger('click');
         //    console.log("a");
        	// }
        		 
        } else { 
            // right
        }
    } else {
        if (yDiff > 0) {
            var a = parseInt(jQuery("#TextVal").val());
            var b = parseInt(jQuery("#TextStop").val());
            if (b == 1) {
                jQuery("#TextStop").val("0");
                setTimeout(function() {
                    jQuery("#TextStop").val("1");
                }, 800);
                // *****************Text full page screen **************************
                if (jQuery(".Text_Screen").hasClass('TextFullPage')) {
                    var n = jQuery(".Text_Screen > div").length;
                    if (a <= n - 2) {
                        scrollDown();
                        BtnShowHide();
                    }
                }
                // ****************Text full page screen end *************************

                // **full screen page start ******************************************
                else if (jQuery("#home_page").hasClass("activeHomeScreen")) {
                    var s = jQuery(".activeHomeScreen > div").length;
                    if (a <= s - 1) {
                        scrollDownAnimate();
                        BtnShowHide();
                    }
                }
                // **full screen page end ********************************************
                // **post single page start ******************************************
                else if (jQuery("#home_page").hasClass("singlePageScreen")) {
                    var s = jQuery(".singlePageScreen > div").length;
                    if (a <= s - 1) {
                        scrollDownSingle();
                        BtnShowHide();
                    }
                }
                // **post single page end ******************************************** 
            }
        } else {
            var a = parseInt(jQuery("#TextVal").val());
            var b = parseInt(jQuery("#TextStop").val());
            if (b == 1) {
                jQuery("#TextStop").val("0");
                setTimeout(function() {
                    jQuery("#TextStop").val("1");
                }, 800);
                // *****************Text full page screen ***************************
                if (jQuery(".Text_Screen").hasClass('TextFullPage')) {
                    var n = jQuery(".Text_Screen > div").length;
                    if (a >= 1) {
                        scrollUp();
                        BtnShowHide();
                    }
                }
                // ******************Text full page screen end***********************  
                // **full screen page start *****************************************
                else if (jQuery("#home_page").hasClass("activeHomeScreen")) {
                    var s = jQuery(".activeHomeScreen > div").length;
                    if (a >= 1) {
                        scrollUpAnimate();
                        BtnShowHide();
                    }
                }
                // **full screen page end ******************************************** 
                // **post single page start ******************************************
                else if (jQuery("#home_page").hasClass("singlePageScreen")) {
                    var s = jQuery(".singlePageScreen > div").length;
                    if (a >= 1) {
                        scrollUpSingle();
                        BtnShowHide();
                    }
                }
            }
        }
    }
}
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// Text screen function ********************************************************************************************************
// *****************************************************************************************************************************
function scrollDown() {
    var a = parseInt(jQuery("#TextVal").val());
    var n = jQuery(".Text_Screen > div").length;
    a++;
    jQuery("#TextVal").val(a);
    if (a <= n - 1) {
        jQuery(".text_wrap span").text(a + 1);
        jQuery(".TextFullPage > div").removeClass("prevScreen").removeClass("active").removeClass("nextScreen").addClass("inActive").css("opacity", "0").css("z-index", "-1");
        jQuery(".TextFullPage > div").eq(a).addClass("active").css("opacity", "1").css("z-index", "9").removeClass("inActive");
        jQuery(".TextFullPage > div").eq(a).prev().addClass("prevScreen").css("opacity", "1").css("z-index", "1").removeClass("inActive");
        jQuery(".TextFullPage > div h3,.TextFullPage > div p").css("transform", "translateY(0)").css("opacity", "1");
        jQuery(".TextFullPage > div.prevScreen h3,.TextFullPage > div.prevScreen p").css("transform", "translateY(-30px)").css("opacity", "0");
    }
}

function scrollUp() {
    var a = parseInt(jQuery("#TextVal").val());
    var n = jQuery(".Text_Screen > div").length;
    a--;
    jQuery("#TextVal").val(a);
    if (a <= n - 1) {
        jQuery(".text_wrap span").text(a + 1);
        jQuery(".TextFullPage > div").removeClass("prevScreen").removeClass("active").removeClass("nextScreen").addClass("inActive").css("opacity", "0");
        jQuery(".TextFullPage > div").eq(a).addClass("active").css("opacity", "1").css("z-index", "9").removeClass("inActive");
        jQuery(".TextFullPage > div").eq(a).prev().addClass("prevScreen").css("opacity", "1").removeClass("inActive").css("z-index", "-1");
        jQuery(".TextFullPage > div").eq(a).next().addClass("nextScreen").css("opacity", "0").removeClass("inActive");
        jQuery(".TextFullPage > div h3,.TextFullPage > div p").css("transform", "translateY(0)").css("opacity", "1");
        jQuery(".TextFullPage > div.nextScreen h3,.TextFullPage > div.nextScreen p").css("transform", "translateY(-30px)").css("opacity", "0");
    }
}
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// Full screen Function ********************************************************************************************************
// *****************************************************************************************************************************
function scrollDownAnimate() {
    var a = parseInt(jQuery("#TextVal").val());
    var b = parseInt(jQuery("#TextVal").val());
    var s = jQuery(".activeHomeScreen > div").length;
    b++;
    jQuery("#TextVal").val(b);
    if (a == s - 1) {
        // jQuery(".down_arrow").addClass("rotateArrow");
        jQuery(".navbar-toggler,.Header_outer,header").addClass("active");
        lastClick();
        changeBgColor();
    } else if (a <= s - 2) {
        jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
        jQuery("#home_page > div").eq(b).addClass("active_screen");
        jQuery("#home_page > div").eq(b).prev().addClass("prev-screen");
        jQuery(".active_screen video").trigger('play');
        jQuery(".active_screen .right_to_left").css('transform', 'translateX(0%)');
        jQuery(".active_screen .left_to_right").css('transform', 'translateX(0%)');
        jQuery(".active_screen .bottom_to_top").css('transform', 'translateY(0%)');
        jQuery(".active_screen .top_to_bottom").css('transform', 'translateY(0%)');
        jQuery(".prev-screen .prev_left").css('transform', 'translateX(-100%)');
        jQuery(".prev-screen .prev_right").css('transform', 'translateX(100%)');
        jQuery(".prev-screen .prev_top").css('transform', 'translateY(-100%)');
        jQuery(".prev-screen .prev_bottom").css('transform', 'translateY(100%)');
        jQuery(".Screens ~ .Screens .slide_sec ").css('transition', '0.4s ease-in-out');
    }
}

function scrollUpAnimate() {
    var a = parseInt(jQuery("#TextVal").val());
    var b = parseInt(jQuery("#TextVal").val());
    var s = jQuery(".activeHomeScreen > div").length;
    b--;
    jQuery("#TextVal").val(b);
    jQuery(".down_arrow").removeClass("rotateArrow");
    jQuery(".navbar-toggler,.Header_outer,header").removeClass("active");
    jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
    jQuery("#home_page > div").eq(b).addClass("active_screen");
    jQuery("#home_page > div").eq(b).prev().addClass("prev-screen");
    jQuery("#home_page > div").eq(b).next().addClass("next-screen");
    jQuery(".active_screen .right_to_left").css('transform', 'translateX(0%)');
    jQuery(".active_screen .left_to_right").css('transform', 'translateX(0%)');
    jQuery(".next-screen .right_to_left").css('transform', 'translateX(100%)');
    jQuery(".next-screen .left_to_right").css('transform', 'translateX(-100%)');
    jQuery(".prev-screen .right_to_left").css('transform', 'translateX(0%)');
    jQuery(".prev-screen .left_to_right").css('transform', 'translateX(0%)');
    jQuery(".prev-screen .prev_right").css('transform', 'translateX(100%)');
    jQuery(".prev-screen .prev_left").css('transform', 'translateX(-100%)');
    jQuery(".active_screen .bottom_to_top").css('transform', 'translateY(0%)');
    jQuery(".active_screen .top_to_bottom").css('transform', 'translateY(0%)');
    jQuery(".next-screen .top_to_bottom").css('transform', 'translateY(-100%)');
    jQuery(".next-screen .bottom_to_top").css('transform', 'translateY(100%)');
    jQuery(".prev-screen.prev-fix .bottom_to_top ").css('transform', 'translateY(0%)');
    jQuery(".prev-screen.prev-fix .top_to_bottom ").css('transform', 'translateY(0%)');
    jQuery(".pev-screen .prev_top").css('transform', 'translateY(-100%)');
    // jQuery(".active_screen video").trigger('play');
    rePlayVideo();
}

function scrollDownSingle() {
    var a = parseInt(jQuery("#TextVal").val());
    var b = parseInt(jQuery("#TextVal").val());
    var s = jQuery(".singlePageScreen > div").length;
    b++;
    jQuery("#TextVal").val(b);
    if (a == s - 1) {
        jQuery(".down_arrow").addClass("rotateArrow");
        jQuery(".navbar-toggler,.Header_outer,header").addClass("active");
        changeBgColor();
        lastClick2(); 
    } else if (a <= s - 2) {
        jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
        jQuery("#home_page > div").eq(b).addClass("active_screen");
        jQuery("#home_page > div").eq(b).prev().addClass("prev-screen");
        jQuery(".singlePageScreen .active_screen").css('transform', 'translateY(0%)');
        jQuery(".singlePageScreen .prev-screen").css('transform', 'translateY(-120%)');
        jQuery(".singlePageScreen .Screens").css('transition', '0.4s ease-in-out');
    }
}

function scrollUpSingle() {
    var b = parseInt(jQuery("#TextVal").val());
    var s = jQuery(".singlePageScreen > div").length;
    b--;
    jQuery("#TextVal").val(b);
    jQuery(".down_arrow").removeClass("rotateArrow");
    jQuery(".navbar-toggler,.Header_outer,header").removeClass("active");
    jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
    jQuery("#home_page > div").eq(b).addClass("active_screen");
    jQuery("#home_page > div").eq(b).prev().addClass("prev-screen");
    jQuery("#home_page > div").eq(b).next().addClass("next-screen");
    jQuery(".singlePageScreen .active_screen").css('transform', 'translateY(0%)');
}
// last screen click on nav close button
function lastClick() {
    jQuery(".navbar-toggler").click(function() {
        var s = jQuery(".activeHomeScreen > div").length;
        jQuery("#TextVal").val(s - 1);
        jQuery(".down_arrow").removeClass("rotateArrow");
        jQuery("#nextBtnText,#prevBtnText").css("opacity","").css("cursor","");
        jQuery(".signleCloseBtn").show();
        changeBgColor();
    })
}

function lastClick2() {
    jQuery(".navbar-toggler").click(function() {
        var s = jQuery(".singlePageScreen > div").length;
        jQuery("#TextVal").val(s - 1);
        jQuery(".down_arrow").removeClass("rotateArrow");
        jQuery("#nextBtnText,#prevBtnText").css("opacity","").css("cursor","");
        jQuery(".signleCloseBtn").show();
        changeBgColor();
    })
}

function rePlayVideo() {
    if (jQuery("#video1").parents(".Screens").hasClass("active_screen")) {
        var video = document.getElementById("video1");
        video.play();
        video.currentTime = 0;
    } else if (jQuery("#video2").parents(".Screens").hasClass("active_screen")) {
        var video = document.getElementById("video2");
        video.play();
        video.currentTime = 0;
    } else if (jQuery("#video3").parents(".Screens").hasClass("active_screen")) {
        var video = document.getElementById("video3");
        video.play();
        video.currentTime = 0;
    } else if (jQuery("#video4").parents(".Screens").hasClass("active_screen")) {
        var video = document.getElementById("video4");
        video.play();
        video.currentTime = 0;
    } else if (jQuery("#video5").parents(".Screens").hasClass("active_screen")) {
        var video = document.getElementById("video5");
        video.play();
        video.currentTime = 0;
    }

}

// *****************************************************************************************************************************
// *****************************************************************************************************************************
// *****************************************************************************************************************************
  jQuery(".navbar-brand").on('click', function(){
    if(jQuery("#home_page").hasClass("home")){
            jQuery("#TextVal").val("0");
            jQuery(".down_arrow").removeClass("rotateArrow");
            jQuery(".navbar-toggler,.Header_outer,header").removeClass("active");
            jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
            jQuery("#home_page .slide_sec").css('transform', '');
            jQuery(".Screens ~ .Screens .slide_sec ").css('transition', 'unset');
            jQuery("#home_page > div").eq(0).addClass("active_screen");
            // jQuery('rs-bullet[data-key="rs-2"]').trigger('click');
            jQuery('rs-bullets > rs-bullet:first-of-type').trigger('click');
            BtnShowHide();  
        }
    })
// *****************************************************************************************************************************
// *****************************************************************************************************************************
// hide show up down button*****************************************************************************************************
function BtnShowHide() {
    var n = jQuery(".activeHomeScreen > div").length;
    var m = jQuery(".Text_Screen > div").length;
    var a = parseInt(jQuery("#TextVal").val());
    if (jQuery("#home_page").hasClass("activeHomeScreen")) {
        if (a == 0) {
           jQuery("#prevBtnText").css("opacity","0.4").css("cursor","not-allowed");
        }
        else if(a == n){
            jQuery("#nextBtnText").css("opacity","0.4").css("cursor","not-allowed");
            jQuery(".signleCloseBtn").hide();
        }
        else{
            jQuery("#nextBtnText,#prevBtnText").css("opacity","").css("cursor","");
            jQuery(".signleCloseBtn").show();
        }
    }
    else if(jQuery(".Text_Screen").hasClass("TextFullPage")){ 
        if (a == 0) {
            jQuery("#prevBtnText").css("opacity","0.4").css("cursor","not-allowed");
        }
        else if(a == m - 1){
            jQuery("#nextBtnText").css("opacity","0.4").css("cursor","not-allowed");
        }
        else{
            jQuery("#nextBtnText,#prevBtnText").css("opacity","").css("cursor","");
        }
    } 
}   

// *****************************************************************************************************************************
// *****************************************************************************************************************************
// change menu background color dynamically*************************************************************************************
function changeBgColor() { 
    var coloCode = bgColorChangeVars.alert;
    var colors = coloCode.split(',');  
    // console.log(colors);
    var randColor = colors[Math.floor(Math.random()*colors.length)]; 
    jQuery('.Header_outer').css('background-color', randColor);
} 

// *****************************************************************************************************************************
// *****************************************************************************************************************************
// on click flip image and text**************************************************************************************
jQuery(document).on("click", 'a.svg_outer:not(.activeBtn)', function() {
    jQuery(this).addClass('activeBtn');
    jQuery(this).removeClass('activeBtn');
    jQuery(this).parents(".flip-image-wrapper.flip-left").addClass("rotate");
}); 
jQuery(document).on("click", 'a.close-flip:not(.activeBtn)', function() {
    jQuery(this).addClass('activeBtn');
    jQuery(this).removeClass('activeBtn');
    jQuery(this).parents(".flip-image-wrapper.flip-left").removeClass("rotate");
}); 
// jQuery("a.svg_outer").click(function(){
//     jQuery(this).parents(".flip-image-wrapper.flip-left").addClass("rotate");
// })
// jQuery("a.close-flip").click(function(){
//     jQuery(this).parents(".flip-image-wrapper.flip-left").removeClass("rotate");
// })