
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
        img = $(target.parentElement.children[0]).val();
        tags = $(target.parentElement.children[1]).val();
        countDiv = textarea.parentElement.parentElement.children[1];

		if(img == ''){
			var strimg = '';
		}else{
			var strimg = "<img src='"+ img +"' class='img-responsive img-rounded' style='margin-top: 8px; margin-bottom: 8px;'>";

		}

        
	if($(bigparent).hasClass("container")){

		//console.log("ppal")


		$.ajax({
			type: "POST",
			url:'php/post.php',
			data: { user: "1", postid: "-1", text: content, image: img, type: 1}
			}).done(function(e){

			//alert(t["id"][0]);

			t = jQuery.parseJSON(e);

			var a = tags.split(' ');
			for (var i = 0; i < a.length; i++) {

				var _tag = a[i].substr(1, a[i].length);

				$.ajax({
				type: "POST",
				url:'php/tags.php',
				data: { postid: t["id"][0], tag: _tag}
				}).done(function(e){})

			};

			// Clear text area

			$(textarea).val('');
			$(target.parentElement.children[0]).val('');
			$(target.parentElement.children[0]).fadeOut("slow");
			$(countDiv).fadeOut("slow");	

			//alert(t["id"][0]);
				var a = tags.split(' ');
				var tostr = [];
				for (var i = 0; i < a.length; i++) {
				var _tag = a[i].substr(1, a[i].length);
				tostr[i] = "<span class='label label-default'>" + "#" + _tag + "</span>";
				}

				var strtags = tostr.join('');

			$('#timeline').prepend("<article><aside><div class='avatar'>"
				+"<img src='" + avatar + "' class='img-circle img-responsive' alt='username'>"
				+"</div></aside><div class='well'><div class='post'>"
				+"<p class='username'>" + username + "</p>"
				+"<p>" + content + "</p>"
				+ strimg
				+"</div><div class='tags'>"
				+ strtags
				+ "</div>"
				+"<div id='vote'  class='" + t["id"][0] + "'>"
				+"<button type='button' class='btn btn-link vote'>"
            	+"0 likes</button><button type='button' class='btn btn-link vote'>"
             	+"0 fucks</button><button type='button' class='btn btn-link showreplies'>"
            	+"0 replies " + "<span class='glyphicon glyphicon-chevron-up'></span></button></div><!--WRITE REPLAYS--><form role='form'>"
            	+"<div class='form-group'><textarea id='" + t["id"][0] + "'class='form-control post' placeholder='Leave a comment or replay'></textarea></div>"
            	+"<div class='count' style='display: none;'>"
            	+"<input type='text' class='form-control url' placeholder='paste url' style='display:none;'>"
            	+"<div></div>"
            	+"<button type='button' class='btn btn-primary submitpost'></button>"
                +"<button type='button' class='btn btn-link imgurl pull-left'>"
                +"<span class='glyphicon glyphicon-camera'></span>"
                +"</button></div></form><div id='repliesContainer' style='display:none;'></div></div></article>");			
			
			// Update variables

		$.getScript("js/input.js")
		//$.getScript("js/vote.js")
		$.getScript("js/post_2.js");

		
		//$.getScript("js/replies.js")
		


			//console.log("done");
			
		})

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
			$.getScript("js/replies.js")
			$.getScript("js/vote.js")

            toggleReplies(true);

			//console.log("done");
			
		})
	}
	
})