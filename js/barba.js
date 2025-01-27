// // to stop reload same page  
var links = document.querySelectorAll('a[href]');
var cbk = function(e) {
    if (e.currentTarget.href === window.location.href) {
        e.preventDefault();
        e.stopPropagation();
        $(".preloader.js-preloader.flex-center").hide();
    }
};
for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', cbk);
}

// // barba js
function init() {
    const loader = document.querySelector('.loaderPageCs');
    gsap.set(loader, {
        scaleX: 0, 
        yPercent: -50,
        transformOrigin: 'left center',
        autoAlpha: 1, 
    });

    function loaderIn() { 
    return gsap.fromTo(loader,
        { 
            scaleX: 0,
            xPercent: -5,
            opacity:1,
        },
        {
            duration: 1,
            xPercent: 0,
            scaleX: 1,
            opacity:1, 
            ease: 'power4.inOut',
            transformOrigin: 'left center'
        });
}

        function loaderAway() { 
            return gsap.to(loader, {
                duration:0,
                scaleX: 0,
                xPercent: 5,
                opacity:0.5, 
                transformOrigin: 'right center',
                ease: 'power4.inOut'
            });
        }

    // scroll to the top of the page
    barba.hooks.enter(() => {
        window.scrollTo(0, 0);
    });

    barba.init({
          transitions: [{ 
        	name: "home", 
        	sync: !0, 
        	to: { namespace: ["home"] }, 
        	once: function() {}, 
        	leave: function() {}, 
        	enter: function() {} 
        }, 
        { name: "fade", 
        to: { namespace: ["fade"] }, 
        leave: function() {}, 
        enter: function() {} }, 
        { name: "clip", sync: !0, 
        to: { namespace: ["clip"] }, 
        leave: function() {}, 
        enter: function() {} }, 
        { name: "with-cover", 
        to: { namespace: ["with-cover"] }, 
        leave: function() {}, 
        enter: function() {} 
    }] 
          
    });
    barba.hooks.before(() => {
    document.querySelector('html').classList.add('is-transitioning');
});  
    barba.hooks.after(() => { 
    document.querySelector('html').classList.remove('is-transitioning'); 
        const bottomDOM = document.getElementsByTagName("body")[0];
        const newScript = document.createElement("script");
        const oldScript = document.querySelector(".main-script"); 
        newScript.src = "http://49.249.236.30:78/christopher-wp/wp-content/themes/christopher/js/custom.js";
        newScript.className = "main-script";
        oldScript.remove();
        bottomDOM.appendChild(newScript);
    });
}

window.addEventListener('load', function() {
    init();
    function hello(){
        setTimeout(function() {
            $(".preloader.js-preloader.flex-center").hide().fadeOut(1000);
        }, 2000); 
    }
});