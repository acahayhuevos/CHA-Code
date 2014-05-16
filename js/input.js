
 // CHECK http://jstarrdewar.com/blog/2012/02/04/input-box-tips-part-1/

$(document).ready(function(){

    $count.hide();
    $('input[type=file]').bootstrapFileInput();
    $('.file-inputs').bootstrapFileInput();

})

 textareas = $('textarea')
 $count = $('.count')
 button = $('.button')
 limit = 140;

    
    $(textareas).focus(function(e){
        temp = e.currentTarget.parentElement.parentElement.children[1];
        target = e.currentTarget;

        $(temp).fadeIn("slow");
        displayLength(target, temp);
        $(e.currentTarget).focusout(function(){$(temp).fadeOut("slow");})
    })

    $(textareas).on('paste', function(e) {
        temp = e.currentTarget.parentElement.parentElement.children[1];
        target = e.currentTarget;
        setTimeout(function() {
            if (target.value.length > limit) {
                target.value = target.value.substr(0, limit);
                displayLength(target, temp);
            }
        }, 600);
    });


    $(textareas).keydown(function(e) {
        temp = e.currentTarget.parentElement.parentElement.children[1];
        target = e.currentTarget;
        switch (e.keyCode) {
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
                e.preventDefault();
            }
        }

        displayLength(target, temp);


        });

    $(button).click(function(e){
        var temp = e.currentTarget.parentElement.parentElement.children[1];
        $(temp).fadeOut("slow")
    })
  

function displayLength(t, temp) {
    var temp2 = temp.children[0];
    if (t.value.length > limit) {
        $(temp2).text('Too long!');
    } else {
        $(temp2).html( '<span class="badge counter">' + (limit - t.value.length) + "</span> Submit");

    }
}





