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

jQuery('.js-preloader').preloadinator({
    minTime: 2000
});


jQuery("body").find(".navbar-brand,.signleCloseBtn").click(function() {
     setTimeout(function(){ 
    jQuery('.js-preloader').hide(); 
    }, 2000);
});

 
jQuery("*").on('click',function(){
    if (jQuery("#home_page").hasClass("singlePageLoader")) {
        jQuery(".loaderPageCs").addClass("active");
    }
    else{
        jQuery(".loaderPageCs").removeClass("active");
    }
})

jQuery("body").find(".menu-item a,.navbar-brand").click(function() {
    jQuery(".preloader.js-preloader.flex-center").show();
});

function hello() {
    setTimeout(function() {
        jQuery(".preloader.js-preloader.flex-center").hide().fadeOut(1000);
    }, 2000);
}
 
// loader 

var urlParams = new URLSearchParams(window.location.search);
var value = urlParams.get('v');
if (value == 'm') {
    jQuery("body").addClass("modalType");
}  
else{
    jQuery("body").removeClass("modalType");
}
  
// loader js end
jQuery(window).ready(function() {
    // ***Text full page screen ****
    if (jQuery(".Text_Screen").hasClass('TextFullPage')) {
        var n = jQuery(".Text_Screen > div").length;
        jQuery(".TextFullPage > div.active").css("opacity", "1");
        jQuery(".TextFullPage > div").css("transition", "0.4s ease-in-out");
        jQuery(".TextFullPage > div:not('.active'),.TextFullPage > div:not('.prevScreen'),.TextFullPage > div:not('.nextScreen')").addClass("inActive");
        jQuery(".TextFullPage > div:not('.active')").css("opacity", "0");
        jQuery(".text_wrap").append("<div class='active_screen'> <span>1</span> / " + n + "</div>");
    }
    // ****Text full page screen end ****
});
 

// features page start req 
function myFunction(x) {
    if (x.matches) { // If media query matches
        jQuery(".featured_classic_outer").unwrap(".Screens");
        jQuery(".activeHomeScreen").removeClass(function(index, className) {
            return (className.match(/\blast\S+/g) || []).join(' ');
        });
        var postdivs = jQuery(".activeHomeScreen .featured_classic_outer");
        for (var i = 0; i < postdivs.length; i += 4) {
            postdivs.slice(i, i + 4).wrapAll("<div class='Screens'></div>");
        }
        var s = jQuery(".activeHomeScreen > div:last-child > div").length;
        if (s == 1) {
            jQuery(".activeHomeScreen").addClass("lastOne");
        }
        if (s == 2) {
            jQuery(".activeHomeScreen").addClass("lastTwo");
        }
        if (s == 3) {
            jQuery(".activeHomeScreen").addClass("lastThree");
        }
        if (s == 4) {
            jQuery(".activeHomeScreen").addClass("lastFour");
        }
        jQuery(".activeHomeScreen > div:first-child ").addClass("active_screen");

    } else {
        jQuery(".featured_classic_outer").unwrap(".Screens");
        jQuery(".activeHomeScreen").removeClass(function(index, className) {
            return (className.match(/\blast\S+/g) || []).join(' ');
        });
        var postdivs = jQuery(".activeHomeScreen .featured_classic_outer");
        for (var i = 0; i < postdivs.length; i += 6) {
            postdivs.slice(i, i + 6).wrapAll("<div class='Screens'></div>");
        }
        var s = jQuery(".activeHomeScreen > div:last-child > div").length;
        if (s == 1) {
            jQuery(".activeHomeScreen").addClass("lastOne");
        }
        if (s == 2) {
            jQuery(".activeHomeScreen").addClass("lastTwo");
        }
        if (s == 3) {
            jQuery(".activeHomeScreen").addClass("lastThree");
        }
        if (s == 4) {
            jQuery(".activeHomeScreen").addClass("lastFour");
        }
        if (s == 5) {
            jQuery(".activeHomeScreen").addClass("lastFive");
        }
        if (s == 6) {
            jQuery(".activeHomeScreen").addClass("lastSix");
        }
        // if (s == 7) {
        //     jQuery(".activeHomeScreen").addClass("lastSeven");
        // }
        jQuery(".activeHomeScreen > div:first-child ").addClass("active_screen");

    }
}
var x = window.matchMedia("(max-width: 1199px)")
myFunction(x) 
x.addListener(myFunction) 

 
// show screen on  click cross btn of signle page
if(jQuery("#home_page").hasClass("home")){
    var urlParams = new URLSearchParams(window.location.search);
    var value = urlParams.get('id');  
    if (value == null) { 
    }
    else if( jQuery('.home').find('#' + value).length > 0){  
        var acn = jQuery('#' + value).index();  
        jQuery("#TextVal").val(acn);
        jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
        jQuery("#home_page > div").eq(acn).addClass("active_screen");
        jQuery("#home_page > div").eq(acn).prev().addClass("prev-screen");
        for (var sactive = 0; sactive <= acn; sactive++) { 
             jQuery("#home_page > div").eq(sactive).children().children().children(".slide_sec").css("transition","all 0.4s ease-in-out 0s").css("transform","translateX(0%)");
        }
    }
    else {   
        var acn = jQuery('#' + value).index();  
        jQuery("#TextVal").val(14);
        jQuery("#home_page > div").removeClass("prev-screen").removeClass("active_screen").removeClass("next-screen");
        jQuery("#home_page > div").eq(14).addClass("active_screen");
        jQuery("#home_page > div").eq(14).prev().addClass("prev-screen");
        for (var sactive = 0; sactive <= 14; sactive++) { 
             jQuery("#home_page > div").eq(sactive).children().children().children(".slide_sec").css("transition","all 0.4s ease-in-out 0s").css("transform","translateX(0%)");
        } 
    } 
}

// hide prev button on load
jQuery("#prevBtnText").css("opacity","0.4").css("cursor","not-allowed");
  
 