$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 100) {
            $(".header").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").removeClass("active");
        }
    });
});

/*============ * Smooth Scrolling ========== */

	jQuery('a[href*=\\#]').on('click', function(event){     
		event.preventDefault();
		jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top  -70}, 500);
	});
	// ===== Scroll to Top ==== 
	jQuery(window).scroll(function() {
		if ($(this).scrollTop() >= 250) {        // If page is scrolled more than 50px
			jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
		} else {
			jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
		}
	});	

/*============ * fx ========== */

jQuery(document).ready(function(){
	AOS.init({
		easing: 'ease-in-out-sine',
		once: 'false'
	});	
});

jQuery( '.menu-icon' ).click(function() {
  jQuery( '.menu' ).toggleClass( 'active-mm' );
});
