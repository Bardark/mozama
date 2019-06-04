$(function() {
    $('a.page-scroll').bind('click', function(event) {  /*utiliza la clase page-scroll desde ek menu, jquery y jquery.easing.min.js*/
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
/*--------------------------*/
var liCount = $(".slidingDiv").size();
	var liActive = parseInt(liCount/2) + 1;
	$(".recipes .container > div.slidingDiv:nth-of-type("+liActive+")").css("display","block");

	activeid="#"+$(".serviciosRecipe li.active").data('div');
	$(".slidingDiv-wrapper").find(activeid).show();

	$(".serviciosRecipe li").on("mouseenter",function(){
		$(this).siblings().removeClass("active");
		$(this).addClass("active");

			container = $(".slidingDiv-wrapper");
			child = ".slidingDiv";
			$this = $(this),
			id = $this.data("div"),
			id = "#"+id;
			console.log(id);
			container.children(child).hide();
			container.children(id).show();

	});

  $(document).ready(function() {

    if ((screen.width>=1024) && (screen.height>=700)) { //para altura en cuadros well de pantallas grandes se muestran de la misma altura

      $("link[rel=stylesheet]:last").attr({href : "css/pantallaMayor800.css"});
    }
  });
