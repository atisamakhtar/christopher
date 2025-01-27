<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
 
<script src="https://unpkg.com/@barba/core"></script>
<script src="https://unpkg.com/gsap@latest/dist/gsap.min.js"></script> 
<script type="text/javascript"> 
 
    barba.init({
        preventRunning: true,
        transitions: [{
            name: 'Right transition',
            sync: true, 
            from: {
               namespace: 'home', 
                custom: ({ trigger }) => {
                return trigger.classList && trigger.classList.contains('right-transition');
                    return gsap.to(data.current.container, {
                            left: '100%' 
                    })   
                }, 
            },
            to: {
                namespace: 'home',
            }, 
            leave(data) {
                return gsap.to(data.current.container, {
                    left: '-100%' 
                });
            },
            enter(data) {
                return gsap.from(data.next.container, {
                    left: '100%' 
                });
            }
        },
        {
            name: 'Left transition',
            sync: true, 
            to: {
                namespace: ['home']
            }, 
            leave(data) {
                return gsap.to(data.current.container, {
                    left: '100%' 
                });
            },
            enter(data) {
                return gsap.from(data.next.container, {
                    left: '-100%' 
                });
            }
        }]
    });
    barba.hooks.after(() => { 
        setTimeout(function(){ 
            if(jQuery("body").find("#home_page").hasClass("home")){  
                try {
                    revinit_revslider11();
                }
                catch(err) { 
					   setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[900,768,960,720],gw:[1240,1024,778,480],gh:[900,768,960,720],type:'standard',justify:'',layout:'fullscreen',offsetContainer:'',offset:'',mh:"0"});
                    var revapi1,
                        tpj;
                    function revinit_revslider11() {
                    jQuery(function() {
                        tpj = jQuery;
                        revapi1 = tpj("#rev_slider_1_1");
                        tpj.noConflict();
                        if(revapi1==undefined || revapi1.revolution == undefined){
                            revslider_showDoubleJqueryError("rev_slider_1_1");
                        }else{
                            revapi1.revolution({
                                DPR:"dpr",
                                sliderLayout:"fullscreen",
                                duration:"8000ms",
                                visibilityLevels:"1240,1024,778,480",
                                gridwidth:"1240,1024,778,480",
                                gridheight:"900,768,960,720",
                                perspective:600,
                                perspectiveType:"global",
                                editorheight:"900,768,960,720",
                                responsiveLevels:"1240,1024,778,480",
                                progressBar:{disableProgressBar:true},
                                navigation: {
                                    wheelCallDelay:1000,
                                    onHoverStop:false,
                                    touch: {
                                        touchenabled:true,
                                        touchOnDesktop:true
                                    },
                                    bullets: {
                                        enable:true,
                                        tmp:"",
                                        style:"custom",
                                        v_offset:40,
                                        space:6,
                                        container:"layergrid"
                                    }
                                },
                                fallbacks: {
                                    allowHTML5AutoPlayOnAndroid:true
                                },
                            });
                        }
                        
                    });
                    } // End of RevInitScript
                var once_revslider11 = false;
                if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11 ) { once_revslider11 = true; revinit_revslider11();}});} else {once_revslider11 = true; revinit_revslider11();}
                
			 
                }  
            } 
        }, 100); 
        const bottomDOM = document.getElementsByTagName("body")[0];
        const newScript = document.createElement("script");
        const oldScript = document.querySelector(".main-script"); 
        newScript.src = "https://iq3.ca/wp-content/themes/christopher/js/custom.js";
        newScript.className = "main-script";
        oldScript.remove();
        bottomDOM.appendChild(newScript);
    });
    function removeMenu() {
        setTimeout(function () {
            let url =   window.location.href.split('/')
            if (url[3]==='casestudies'){
                jQuery('.navbar-toggler').hide();
                jQuery('#backBtn').css('top','87');
            }else {
                jQuery('.navbar-toggler').show()
            }
        },100)
    }
</script>
<?php wp_footer(); ?> 
<script type="text/javascript">
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

</script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/loader/jquery.preloadinator.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/cs-Scroll.js?ver=6.0.2 "></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script class="main-script" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script> 
<!--<script class="main-script" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/js/old_custom.js"></script>-->
<!--<script class="main-script" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/js/old_cs-Scroll.js"></script>-->
</body>
</html>