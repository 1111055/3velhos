
jQuery(document).ready(function($){
  'use strict';
  jQuery('#headerwrap #prevslide').click(function(x) { x.preventDefault(); jQuery('#headerwrap').data('backstretch').prev(); });
  jQuery('#headerwrap #nextslide').click(function(x) { x.preventDefault(); jQuery('#headerwrap').data('backstretch').next(); });

  var windowsHeight = jQuery(window).height();
  jQuery('#headerwrap').css('height', windowsHeight + 'px');
  jQuery('#headerwrap.half').css('height', windowsHeight/3 + 'px');

    //goto top
    $('.gototop').click(function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("body").offset().top
      }, 500);
    }); 
}); 

$(window).scroll(function() {
'use strict';
    var scroll_pos = 0;
    
    $(document).scroll(function() { 
        var windowsHeight = $(window).height();
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > windowsHeight) {              
            $('#gototop').addClass('appear');
            $('#gototop').removeClass('no-display');
        } else {
            $('#gototop').addClass('no-display');
            $('#gototop').removeClass('appear');
        }
    });

});
/*-----------------------------------------------------------------------------------*/
/*  PORTFOLIO
/*-----------------------------------------------------------------------------------*/
$(window).load(function(){
  'use strict';
  var portfolio_selectors = $('.portfolio-filter li a');
  if(portfolio_selectors!='undefined'){
    var portfolio = $('.portfolio-items');
    portfolio.isotope({
      itemSelector : 'li',
      layoutMode : 'fitRows'
    });
    portfolio_selectors.on('click', function(){
      portfolio_selectors.removeClass('active');
      $(this).addClass('active');
      var selector = $(this).attr('data-filter');
      portfolio.isotope({ filter: selector });
      return false;
    });
  }

  window.resize
});


/*-----------------------------------------------------------------------------------*/
/*  ANIMATE
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){
  'use strict';

  var $window = $(window);
  var $pane = $('#pane1');

  function checkWidth() {
      var windowsize = $window.width();
      if (windowsize > 440) {
          //if the window is greater than 440px wide then turn on jScrollPane..
        jQuery('.fade-up, .fade-down, .bounce-in, .flip-in, .fade-left, .fade-right, .fade-in').addClass('no-display');

        jQuery('.bounce-in').one('inview', function() { 
          jQuery(this).addClass('animated bounceIn appear');
        });
        jQuery('.flip-in').one('inview', function() { 
          jQuery(this).addClass('animated flipInY appear');
        });
        jQuery('.fade-up').one('inview', function() {
          jQuery(this).addClass('animated fadeInUp appear');
        });
        jQuery('.fade-down').one('inview', function() {
          jQuery(this).addClass('animated fadeInDown appear');
        });
        jQuery('.fade-left').one('inview', function() {
          jQuery(this).addClass('animated fadeInLeft appear');
        });
        jQuery('.fade-in').one('inview', function() {
          jQuery(this).addClass('animated fadeIn appear');
        });
        jQuery('.fade-right').one('inview', function() {
          jQuery(this).addClass('animated fadeInRight appear');
        });
        jQuery('.counter').counterUp({
          delay: 10,
          time: 1000
        });
      }
  }
  // Execute on load
  checkWidth();
  // Bind event listener
  $(window).resize(checkWidth);

});


/*-----------------------------------------------------------------------------------*/
/*  FUNCTIONS
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function(){
  'use strict';
  jQuery('.dropdown-menu').addClass('dropdown-push-right');

  $('.menu-close').on('click', function(){
    $('#menuToggle').toggleClass('active');
    $('body').toggleClass('body-push-toright');
    $('#theMenu').toggleClass('menu-open');
	});

 // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });

  	$('#headerwrap').bind('resize', function(){
   		$('#headerwrap').backstretch("resize");
	});

  //Pretty Photo
  $("a[data-rel^='prettyPhoto']").prettyPhoto({
    social_tools: false,
    theme: 'dark_square',
    overlay_gallery: false,
    hook:"data-gallery"
  }); 

});

/*-----------------------------------------------------------------------------------*/
/*  NICESCROLL
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function(){
'use strict';
    jQuery("body").niceScroll({
      cursorcolor: '#202020',
      cursorwidth: 15,
      cursorborderradius: 0,
      cursorborder: '0px solid #fff',
      zindex: 10
    });
});

/*-----------------------------------------------------------------------------------*/
/*  SNOOOOOOOOTH SCROLL - SO SMOOTH
/*-----------------------------------------------------------------------------------*/
$(function() {
'use strict';
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
					}, 1000);
				return false;
			}
		}
	});
});

