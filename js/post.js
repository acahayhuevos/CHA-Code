
	submitPost = $('.submitpost')
	username = "PussyCat";
	avatar = "images/u1.jpg"

	$(submitPost).click(function(e){
		//console.log(e)
        target = e.currentTarget;
        form = e.currentTarget.parentElement.parentElement;
        textarea = form.children[0].children[0];
        content = $(textarea).val();
        bigparent = form.parentElement;
        post_id = $(textarea).attr('id');

	if($(bigparent).hasClass("container")){

		//console.log("ppal")

		$.ajax({
			type: "POST",
			url:'php/post.php',
			data: { user: "1", postid: "-1", text: content, type: 1}
			}).done(function(e){

			// Clear text area

			$(textarea).val('');

			// Prepend new post

			$('#timeline').prepend("<article><aside><div class='avatar'><img src='" + avatar + "' class='img-circle img-responsive' alt='username'></div></aside><div class='well'><div class='post'>"
				+"<p class='username'>" + username + "</p>"
				+"<p>" + content + "</p>"
				+"</div><p>#pickup #shypeople #ifyouknowhatimean</p><div id='vote'><button type='button' class='btn btn-link vote'>"
            	+"0 likes</button><button type='button' class='btn btn-link vote'>"
             	+"0 fucks</button><button type='button' class='btn btn-link vote'>"
            	+"0 replies " + "<span class='glyphicon glyphicon-chevron-up'></span></button></div><!--WRITE REPLAYS--><form role='form'>"
            	+"<div class='form-group'><textarea class='form-control post' placeholder='Leave a comment or replay...'></textarea></div><div class='count' ><button type='button' class='btn btn-primary submitpost'></button><input id='fileupload' title='Add File' class='btn-default' type='file' name='files[]' data-filename-placement='inside' data-url='server/php/' multiple></div></form></div></article>");			
			// Update variables

			$.getScript("js/input.js")
			$('input[type=file]').bootstrapFileInput();
	    	$('.file-inputs').bootstrapFileInput();

			//console.log("done");
			
		})
	} else {

		//console.log("post")

		$.ajax({
			type: "POST",
			url:'php/post.php',
			data: { user: "1", postid: post_id, text: content, type: 2}
			}).done(function(e){

			// Clear text area

			$(textarea).val('');

			toggleReplies(true);

			$(bigparent).append("<div class='reply well';'><aside><div class='avatar2'>"
            + "<img src='" + avatar + "' class='img-circle img-responsive' alt='username'></div></aside><div class='content'>"
            + "<p class='username'>" + username + "</p>"
            + "<p>" + content + "</p><div id='vote'><button type='submit' class='btn btn-link vote'>"
            + "0" + " likes" + "</button><button type='submit' class='btn btn-link vote'>"
            + "0" + " fucks" + "</button></button></div></div></div>");

			//console.log("done");
			
		})
	}

	
	})