
 // CHECK http://jstarrdewar.com/blog/2012/02/04/input-box-tips-part-1/

$(document).ready(function(){

 //$count.hide();

})

 $textarea = $('textarea')[0]
 textareas = $('textarea')
 $counter = $('.counter')
 $count = $('.count')
 $button = $('.submitpost')
 limit = 140;


$($textarea).on('paste', function() {
    setTimeout(function() {
        if ($textarea.value.length > limit) {
            $textarea.value = $textarea.value.substr(0, limit);
            displayLength();
        }
    }, 600);
});



for (var i = 0; i < textareas.length; i++) {

    console.log("sd" + i)    
    $(textareas[i]).focus(function(){
        console.log("sd" + i)
    $($count[i]).fadeIn("slow");
    })

    $($button[i]).click(function(){
        $($count[i]).hide();
    })

    $(textareas[i]).focusout(function(){
        // CHECKAR SI TIENE ALGO ESCRITO
        $($count[i]).hide();
    })
    displayLength(i); 
    $(textareas[i]).keyup(displayLength(i));
    $(textareas[i]).keydown(function(event) {
    switch (event.keyCode) {
    case 8:
        // backspace
    case 46:
        // forward delete
    case 37:
        // left arrow
    case 38:
        // up arrow
    case 39:
        // right arrow
    case 40:
        // down arrow
    case 86:
        // v (as in ctrl-v or command-v)
        break;
    default:
        if (this.value.length == limit) {
            event.preventDefault();
        }
    }
});
};

function displayLength(t) {
    if (textareas[t].value.length > limit) {
        $($counter[t]).text("Too long!");
    } else {
        $($counter[t]).text(limit - textareas[t].value.length);

    }
}





