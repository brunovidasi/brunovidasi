

(function() {
  jQuery(function($) {
    var $characters, $claim, $claimCursor, claims, createElements, delay, drawFrame, frame, index, mode, pos;

    claims = [
    'Utilizo os conceitos de Orientação a Objetos',
    'Quer desenvolver seu site comigo?',
    'Programo websites em PHP, e utilizo das mais novas tecnologias de HTML5, CSS3 e JavaScript',
    'HTML5 & CSS3 é incrível!',
    'Utilizo o modelo MVC para o desenvolvimento.',
    'Sou 100% a favor do Design Responsivo!',
    'Minimalismo... Menos sempre é mais'];
    
    index = 0;
    frame = 0;
    pos = 0;
    mode = 0;
    delay = 250;
    $claim = $('#claim');
    $claimCursor = null;
    $characters = null;

    createElements = function(){
      var c, _i, _len, _ref;

      _ref = claims[index].split('');
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        c = _ref[_i];
        $claim.append("<span class='off'>" + c + "</span>");
      }
      $claimCursor = $('<span id="claim_cursor" class="off"> _</span>');
      $claim.append($claimCursor);
      return $characters = $claim.children();
    };

    createElements();

    drawFrame = function() {
      var $character;


      $character = $characters.eq(pos);

      if($character.hasClass('off')){
        $character.removeClass('off');
      }else{
        $character.addClass('off');
      }

      if(pos < claims[index].length){
        $claimCursor.addClass('off');
      }else{
        if(Math.floor(frame / 10) % 2 === 0){
          $claimCursor.addClass('off');
        }else{
          $claimCursor.removeClass('off');
        }
      }

      if(mode === 0){
        if(pos < claims[index].length){
          pos++;
        }
      }else{
        if(pos > 0){
          pos--;
        }else{
          mode = 1 - mode;
          index++;
          index %= claims.length;
          $claim.empty();
          createElements();
        }
      }
      frame++;
      if(frame % delay === 0){
        mode = 1 - mode;
      }
    };

    return window.setInterval(drawFrame, 1000 / 25);

  });

}).call(this);

function include(url){
  document.write('<script src="'+url+'"></script>');
  return false ;
}

/* cookie.JS
========================================================*/
include('js/jquery.cookie.js');


/* DEVICE.JS
========================================================*/
include('js/device.min.js');

/* Stick up menu
========================================================*/
include('js/tmstickup.js');

/* Easing library
========================================================*/
include('js/jquery.easing.1.3.js');


/* ToTop
========================================================*/
include('js/jquery.ui.totop.js');
$(function () {   
  $().UItoTop({ easingType: 'easeOutQuart' });
});

/* Video
 ========================================================*/
include('js/jquery.vide.js');
$(document).ready(function () {
    $("#header").vide("video/video",{
        volume: 1,
        playbackRate: 1,
        muted: true,
        loop: true,
        autoplay: true,
        position: "50% 50%" // Alignment
    });
    $('#header video').fadeOut(0).delay(200).fadeIn(800);
});

/* DEVICE.JS AND SMOOTH SCROLLIG
 ========================================================*/
include('js/jquery.mousewheel.min.js');

/* menu
 ========================================================*/
include('js/smoothing-scroll.js');

$(window).load(function() {
    var
        menuSelector = $('.sf-menu')
        , asideMenuSelector = $('')
        , offsetArray = []
        , offsetValueArray = []
        , _document = $(document)
        , currHash = ''
        , isAnim = false
        , isHomePage = $('body').hasClass('home')? true:false
        ;

    //--------------------------- Menu navigation ---------------------------

    getPageOffset();
    function getPageOffset(){
        offsetArray = [];
        offsetValueArray = [];
        $('.hashAncor').each(function(){
            var _item = new Object();
            _item.hashVal = "#"+$(this).attr('id');
            _item.offsetVal = $(this).offset().top;
            offsetArray.push(_item);
            offsetValueArray.push(_item.offsetVal);
        })
    }

    function offsetListener(scrollTopValue, anim){
        if(isHomePage){

            scrolledValue = scrollTopValue;
            var nearIndex = 0;

            nearIndex = findNearIndex(offsetValueArray, scrolledValue)
            currHash = offsetArray[nearIndex].hashVal;

            if(window.location.hash != currHash){
                if(anim){
                    isAnim = true;
                    $('html, body').stop().animate({'scrollTop':scrolledValue}, 1500, function(){
                        isAnim = false;
                        window.location.hash = currHash;
                        $('html, body').stop().animate({'scrollTop':scrolledValue},0);
                        return false;
                    });
                }else{
                    window.location.hash = currHash;
                    $('html, body').stop().animate({'scrollTop':scrolledValue},0);
                    return false;
                }
            }
        }
    }

    function findNearIndex(array, targetNumber){
        var
            currDelta
            , nearDelta
            , nearIndex = -1
            , i = array.length
            ;

        while (i--){
            currDelta = Math.abs( targetNumber - array[i] );
            if( nearIndex < 0 || currDelta < nearDelta )
            {
                nearIndex = i;
                nearDelta = currDelta;
            }
        }
        return nearIndex;
    }

    $(window).on('mousedown',function(){
        isAnim = true;
    })
    $(window).on('mouseup',function(){
        isAnim = false;
        offsetListener(_document.scrollTop(), false);
    })

    $(window).on('mousewheel', function(event){
        offsetListener(_document.scrollTop(), false);
    })
    $(window).on('resize', function(){
        getPageOffset();
    })

    $('> li a[href^="#"]', menuSelector).on('click',function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);
        offsetListener($target.offset().top, true);
        return false;
    });
    $('> li a[href^="#"]', asideMenuSelector).on('click',function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);
        offsetListener($target.offset().top, true);
        return false;
    });


    $(window).on('hashchange', function() {
        var
            target = window.location.hash ? window.location.hash : offsetArray[0].hashVal;

        $('.active-menu-item').removeClass('active-menu-item');
        $('> li a[href="' + target + '"]', menuSelector).parent().addClass('active-menu-item');
        $('> li a[href="' + target + '"]', asideMenuSelector).parent().addClass('active-menu-item');
    }).trigger('hashchange');

})


/* Stellar.js
========================================================*/
include('js/stellar/jquery.stellar.js');
$(document).ready(function() { 
  if ($('html').hasClass('desktop')) {
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: 20
      });
  }
});


/* Copyright Year
========================================================*/
var currentYear = (new Date).getFullYear();
$(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
});


/* Superfish menu
========================================================*/
include('js/superfish.js');
include('js/jquery.mobilemenu.js');


/* Orientation tablet fix
========================================================*/
$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,

	gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	
	scaleFix();
	// Menu Android
	if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')


