
 // CHECK http://jstarrdewar.com/blog/2012/02/04/input-box-tips-part-1/

     textareas = $('textarea')
     $count = $('.count')
     button = $('.button')
     limit = 140;
    
    $(textareas).focus(function(e){
        console.log(e)
        target = e.currentTarget;
        temp = target.parentElement.parentElement.children[1];

        $(temp).fadeIn("slow");
        displayLength(target, temp);
        
        
    })


    $(textareas).focusout(function(e){
        
        target = e.currentTarget;
        temp = target.parentElement.parentElement.children[1];
        if ($(target).val() == ''){
             $(temp).fadeOut("slow");
        }
    })


    $(textareas).on('paste', function(e) {
        target = e.currentTarget;
        temp = target.parentElement.parentElement.children[1];
        setTimeout(function() {
            if (target.value.length > limit) {
                target.value = target.value.substr(0, limit);
                displayLength(target, temp);
            }
        }, 600);
    });

    $(textareas).keydown(function(e) {
        target = e.currentTarget;
        temp = target.parentElement.parentElement.children[1];

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

function displayLength(t, temp) {
    var temp2 = temp.children[2];
    if (t.value.length > limit) {
        $(temp2).text('Too long!');
    } else {
        $(temp2).html( '<span class="badge counter">' + (limit - t.value.length) + "</span> Submit");

    }
}

// TAG BTN

    tagBtn = $('.tagbtn');

    $(tagBtn).click(function(e){

        target = e.currentTarget;
        parent = target.parentElement;
        input = parent.children[1];

        $(parent.children[0]).hide("slow");
        $(input).fadeIn("slow");

    })

// IMAGE URL BTN

    imgBtn = $('.imgurl');

    $(imgBtn).click(function(e){
        target = e.currentTarget;
        parent = target.parentElement;
        input = parent.children[0];

        $(parent.children[1]).hide("slow");
        $(input).fadeIn("slow");


    })





