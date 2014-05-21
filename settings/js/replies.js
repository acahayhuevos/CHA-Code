// REPLIES BTN

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

repliesBtn = $(".showreplies");

$(repliesBtn).click(function(e){
    
    //console.log(e)

    target = e.currentTarget;
    post_id = $(target.parentElement).attr("class");
    parent = target.parentElement.parentElement;
    repliesContainer = target.parentElement.parentElement.children[4];
    $loadmessage = '<img alt="Dancing Banana" src="http://www.sherv.net/cm/emo/funny/2/banana-riding-llama-smiley-emoticon.gif">';
    $(parent).append('<div class="loading-replies">' + $loadmessage + '</div>');



    //------ Replies Btn

    if ($(target.children[0]).hasClass('glyphicon glyphicon-chevron-up')) {

        $(target.children[0]).toggleClass('glyphicon glyphicon-chevron-up', false)
        $(target.children[0]).toggleClass('glyphicon glyphicon-chevron-down', true)

        $.ajax({
        type: "POST",
        url:'php/get.php',
        data: {postid : post_id},
        success: function(e){

            //console.log(e);
            t = jQuery.parseJSON(e);

            data = [];

            for(var i = 0; i < t["result"].length - 1; i++){

                if(t["result"][i].img == ''){
                    var strimg = '';
                }else{
                    var strimg = "<img src='"+ t["result"][i].img +"' class='img-responsive img-rounded' style='margin-top: 8px; margin-bottom: 8px;'>";

                }

                data[i] = "<div class='replies well'><aside><div class='avatar2'>"
                + "<img src='" + t["result"][i].avatar + "' class='img-circle img-responsive' alt='username'></div></aside><div class='content'>"
                + "<p class='username'>" + t["result"][i].nickname + "</p>"
                + "<p>" + t["result"][i].content + "</p>"
                + strimg
                +"<div id='vote' class='" + t["result"][i].id + "'><button type='submit' class='btn btn-link vote'>"
                + t["result"][i].likes + " likes" + "</button><button type='submit' class='btn btn-link vote'>"
                + t["result"][i].fucks + " fucks" + "</button></button></div></div></div>"; 

                }
                data1 = data.join(' ');
                $(repliesContainer).html(data1);
                $.getScript("js/vote.js")
                $(repliesContainer).fadeIn("slow");
                $('.loading-replies').remove();

        } 
        });


    //--trash 1

    } else{

        $(target.children[0]).toggleClass('glyphicon glyphicon-chevron-down', false)
        $(target.children[0]).toggleClass('glyphicon glyphicon-chevron-up', true)

        $(repliesContainer).fadeOut("slow");
        $(repliesContainer).html('');
        $('.loading-replies').remove();


    }
    

})