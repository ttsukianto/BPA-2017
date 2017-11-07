//function called by the header divs, scrolls to div
function scrollToDiv(data){
	var toScroll; //calling instance of var
	div_id = $(data).attr("id"); //id of the div

	//deciding what div to scroll to
	switch(div_id){
		case "discover":
			toScroll = "#section-discover";
		break;

		case "upload":
			toScroll = "#section-upload";
		break;

		case "about":
			toScroll = "#section-about";
		break;
	}

	//scrolls to the div
	$('html,body').animate({
   		scrollTop: $(toScroll).offset().top
	});

}
