$(document).ready((function(){if($(".slider-sl").length>0)tns({container:".slider-sl",mode:"gallery",speed:1200,mouseDrag:!0,nav:!1,controlsContainer:".slider-control-homeslide"});if($(".horz-sl").length>0)tns({container:".horz-sl",mode:"gallery",speed:1200,mouseDrag:!0,nav:!1,controlsContainer:".slider-control-horiz"});if($(".stories__slide").length>0)tns({container:".stories__slide",items:4,nav:!1,loop:!1,controlsContainer:".slider-control-stories",gutter:40});if($(".video-sl").length>0)tns({container:".video-sl",items:2,nav:!1,loop:!1,controlsContainer:".slider-control-video",gutter:40});$(".hamb").on("click",(function(){$(".menu-hide").addClass("open")})),$(".close-menu").on("click",(function(){$(".menu-hide").removeClass("open")}))}));var lastScrollTop=0,altura=$(window).height();function isVisible(e){var o=$(window).scrollTop(),t=o+$(window).height(),n=e.offset().top;return n+e.height()+40<=t&&n>=o}$(window).scroll((function(){var e=$(window).scrollTop();e<lastScrollTop&&($(".menu-footer").length>0&&$(".menu-footer").hasClass("less")&&e<1e3&&$(".menu-footer").removeClass("less"),e<=altura&&$(".menu-home").removeClass("active")),e>lastScrollTop&&($(".menu-footer").length>0&&isVisible($(".menu-footer"))&&e>1e3&&$(".menu-footer").addClass("less"),e>=altura-150&&$(".menu-home").addClass("active")),lastScrollTop=e})),function(){for(var e=document.querySelectorAll(".youtube"),o=0;o<e.length;o++){var t="https://img.youtube.com/vi/"+e[o].dataset.embed+"/sddefault.jpg",n=new Image;n.src=t,n.addEventListener("load",void e[o].appendChild(n)),e[o].addEventListener("click",(function(){var e=document.createElement("iframe");e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen",""),e.setAttribute("src","https://www.youtube.com/embed/"+this.dataset.embed+"?rel=0&showinfo=0&autoplay=1"),this.innerHTML="",this.appendChild(e)}))}}();