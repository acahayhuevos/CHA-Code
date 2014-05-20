
$(document).ready(function(){

	$('#timeline').scrollPagination({

		nop     : 5, // The number of posts per scroll to be loaded
		offset  : 0, // Initial offset, begins at 0 in this case
		error   : 'No More Posts!', // When the user reaches the end this is the message that is
		                            // displayed. You can change this if you want.
		delay   : 1000, // When you scroll down the posts will load after a delayed amount of time.
		               // This is mainly for usability concerns. You can alter this as you see fit
		scroll  : true // The main bit, if set to false posts will not load as the user scrolls. 
		               // but will still load if the user clicks.
		
	});

	$count = $('.count')
	urlinput = $('.url');
	tag = $('.tag');

	$count.hide();
	$(urlinput).hide();
	$(tag).hide();

})

function refreshjs()
{
	$.getScript("js/input.js")
	$.getScript("js/post.js")
	$.getScript("js/post_2.js")
	$.getScript("js/replies.js")
	$.getScript("js/vote.js")

}











