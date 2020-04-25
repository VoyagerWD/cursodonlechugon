$(document).ready(function(){
	
	$('.parallax').parallax();

 	$('.cartaProductos').mouseenter(
       function(){ $(this).removeClass('fadeInUp').addClass('pulse')}
       );

	$('.cartaProductos').click(
	       function(){ $(this).removeClass('pulse')}
	       );

	$('.cartaProductos').mouseleave(
	       function(){ $(this).removeClass('pulse')}
	       );

	$('#loguearse').click(
			function(){
				$('#login-page').toggleClass('hide');
			});
	$('.login-page').click(
			function(){
				$('#login-page').toggleClass('hide');
			});

	$('select').formSelect();



	
});


