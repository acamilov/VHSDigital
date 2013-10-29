 $(document).ready(function() {
 	//Si el navegador maneja placeholder oculta los label
   if(Modernizr.input.placeholder){
        $('#formulario p').css('display', 'none');
    }
    // Validar formulario
    $("#formulario").validate();

    //Hover distribuidores
    $(".distribuidor a").hover(function(){
    	var hash = "#";
    	var atributo = $(this).parent().attr('id');
    	var producto = hash.concat(atributo).concat("Small");
    	$(producto).css("opacity", "1");
		$(producto).css("-webkit-transition", "opacity 1s");
        $(producto).css("-moz-transition", "opacity 1s");
        $(producto).css("-ms-transition", "opacity 1s");
        $(producto).css("-o-transition", "opacity 1s");
    },function(){
    	var hash = "#";
    	var atributo = $(this).parent().attr('id');
    	var producto = hash.concat(atributo).concat("Small");
    	$(producto).css("opacity", "0");
    })

    //Scroll
	$(".scroll").click(function(event){
		event.preventDefault();
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;
		$('html, body').animate({scrollTop:target_top}, 1500);
	});

    //Red Ball

    $("#balls").mousemove(function(e){
        $("#redBall").css("opacity", "1");
        var ajuste = ($("body").width()-960)/2;
        var prePosicion = (e.pageX-ajuste);
        var posicion = (e.pageX-ajuste-150) + "px 0";
        if(prePosicion >= 157 && prePosicion <= 786){
            $("#redBall").css("background-position", posicion);
        }else if(prePosicion < 157){
            $("#redBall").css("background-position", "7px 0");
        }else if(prePosicion > 786){
            $("#redBall").css("background-position", "635px 0");
        }
    });

    $("#balls").mouseleave(function(e){
        $("#redBall").css("opacity", "0");
    });

    if(jQuery.browser.mobile===true){
        $("#menuDatos").css("width", "525px");
    }
 });