/*-----------------------------------------------------------------------------------*/
/*  SEARCH BAR
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){
'use strict';
  jQuery('#search-wrapper, #search-wrapper input').hide();

  jQuery('a.search-trigger').click(function(e) {
    e.preventDefault();
  });

  jQuery('a.search-trigger').click(function(){
    jQuery('#search-wrapper').slideDown(300, function() {
      var check=$(this).is(":hidden");
      if(check == true) {
          jQuery('#search-wrapper input').fadeOut(600);
      } else {
        jQuery("#search-wrapper input").focus();
        jQuery('#search-wrapper input').slideDown(200);
      }
    });
  });

  jQuery('span.close-trigger').click(function(){
    jQuery('#search-wrapper').slideUp(300);
  });

});

/*-----------------------------------------------------------------------------------*/
/*  PRELOADER
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){
'use strict';
  $(window).load(function(){
    $('#preloader').fadeOut('slow',function(){$(this).remove();});
  });
});

$(document).ready(function() {
 
  $("#testimonial-carousel").owlCarousel({ 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      navigationText : ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
  });

  $("#logo-carousel").owlCarousel({ 
      autoPlay: 5000, //Set AutoPlay to 3 seconds 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
       navigation : true, // Show next and prev buttons
       navigationText : ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
 
  });
 
});

/*-----------------------------------------------------------------------------------*/
/*  CONTACT FORM
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){
  'use strict';

  $('#contactform').submit(function(){
    var action = $(this).attr('action');
    $("#message").slideUp(750,function() {
    $('#message').hide();
    $('#submit').attr('disabled','disabled');
    $.post(action, {
      name: $('#name').val(),
      email: $('#email').val(),
      website: $('#website').val(),
      comments: $('#comments').val()
    },
      function(data){
        document.getElementById('message').innerHTML = data;
        $('#message').slideDown('slow');
        $('#submit').removeAttr('disabled');
        if(data.match('success') != null) $('#contactform').slideUp('slow');
        $(window).trigger('resize');
      }
    );
    });
    return false;
  });
  
});

$(document).ready(function(){
    'use strict';

    // OWL CAROUSEL //
    $('.owl-carousel').owlCarousel({
      navigation: false,
      pagination: false,
      navigationText: [
      "<i class='pe-7s-angle-left'></i>",
      "<i class='pe-7s-angle-right'></i>"
      ], 
      autoPlay: 8000,
      loop: true
    });

    $('.owl-carousel-paged').owlCarousel({
      navigation: false,
      pagination: false,
      autoPlay: 8000,
      loop: true
    });

    $('#single-slider').owlCarousel({
      navigation: false,
      pagination: true,
      autoPlay: 8000,
      loop: true
    });

    $(".side-menu .nav").metisMenu({
        toggle: false
    });

    // ANIMATED ONLY IF NOT AT TOP OF PAGE ON LOAD //
    var $win = $(window);
    if ($win.scrollTop() == 0)
        jQuery('.navbar-fixed-top').addClass('wow');
    else if ($win.height() + $win.scrollTop() == $(document).height()) {
         jQuery('.navbar-fixed-top').removeClass('wow');
    }



    //NEAT VID EMBEDS
    $().prettyEmbed({ useFitVids: true });
    
    var magnificPopup = jQuery.magnificPopup.instance;
    jQuery('.lb-link, .image-gallery').magnificPopup({
      preloader:true,
      type: 'image',
      removalDelay: 300,
      mainClass: 'fadeInDown',
      callbacks: {
          open: function() {
            magnificPopup.content.addClass('mobile');
          }
        }
    });

    //BACK TO TOP
    $('a#back-to-top').on('click', function(event){
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("body").offset().top
      }, 500);
    }); 

    $('.vertical-center').flexVerticalCenter({ cssAttribute: 'padding-top' });

    //CONTACT FORM
    $('#contactform').submit(function(){
      var action = $(this).attr('action');
      $("#message").slideUp(750,function() {
      $('#message').hide();
      $('#submit').attr('disabled','disabled');
      $.post(action, {
        name: $('#name').val(),
        email: $('#email').val(),
        website: $('#website').val(),
        comments: $('#comments').val()
      },
        function(data){
          document.getElementById('message').innerHTML = data;
          $('#message').slideDown('slow');
          $('#submit').removeAttr('disabled');
          if(data.match('success') != null) $('#contactform').slideUp('slow');
          $(window).trigger('resize');
        }
      );
      });
      return false;
    });

    $(".rotate").textrotator({
      animation: "dissolve",
      separator: ",",
      speed: 2500 // How many milliseconds until the next word show.
    });

    $('.match-height').matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });

    var mapHeight = $('#contact-inner').outerHeight();
    $('#mapwrapper').css('height', mapHeight);

    $(document).on( 'shown.bs.tab', 'a[href="#contact2"]', function (e) {
        $("#mapwrapper").gMap({ 
            controls: false,
            scrollwheel: false,
            markers: [{     
                latitude:40.7566,
                longitude: -73.9863,
            icon: { image: "assets/img/marker.png",
                iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
            icon: { 
                image: "assets/img/marker.png", 
                iconsize: [26, 46],
                iconanchor: [12, 46],
                infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
            zoom: 14,
            styles: [{"featureType":"all","elementType":"labels.text","stylers":[{"saturation":"12"},{"color":"#000000"},{"lightness":"-5"},{"gamma":"7.71"},{"weight":"10.00"},{"invert_lightness":true}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"on"}]}]
        });
        if (!$('#contact-tabs').hasClass('map-open')) {
          $('#contact-tabs').addClass('map-open');
        }
    });

    $(document).on( 'shown.bs.tab', 'a[href="#contact1"]', function (e) {
        if ($('#contact-tabs').hasClass('map-open')) {
          $('#contact-tabs').removeClass('map-open');
        }        
    });

    //SIDE NAV MOBILE
    $('#side-menu-toggle').on('click', function(event){
      event.preventDefault();
      $(this).toggleClass('open');
      $('#side-menu-toggle i').toggleClass('fa-bars');
      $('#side-menu-toggle i').toggleClass('fa-times');
      $('#side-wrapper').toggle();
    });

    // ONEPAGER XTRA //
    $('body').scrollspy({
        target: '.navbar-fixed-top'
    });

    // FULLSCREEN FIX //
    var windowHeight = $(window).innerHeight();
    var isMobileDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    if( !isMobileDevice ) {
        $('#headerwrap.fullheight').css('height', windowHeight);
        $(window).on('resize', function(){
            $('#headerwrap.fullheight').css('height', windowHeight);
        });
    }

    // ANIMATE ONCE PAGE LOAD IS OVER //
    Pace.on("done", function(){
        new WOW().init();
        $(window).trigger('resize');
    });

    // SEARCH //
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search-wrapper').addClass('open');
        $('#search-wrapper > form > input[type="search"]').focus();
    });
    
    $('#search-wrapper, #search-wrapper button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })

    // ONEPAGER //
    $('a.page-scroll').on('click', function(event){
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $('.entry-content table, #post-content table').addClass('table');
    $('.entry-content dl, #post-content dl').addClass('dl-horizontal');
    //$(window).trigger('resize');

    $('.flexpanel').flexpanel({
        animation: 'slide',
        direction: 'right',
        wrapper: '.master-wrapper',
        button: '.side-menu-trigger',
        maxWidth: null  
    });

    $('.flexpanel').flexpanel({
        animation: 'slide',
        direction: 'right',
        wrapper: '.master-wrapper',
        button: '.side-menu-only .navbar-toggle',
        maxWidth: null  
    });

    $('a[href="#search"]').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $(this).closest('li').find('.dropdown-menu').toggleClass('open-me');
    });
  

    $('.viewport-wrap').mCustomScrollbar({
      theme:"dark"
    });

    if($('nav').hasClass('header-6')) {
      var headerHeight = $('.header-6.navbar-fixed-top').outerHeight();
      $('body').css({
        'padding-top' : headerHeight
      });
    }

    $("#mapwrapper.alt-map").gMap({ 
        controls: false,
        scrollwheel: false,
        markers: [{     
            latitude:40.7566,
            longitude: -73.9863,
        icon: { image: "assets/img/marker.png",
            iconsize: [44,44],
            iconanchor: [12,46],
            infowindowanchor: [12, 0] } }],
        icon: { 
            image: "assets/img/marker.png", 
            iconsize: [26, 46],
            iconanchor: [12, 46],
            infowindowanchor: [12, 0] },
        latitude:40.7566,
        longitude: -73.9863,
        zoom: 14,
        styles: [{"featureType":"all","elementType":"labels.text","stylers":[{"saturation":"12"},{"color":"#000000"},{"lightness":"-5"},{"gamma":"7.71"},{"weight":"10.00"},{"invert_lightness":true}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"on"}]}]
    });
});

  //  The function to change the class
  var changeClass = function (r,className1,className2) {
    var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
    if( regex.test(r.className) ) {
      r.className = r.className.replace(regex,' '+className2+' ');
      }
      else{
      r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
      }
      return r.className;
  };  

  //  Creating our button in JS for smaller screens
  var menuElements = document.getElementById('menu');
  menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

  //  Toggle the class on click to show / hide the menu
  document.getElementById('menutoggle').onclick = function() {
    changeClass(this, 'navtoogle active', 'navtoogle');
  }

  // http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
  document.onclick = function(e) {
    var mobileButton = document.getElementById('menutoggle'),
      buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

    if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
      changeClass(mobileButton, 'navtoogle active', 'navtoogle');
    }
  }


$( "#contact-form" ).submit(function( event ) {
      
 

  // Stop form from submitting normally
  event.preventDefault();


   var $form   = $( this ),

    nome      = $form.find( "input[name='nome']" ).val(),
    email     = $form.find( "input[name='email']" ).val(),
    assunto   = $form.find( "input[name='subject']" ).val(),
    url       = "contactos";
    
    erro = false;

   if(nome === ""){

      erro = true;
      $form.find( "input[name='nome']" ).focus();
      $("#erronome").fadeIn();
      $("#erronome").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
          $("#erronome").fadeOut();
      }, 2000);

   } 

   if(email === "" && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#erroemail").fadeIn();
      $("#erroemail").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
              $("#erroemail").fadeOut();
            }, 2000);
   }

  if(!isEmail(email) && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#erroemail").fadeIn();
      $("#erroemail").html("<p> Erro - Formato incorrecto de email. </p>");

       setTimeout(function(){
              $("#erroemail").fadeOut();
            }, 2000);
   }

   if(assunto === "" && erro == false){

      erro = true;
      $form.find( "input[name='subject']" ).focus();
      $("#erroassunto").fadeIn();
      $("#erroassunto").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
          $("#erroassunto").fadeOut();
      }, 2000);

   } 

   if(!$('#termos').is(':checked') && erro == false){

      erro=true;
      $('#termos').focus();
      $("#errotermos").fadeIn();
      $("#errotermos").html("<p> Erro - Obrigatório aceitar os termos e condições. </p>");


           setTimeout(function(){
              $("#errotermos").fadeOut();
            }, 2000);
   }

  
   if(erro == false){

       $("#sendcontact").fadeOut();
       $("#loaderorca").fadeIn(); 

        var formData = new FormData(this);
       
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(data) {
                if(data['done'] == 1){
                    $("#loaderorca").fadeOut();
                    $("#enviosucesso").fadeIn();

                    $("#enviosucesso").html("<p> Submetido com sucesso. </p>");
                    $("#contact-form")[0].reset();
                    setTimeout(function(){
                       $("#enviosucesso").fadeOut();
                       $("#sendcontact").fadeIn();
                       
                    }, 3000);

                        
                }
            },
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() { // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function() {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
    }
   
});



function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


$(function() {
  $("#orcamentosend").submit(function(e) {
    e.preventDefault();
    console.log("Hi!!!")
  });

  // You should probably put the rest of your Javascript in here too, so it doesn't run until the DOM is fully ready.
});


    $(function() {
        $("#selcororc").change(function(){
            var option = $('option:selected', this).attr('cor');
            $("#selcororc").css("background-color", option);
            
        });
    });

$('#sort').change(function(){
    var val = $(this).val();
    var cat = $('#categoria').val();

    window.location.href = '/public/shop/'+cat+'?sort='+val;
});

// Attach a submit handler to the form
$( "#searchForm" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    term = $form.find( "input[name='email']" ).val(),
    crf = $form.find( "input[name='crf']" ).val(),
    url = $form.attr( "action" );

   erro=false;

 /*  if(term === "" && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#alerterro").fadeIn();
      $("#alerterro").html("<p> Erro - Campo Obrigatório </p>");

      setTimeout(function(){
              $("#alerterro").fadeOut();
            }, 2000);
   }*/

  if(!isEmail(term) && erro == false){
      erro = true;
      $form.find( "input[name='email']" ).focus();
      $("#alerterro").fadeIn();
      $("#alerterro").html("<p> Erro - Formato incorrecto de email. </p>");

       setTimeout(function(){
              $("#alerterro").fadeOut();
            }, 2000);
   }

   if(!$('#politica').is(':checked') && erro == false){

      erro=true;
      $('#politica').focus();
      $("#alerterro").fadeIn();
      $("#alerterro").html("<p> Erro - Obrigatório aceitar a poticia e privacidade da empresa. </p>");


           setTimeout(function(){
              $("#alerterro").fadeOut();
            }, 2000);
   }

  
     
   if(erro == false){
          var posting = $.post( url, { email: term, _token: crf } );

          posting.done(function( data ) {
            if(data['done'] == 1){
                $("#searchForm")[0].reset();
                $('#alerterro').removeClass('alert alert-danger').addClass('alert alert-success');
                $("#alerterro").fadeIn();
                $("#alerterro").html("<p> Submetido com sucesso. </p>");
                setTimeout(function(){
                   $("#alerterro").fadeOut();
                }, 2000);
            }else{
                $("input[name='email']").focus();
                $("#alerterro").fadeIn();
                $("#alerterro").html("<p> Erro - Email já existente. </p>");
               setTimeout(function(){
                   $("#alerterro").fadeOut();
                }, 2000);
            }
          });

    }
});

$('.menuclick').on('click', function(){
 $('.menuclick').next( "ul" ).hide();

  $(this).next( "ul" ).show();

});

