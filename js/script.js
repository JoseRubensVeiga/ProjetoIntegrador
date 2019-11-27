$(function() { 
	setTimeout( () => { 
		$('.preloader').addClass('after-preloader'); 
		$('.preloader-loader').remove(); 
	}, 300); 
	setTimeout( () => { 
		$('.preloader').remove(); 
	}, 600); 
});