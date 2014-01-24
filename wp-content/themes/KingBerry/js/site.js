
	jQuery(document).ready(function($) {

		// Your JavaScript goes here

		$(document).foundation({
		  orbit: {
		    animation: 'fade',
		    timer_speed: 5000,
		    pause_on_hover: false,
		    animation_speed: 800,
		    navigation_arrows: false,
		    bullets: true,
		    slide_number: false
		  }
		});

	});

// SCRIPT PARA MENU
$(document).ready(function(){
	$(".menu-item-has-children > a").click(
		function(e){
		    e.preventDefault();
		    e.stopPropagation();
		    $(this).parent(".menu-item-has-children").siblings(".sm-displayed").children(".sub-menu.displayed").slideToggle();
		    //a partir del link que se quiere desplegar, busque a los hermanos del padre que tienen hijos "submenu" desplegado, y plieguelos.
		    $(this).parent(".menu-item-has-children").siblings(".sm-displayed").children(".sub-menu.displayed").toggleClass("displayed");
		    //a partir del link que se quiere desplegar, busque a los hermanos del padre que tienen hijos "submenu" desplegado, y borre "displayed"
		    $(this).parent(".menu-item-has-children").siblings(".sm-displayed").toggleClass("sm-displayed");
		    //a partir del link que se quiere desplegar, busque a los hermanos del padre con clase "sm-displayed" y borrela.

		    $(this).siblings(".sub-menu").slideToggle();
		    //a partir del link que se quiere desplegar, busque a su hermano "sub-menu" y desplieguelo
		    $(this).siblings(".sub-menu").toggleClass("displayed").parent("li").toggleClass("sm-displayed");
		    //a partir del link desplegado busque a su hermano y cambie su clase a "displayed"; busque además a su padre y cambie su clase a "sm-displayed"

		});

	$("body").click(
		function(){
			$(".sub-menu.displayed").slideToggle();
			//Busque a todos las lista "sub-menu" desplegadas, y plieguelas.
			$(".sub-menu.displayed").toggleClass("displayed").parent("li").toggleClass("sm-displayed");
			//Busque a todos las lista "sub-menu" desplegadas, y borre su clase "displayed"; y borre la clase "sm-displayed" de su padre.
		});
});
