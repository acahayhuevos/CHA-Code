

input = $('#input');
$(input).focus(function(e){
	$('#extrainput').fadeIn('slow');
})

signinbtn = $('#signinbtn');

$(signinbtn).click(function(e){
<<<<<<< HEAD

=======
>>>>>>> 1bc5e6e2ec1a8af704190632e9a9f0f10262eb81
	target = e.currentTarget;
	parent = target.parentElement;
	_email = $(parent.children[3]).val();
	_password = $(parent.children[4]).val();
<<<<<<< HEAD
	_username = $(parent.children[5].children[0]).val();
	_avatar = $(parent.children[5].children[1]).val();
=======
>>>>>>> 1bc5e6e2ec1a8af704190632e9a9f0f10262eb81

	$.ajax({
		type: "POST",
		url:'php/authentication.php',
<<<<<<< HEAD
		data: { email: _email, password: _password, username : _username, avatar: _avatar, type: 0}
		}).done(function(e){
			
 			t = jQuery.parseJSON(e);

 			if(t["result"][0] == 1){
 				window.location.replace("index.php")
 			}
 			else{

 				$('#msg0').html("Sorry, that username is already in use!");
 			}

	})
})

loginbtn = $('#loginbtn');

$(loginbtn).click(function(e){
	target = e.currentTarget;
	parent = target.parentElement;
	_email = $(parent.children[3]).val();
	_password = $(parent.children[4]).val();
	_username = $(parent.children[5].children[0]).val();
	_avatar = $(parent.children[5].children[1]).val();

	$.ajax({
			type: "POST",
			url:'php/authentication.php',
			data: { email: _email, password: _password, username : "", avatar: "", type: 1}
			}).done(function(e){
				
	 			t = jQuery.parseJSON(e);

	 			if(t["result"][0] == 1){
	 				window.location.replace("index.php")
	 			}
	 			else{
	 				$('#msg1').html("Sorry, wrong information!");
	 			}

		})
})
=======
		data: { email: _email, password: _password, type: 0}
		}).done(function(e){
			//alert(t["id"][0]);
			t = jQuery.parseJSON(e);



	})
})
>>>>>>> 1bc5e6e2ec1a8af704190632e9a9f0f10262eb81
