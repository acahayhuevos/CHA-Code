
	$.ajax({
	  type: "POST",
	  url: "php/session.php",
	  data: { type: "1" }
	})
	  .done(function( e ) {
	    	//alert( "Data Saved: " + e );
			t = jQuery.parseJSON(e);
			username = t["result"][0].username;
			userid = t["result"][0].userid;
			avatar = t["result"][0].avatar;
	  });

	 submitPost = $('.submitpost')

	$(submitPost).click(function(e){
		//console.log(e)
        target = e.currentTarget;
        form = e.currentTarget.parentElement.parentElement;
        textarea = form.children[0].children[0];
        content = $(textarea).val();
        bigparent = form.parentElement;
        img = $(target.parentElement.children[0]).val();
        tags = $(target.parentElement.children[1]).val();
        countDiv = textarea.parentElement.parentElement.children[1];

		if(img == ''){
			var strimg = '';
		}else{
			var strimg = "<img src='"+ img +"' class='img-responsive img-rounded' style='margin-top: 8px; margin-bottom: 8px;'>";

		}
        
	if($(bigparent).hasClass("container")){


	} else {

		//console.log("post")

		post_id = $(textarea).attr('id');

		$.ajax({
			type: "POST",
			url:'php/post.php',
			data: { user: "1", postid: post_id, text: content, image: img, type: 2}
			}).done(function(e){

			// Clear text area

			t = jQuery.parseJSON(e);
			repliesBtn = target.parentElement.parentElement.parentElement.children[2].children[2];


			var temp1 = $(repliesBtn).html();
			var temp2 = temp1.split(' ');
			var temp3 = parseInt(temp2[0])

			$(repliesBtn).html(temp3 + 1 + " replies" + "<span class='glyphicon glyphicon-chevron-down'></span>");
        	
        	img = $(target.parentElement.children[0]).val();
			$(textarea).val('');
			$(target.parentElement.children[0]).val('');
			$(countDiv).fadeOut("slow");


			$(bigparent).append("<div class='replies well';'><aside><div class='avatar2'>"
            + "<img src='" + avatar + "' class='img-circle img-responsive' alt='username'></div></aside><div class='content'>"
            + "<p class='username'>" + username + "</p>"
            + "<p>" + content + "</p>"
            + strimg
            +"<div id='vote'class='" + t["id"][0] + "' ><button type='submit' class='btn btn-link vote'>"
            + "0" + " likes" + "</button><button type='submit' class='btn btn-link vote'>"
            + "0" + " fucks" + "</button></button></div></div></div>");

 			// Update variables

			//refreshjs();

			$.getScript("js/input.js")
			//$.getScript("js/replies.js")
			//$.getScript("js/vote.js")

            toggleReplies(true);

			//console.log("done");
			
		})
	}
	
})