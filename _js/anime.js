//menu fixo //

$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()> $('.marc').offset().top){
		$('.menu').addClass('menu-fixed');
		$('.n-logo').addClass('n-logo-v');
		$('.series').addClass('series-fixa');
		}else{
		 $('.menu').removeClass('menu-fixed');
         $('.n-logo').removeClass('n-logo-v');
         $('.series').removeClass('series-fixa');		 
		}
	});
});


//Paralax //

$(document).ready(function(){
	$('.background-1').each(function(){
		var $obj=$(this);
		$(window).scroll(function(){
var yPos = -($(window).scrollTop() / $obj.data('speed'));

var bgpos = '50% '+yPos + 'px';

$obj.css('background-position', bgpos);

	});
});
});

//Deslizar suavemente //

$(document).ready(function($) {
   $(".scroll").click(function(event){
	   event.preventDefault()
		   $("html,body").animate({scrollTop:$(this.hash).offset().top}, 1400);
		   });
});



// cabeçalho do artigo fixo //

$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()> $('.marc').offset().top){
		$('.img-article').addClass('cab-fixed');
		}else{
		 $('.img-article').removeClass('cab-fixed');
         		 
		}
	});
});


//Paralax  artigos //

$(document).ready(function(){
	$('.img-article ').each(function(){
		var $obj=$(this);
		$(window).scroll(function(){
var yPos = -($(window).scrollTop() / $obj.data('speed'));

var bgpos = '50% '+yPos + 'px';

$obj.css('background-position', bgpos);

	});
});
});


// nav fixa //


$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()> $('.marc-nav').offset().top){
		$('.navegar').addClass('nav-fixa');
		$('.corpo-artigo').addClass('corpo-artigo-posi');
		}else{
		 $('.navegar').removeClass('nav-fixa');
		 $('.corpo-artigo').removeClass('corpo-artigo-posi');
         		 
		}
	});
});


// função de click para tralers na primeira pagina //

$(document).ready(function(){
    $(".bt-video").click(function(){
        $("#trailer").toggle();
		
    });
});

$(document).ready(function(){
    $(".bt-video-1").click(function(){
        $("#trailer").toggle();
       
    });
});




// função || //

$(document).ready(function(){
    $(".bt-video-2").click(function(){
        $("#slide-3").toggle();
		
    });
});

$(document).ready(function(){
    $(".bt-slide-3").click(function(){
        $("#slide-3").toggle();
       
    });
});


// fixar anuncios laterias do artigo //

$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()> $('.marc-nav').offset().top){
		$('.an-lat-dir-art').addClass('an-lat-fixed');
		}else{
		 $('.an-lat-dir-art').removeClass('an-lat-fixed'); 			 
		}
	});
});


// desafixar anuncio //

$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()> $('.new-marc').offset().top){
		 $('.an-lat-dir-art').addClass('anum-d-absolute'); 
		$('.anum-d-absolute').removeClass('an-lat-fixed');
		$('.anum-d-absolute').removeClass('an-lat-dir-art'); 
         }else{
		 $('.anum-d-absolute').addClass('an-lat-dir-art');
         $('.an-lat-dir-art').removeClass('anum-d-absolute');		 
		}		
     		
		
	});
	});
	
	
	$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()> $('.new-marc').offset().top){
		$('.nav-fixa').addClass('nav-absolute-1');
		$('.nav-absolute-1').removeClass('nav-fixa');
		$('.nav-absolute-1').removeClass('navegar');
	
		}else{
		 
		 $('.nav-absolute-1').addClass('navegar');
         $('.navegar').removeClass('nav-absolute-1');
         		 
		}
	});
});



//aparecer conteúdos //

$(document).ready(function(){
    $(".barra-ver-mais").click(function(){
        $('.aparecer').fadeIn(3000);
      
    });
});

// slide //


  $(document).ready(function(){
    $(".slide-menu").click(function(){
        $(".dropdown-menu").slideToggle("slow");
    });
});
