function parallax(){$(".parallax").length>0&&$(".parallax").each((function(e){var o=$(this).find("img").height();$(this).next().css("margin-top",o+60)}))}$(document).ready((function(){if(parallax(),$(".slider-sl").length>0)if($(window).width()>=768)tns({container:".slider-sl",mouseDrag:!0,nav:!1,controlsContainer:".slider-control-homeslide",items:1,mode:"gallery",speed:1200});else tns({container:".slider-sl",mouseDrag:!0,loop:!1,controlsContainer:".slider-control-homeslide",items:1.1,gutter:10,mode:"carousel",navPosition:"bottom"});if($(".horz-sl").length>0)tns({container:".horz-sl",mode:"gallery",speed:1200,mouseDrag:!0,nav:!1,controlsContainer:".slider-control-horiz"});if($(".stories__slide").length>0)tns({container:".stories__slide",items:4,loop:!1,controlsContainer:".slider-control-stories",navPosition:"bottom",responsive:{350:{items:1,nav:!0},500:{items:4,nav:!1,gutter:40}}});if($(".video-sl").length>0)tns({container:".video-sl",loop:!1,controlsContainer:".slider-control-video",navPosition:"bottom",responsive:{350:{items:1,nav:!0},500:{items:2,gutter:40,nav:!1}}});if($(".pod-outros-sl").length>0)tns({container:".pod-outros-sl",items:4,nav:!1,loop:!1,controlsContainer:".slider-control-pod",gutter:40});if($(".entrevista__posts").length>0&&$(window).width()<=768)tns({container:".entrevista__posts",items:1,nav:!0,navPosition:"bottom",loop:!1,controlsContainer:".slider-control-entrevista",gutter:10,autoHeight:!0});$(".marco-galeria").length>0&&document.querySelectorAll(".marco-galeria").forEach((e=>{const o=e.querySelector(".galeria-sl"),t=e.querySelector(".slider-control-galeria");tns({container:o,mode:"gallery",loop:!1,mouseDrag:!0,nav:!1,controlsContainer:t})})),$(".hamb").on("click",(function(){$(".menu-hide").addClass("open")})),$(".close-menu").on("click",(function(){$(".menu-hide").removeClass("open")})),$(".open-formato").on("click",(function(){$(".abre-formato").slideToggle(),$(this).toggleClass("open")})),$(".sl").on("click",(function(){$(this).find("img").toggleClass("plus")})),$('strong:contains("<+>")').css("color","#1E69FA");let e=gsap.utils.toArray(".panel");e.map((e=>ScrollTrigger.create({trigger:e,start:"top top"})));e.forEach(((e,o)=>{ScrollTrigger.create({trigger:e,start:()=>e.offsetHeight<window.innerHeight?"top top":"bottom bottom",pin:!0,pinSpacing:!1,onLeave:()=>{}})})),$(window).resize((function(){parallax()}));const o=document.getElementsByClassName("img-parallax");new simpleParallax(o,{delay:.6,transition:"cubic-bezier(0,0,0,1)"})}));var lastScrollTop=0,altura=$(window).height();$(window).scroll((function(){var e=$(window).scrollTop();e<lastScrollTop&&($(".menu-footer-home").length>0&&$(".menu-footer-home").hasClass("less")&&e<500&&(console.log("1"),$(".menu-footer-home").removeClass("less")),e<=altura&&($(".menu-home").hasClass("active")&&$(".menu-home").removeClass("active"),$(".menu-especial").hasClass("esconde")||$(".menu-especial").addClass("esconde")),isVisible($(".marco-footer"),-700)&&$(".menu-footer-home").hasClass("hiden")&&$(".menu-footer-home").removeClass("hiden"),e>altura&&($(".menu-home").hasClass("active")||$(".menu-home").addClass("active")),0==$(".menu-home").length&&e>altura&&$(".menu-default").hasClass("esconde")&&$(".menu-default").removeClass("esconde")),e>lastScrollTop&&($(".menu-footer-home").length>0&&isVisible($(".menu-footer-home"),40)&&e>500&&!$(".menu-footer-home").hasClass("less")&&($(".menu-footer-home").addClass("less"),$(window).width()<=768&&setInterval(footerHome,3e3)),isVisible($(".marco-footer"),-700)&&!$(".menu-footer-home").hasClass("hiden")&&$(".menu-footer-home").addClass("hiden"),e>=altura-150&&($(".menu-home").hasClass("active")||$(".menu-home").addClass("active")),e>=2*altura&&$(".menu-home").length>0&&$(".menu-home").hasClass("active")&&$(".menu-home").removeClass("active"),e>=altura&&0==$(".menu-home").length&&($(".menu-default").hasClass("esconde")||$(".menu-default").addClass("esconde"))),lastScrollTop=e}));var count=0;function footerHome(){3===count&&(count=0),$(".m-fade").removeClass("activehome"),$(".m-fade").eq(count).addClass("activehome"),count++}function isVisible(e,o){var t=$(window).scrollTop(),s=t+$(window).height(),n=e.offset().top;return n+e.height()+o<=s&&n>=t}!function(){for(var e=document.querySelectorAll(".youtube"),o=0;o<e.length;o++){var t="https://img.youtube.com/vi/"+e[o].dataset.embed+"/maxresdefault.jpg",s=new Image;s.src=t,s.addEventListener("load",void e[o].appendChild(s)),e[o].addEventListener("click",(function(){var e=document.createElement("iframe");e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen",""),e.setAttribute("src","https://www.youtube.com/embed/"+this.dataset.embed+"?rel=0&showinfo=0&autoplay=1"),this.innerHTML="",this.appendChild(e)}))}}();