

input = $('#input');
$(input).focus(function(e){
	$('#extrainput').fadeIn('slow');
})

signinbtn = $('#signinbtn');

$(signinbtn).click(function(e){
	target = e.currentTarget;
	parent = target.parentElement;
	_email = $(parent.children[3]).val();
	_password = $(parent.children[4]).val();

	$.ajax({
		type: "POST",
		url:'php/authentication.php',
		data: { email: _email, password: _password, type: 0}
		}).done(function(e){
			//alert(t["id"][0]);
			t = jQuery.parseJSON(e);



	})
})
