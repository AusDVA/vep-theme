jQuery(document).ready(function($){
	 
	// Mobile menu animation
	$( "#mobile-button" ).click(function() {
		$("#glyphicon").toggleClass( "rotate rotate-down" );
	});
 
	// Read more / less homepage
	$("#readMore").on("click", function () {
        var txt = $(".about").is(':visible') ? 'Read More' : 'Read Less';
        $("#readMore").text(txt);
		$(".about").toggleClass( "hidden" );		
    });
	
	 // Read more / less first news article
	$("#readMoreNews").on("click", function () {
        var txt = $(".news1").is(':visible') ? 'Read More' : 'Read Less';
        $("#readMoreNews").text(txt);
		$(".news1").toggleClass( "hidden" );		
    });
	
	// Read more / less second news article
	$("#readMoreNews2").on("click", function () {
        var txt = $(".news2").is(':visible') ? 'Read More' : 'Read Less';
        $("#readMoreNews2").text(txt);
		$(".news2").toggleClass( "hidden" );		
    });
	
	// Focus main content after selecting skip link
	$("#skip").on("click", function () {
		$( "#content" ).focus();
	});
	
});


