
/*slider text*/
$(document).ready(function(){
  $('.slider-photos').slick({
	dots: false,
	infinite: true,
	speed: 300,
	slidesToShow: 1,
	fade: true,
	adaptiveHeight: true
  });
});