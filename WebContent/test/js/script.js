(function ($, window, document, undefined)
{
	'use strict';
	
	$(function ()
	{
	    $("#mobileMenu").hide();
	    $(".toggleMobile").click(function()
	    {
	    	$(this).toggleClass("active");
	        $("#mobileMenu").slideToggle(500);
	    });
	    
	    $('#mobileMenu ul li a').click(function()
	    {
	    	hideMobileMenu();
	    });
	});
	
	$(window).on("resize", function()
	{
		if($(this).width() > 500)
		{
			hideMobileMenu();
		}
	});
})(jQuery, window, document);



function hideMobileMenu() {
	$('#mobileMenu').hide();
	$(".toggleMobile").removeClass("active");
}