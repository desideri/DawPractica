$(function(){
        $('a.smoothScroll').smoothScroll({
          offset: -80,		  
		  scrollTarget: $(this).val()
	   });
       
       // Waypoints
       $('.texto').waypoint(  
        function(direction) {
        if (direction ==='down') {            
            var wayID = $(this).attr('id');            
        } else {
            var previous = $(this).prev();
            var wayID = $(previous).attr('id');                    
        }
            $('.current').removeClass('current');
            $('#menu a[href=#'+wayID+']').addClass('current');
        }, { offset: '40%' });
       
       
       
       /// StickNav  
       var stickyNavTop = $('.nav').offset().top;  
       var stickyNav = function(){  
       var scrollTop = $(window).scrollTop();  
       
        if (scrollTop > stickyNavTop) {   
           $('.nav').addClass('isStuck');  
        } else {  
          $('.nav').removeClass('isStuck');   
        }  
    }; 

	
    stickyNav(); 
       $(window).scroll(function() {
            stickyNav();  
        });  
    });
    


function cambiarSeleccionado(evt){
    var menu, items;
    li = this;
    menu = document.getElementById("menu");
    items = menu.getElementsByTagName("li");
    for (i = 0; i < items.length; i++) {
        if(items[i].hasAttribute("class"))
            items[i].removeAttribute("class");
		
    }
    li.setAttribute("class", "seleccionado");
}

function registrarEventos(){
    var menu, items;
    menu = document.getElementById("menu");
    items = menu.getElementsByTagName("li");
    for(i=0;i<items.length;i++){
        items[i].addEventListener("click", cambiarSeleccionado, false);
    }
}

window.addEventListener("load", registrarEventos, false);