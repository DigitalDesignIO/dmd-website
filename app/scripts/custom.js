
	  $(document).foundation({
	    'magellan-expedition': {
	      active_class: 'active', // specify the class used for active sections
	      threshold: 0, // how many pixels until the magellan bar sticks, 0 = auto
	      destination_threshold: 20, // pixels from the top of destination for it to be considered active
	      throttle_delay: 50, // calculation throttling to increase framerate
	      fixed_top: 0, // top distance in pixels assigend to the fixed element on scroll
	      offset_by_height: true // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
	    },
	    orbit: {
	      animation: 'slide',
	      timer_speed: 3000,
	      pause_on_hover: false,
	      animation_speed: 750,
	      navigation_arrows: true,
	      bullets: true,
	      timer: true,
	      slide_number: false
	    }
	  });
	  $(document).foundation('magellan', 'reflow');

	  /* init variables */
	  var orbitWrap = document.getElementById('orbit-wrapper'),
	      landing = document.getElementById('landing'),
	      navigation = document.getElementById('navigation'),
	      slide = document.getElementsByClassName('orbit-slide-img'),
	      // flag = document.getElementsByClassName('flag-switch')[0],
	      brand = document.getElementsByClassName('navbar-brand')[0],
	      navbarNav = document.getElementsByClassName('navbar-right'),
	      navbarNavAnchors = navbarNav[0].getElementsByTagName('a'),
	      clientWidth = window.innerWidth,
	      clientHeight = window.innerHeight,
	      scrolled = false,
	      toTop = document.getElementsByClassName('back-to-top')[0];

	  if(clientWidth > 1024) {
	    clientHeight = clientHeight - navigation.clientHeight - 14;
	  } else {
	    clientHeight = clientHeight - navigation.clientHeight;
	  }

	  /* set orbit wrapper height, so the image fills the whole screen */
	  orbitWrap.setAttribute('style', 'height: '+ clientHeight +'px;');

	  /* set orbit height of each slide */
	  for (var i = slide.length - 1; i >= 0; i--) {
	    slide[i].setAttribute('style', 'height: ' + clientHeight + 'px;');
	  }

	  /* set landing page height */
	  landing.setAttribute('style', 'height: '+ clientHeight +'px;');

	  /* check if user has scrolled and resize naviagtion bar */
	  window.addEventListener('scroll', function(){
	    'use strict';

	    if(clientWidth > 1039) {

	      if(window.pageYOffset > 0 && scrolled === false) {
	        toTop.setAttribute('style', 'visibility: visible');
	        scrolled = true;
	        for (var i = 0; i < navbarNavAnchors.length; i++) {
	          navbarNavAnchors[i].setAttribute('style', 'padding: 15px 0;');
	        }
	        brand.setAttribute('style', 'padding: 6px 10px;');
	      }

	      else if(window.pageYOffset === 0) {
	        toTop.setAttribute('style', 'visibility: hidden');
	        scrolled = false;
	        for (var f = 0; f < navbarNavAnchors.length; f++) {
	          navbarNavAnchors[f].setAttribute('style', 'padding: 38px 0;');
	        }

	        brand.setAttribute('style', 'padding: 28px 10px;');
	      }
	    }
	  });

	  /* animation for the "scroll back to top button" */
	  document.getElementsByClassName('back-to-top')[0].addEventListener('click', function(){
	  'use strict';
	    // jquery is loaded?
	    if(window.jQuery){
	      $(function() {
	        if(window.innerWidth >= 768) {
	          $('html, body').animate({
	              scrollTop: $('body').offset().top
	          }, 1000);
	        } else{
	          $('html, body').animate({
	              scrollTop: $('body').offset().top
	          }, 1000);
	        }
	      });
	    }
	    // fallback if jquery was not loaded when user clicked button.
	    else {
	      // go to anchor tag with name: 'content-body'
	      window.location.hash='content-body';
	    }
	  });
