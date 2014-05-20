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