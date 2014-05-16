
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

	$count.hide();
    $('input[type=file]').bootstrapFileInput();
    $('.file-inputs').bootstrapFileInput();

})

	$.getScript("js/input.js")

//https://github.com/blueimp/jQuery-File-Upload/wiki/Basic-plugin

// FILE UPLOAD

$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo(document.body);
            });
        }
    });
});







