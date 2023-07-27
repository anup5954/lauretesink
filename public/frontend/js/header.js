$(document).ready(function(){       
  $('#myModal').modal('show');
   }); 

$(".menubtn").click(function(){
  $(".menu-categories").addClass("open");
  $("header").addClass("zindex");
  $(".overlaycss").removeClass("hidden");
  $(".menu-class-change header").addClass("position-static");
});

$("#closemenue").click(function(){
  $(".menu-categories").removeClass("open");
  $("header").removeClass("zindex");
  $("#cssmenu").removeClass("open"); 
  $(".overlaycss").addClass("hidden");
  $(".menu-class-change header").removeClass("position-static");
});

$("#searchproduct").click(function(){
  $(".headerserch").addClass("show");
  $(".overlaycss").removeClass("hidden");
  $(".menu-class-change header").addClass("position-static");
});
$("#closesearch").click(function(){
  $(".headerserch ").removeClass("show");
  $(".overlaycss").addClass("hidden");
  $(".menu-class-change header").removeClass("position-static");
});


/*start here internal page header*/
/*$(".menu-class-change .main-header .menu-categories .menu-categories-heading .close-menu").click(function(){
 $(".menu-class-change .main-header .menu-categories").removeClass("open"); 
  $(".menu-class-change .main-header .menu-categories #cssmenu").removeClass("open"); 
 $(".menu-class-change header").removeClass("zindex");
  $(".menu-class-change .overlaycss").removeClass("hidden");
});

$(".menu-class-change .main-header .menu-categories .menu-categories-heading .categories-menu").click(function(){

$(".menu-class-change .main-header .menu-categories #cssmenu").addClass("open"); 
 
$(".menu-class-change .overlaycss").removeClass("hidden");
$(".menu-class-change header").addClass("position-static");
});

$(".menu-class-change .overlaycss").click(function(){
 $(".menu-class-change .main-header .menu-categories #cssmenu").removeClass("open"); 
 $("header").removeClass("zindex");
  $(".overlaycss").addClass("hidden");
  $(".menu-class-change header").removeClass("position-static");
});

$("#closemenue").click(function(){
  $(".menu-categories").removeClass("open");
  $("header").removeClass("zindex");
  $("#cssmenu").removeClass("open"); 
  $(".overlaycss").addClass("hidden");
});*/
/*end here internal page header*/


(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 992) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 992) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$(document).ready(function() {
  $("#cssmenu").menumaker({
    title: "Menu",
    format: "multitoggle"
  });

  

var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

$("#cssmenu > ul > li").each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
    foundActive = true;
  }
});

if (foundActive === false) {
  activeElement = $("#cssmenu > ul > li").first();
}

defaultWidth = lineWidth = activeElement.width();

defaultPosition = linePosition = activeElement.position().left;

menuLine.css("width", lineWidth);
menuLine.css("left", linePosition);

$("#cssmenu > ul > li").hover(function() {
  activeElement = $(this);
  lineWidth = activeElement.width();
  linePosition = activeElement.position().left;
  menuLine.css("width", lineWidth);
  menuLine.css("left", linePosition);
}, 
function() {
  menuLine.css("left", defaultPosition);
  menuLine.css("width", defaultWidth);
});

});


});
})(jQuery);




const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});


