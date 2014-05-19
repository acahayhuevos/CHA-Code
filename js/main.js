
$(document).ready(function(){


// LOAD POSTS, REPLAYS, ETC FROM DATABASE

/*$.ajax({
	url:'php/loadcha.php',
	success: function(e){

	console.log("done");
	t = jQuery.parseJSON(e);

	for (var i = 0; i < t["result"].length - 1; i++) {
		
		var id = t["result"][i].id;
		var userid = t["result"][i].userid;
		var content = t["result"][i].content;
		var likes = t["result"][i].likes;
		var fucks = t["result"][i].fucks;

		//console.log(id + content);


	};
	

	}

})*/


	$count = $('.count')
	urlinput = $('.url');
	tag = $('.tag');

	$count.hide();
	$(urlinput).hide();
	$(tag).hide();

    $.getScript("js/input.js")

})

$.getScript("js/post.js")

//https://github.com/blueimp/jQuery-File-Upload/wiki/Basic-plugin

// TAG BTN

	tagBtn = $('.tagbtn');

	$(tagBtn).click(function(e){

		target = e.currentTarget;
		parent = target.parentElement;
		input = parent.children[1];

		$(parent.children[0]).hide("slow");
		$(input).fadeIn("slow");

	})

// IMAGE URL BTN

	imgBtn = $('.imgurl');

	$(imgBtn).click(function(e){
		target = e.currentTarget;
		parent = target.parentElement;
		input = parent.children[0];

		$(parent.children[1]).hide("slow");
		$(input).fadeIn("slow");


	})

function toggleVisibility(visibility, type, value ){
	
}

function toggleReplies(visibility){
	replies = $('.replies');
		for(var i = 0; i < replies.length; i++){
			id = $(replies[i].parentElement.children[2]).attr("class");
				if(id == post_id)
				{
					if(visibility == true){
						$(replies[i]).fadeIn("slow");}
					else{
						$(replies[i]).fadeOut("slow");
					}
				}
			}
		}

function sendVote(post_id, _value){
	$.ajax({
		type: "POST",
		url:'php/post.php',
		data: {user: "1", postid: post_id, text: "", image: "", type: _value}
		}).done(function(e){

			console.log("sent");
			
		})
}

// VOTE BUTTONS

voteBtn = $(".vote");

$(voteBtn).one("click", function(e){

	target = e.currentTarget;
	post_id = $(target.parentElement).attr("class");
	parent = target.parentElement.parentElement;
		
	//------ likes & fucks Btn

	temp1 = $(target).html();
	temp2 = temp1.split(' ');
	temp3 = parseInt(temp2[0])


		if ( temp2[1] == 'likes') {
			$(target).html(temp3 + 1 + " likes");
			
			if ($(parent.parentElement).attr("class") == "replies well") {
				sendVote(post_id, 5);
			}else{
				sendVote(post_id, 3);
			}

		} else {

			$(target).html(temp3 + 1 + " fucks");

			if ($(parent.parentElement).attr("class") == "replies well") {
				sendVote(post_id, 6);
			}else{
				sendVote(post_id, 4);
			}
		}
})

// REPLIES BTN

repliesBtn = $(".showreplies");

$(repliesBtn).click(function(e){
	
	//console.log(e)

	target = e.currentTarget;
	post_id = $(target.parentElement).attr("class");
	parent = target.parentElement.parentElement;


	//------ Replies Btn

	if ($(target.children[0]).hasClass('glyphicon glyphicon-chevron-up')) {

		$(target.children[0]).toggleClass('glyphicon glyphicon-chevron-up', false)
		$(target.children[0]).toggleClass('glyphicon glyphicon-chevron-down', true)

		toggleReplies(true);

	//--trash 1

	} else{

		$(target.children[0]).toggleClass('glyphicon glyphicon-chevron-down', false)
		$(target.children[0]).toggleClass('glyphicon glyphicon-chevron-up', true)

		toggleReplies(false);	

	}
	

})


/* 1 ------ $.ajax({
	type: "POST",
	url:'php/get.php',
	data: {postid : post_id},
	success: function(e){

		//console.log(e);
		t = jQuery.parseJSON(e);

		for(var i = 0; i < t["result"].length - 1; i++){

			$(parent).append("<div class='reply well' style='display: none;'><aside><div class='avatar2'>"
            + "<img src='" + t["result"][i].avatar + "' class='img-circle img-responsive' alt='username'></div></aside><div class='content'>"
            + "<p class='username'>" + t["result"][i].nickname + "</p>"
            + "<p>" + t["result"][i].content + "</p><div id='vote'><button type='submit' class='btn btn-link vote'>"
            + t["result"][i].likes + " likes" + "</button><button type='submit' class='btn btn-link vote'>"
            + t["result"][i].fucks + " fucks" + "</button></button></div></div></div>");

			}
	
		replies = $('.reply');
		for(var i = 0; i < replies.length; i++){
			id = $(replies[1].parentElement.children[2]).attr("class");
			if(id == post_id)
			{
				$(replies[i]).fadeIn("slow");
			}
		}

	} 
	})*/











