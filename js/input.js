
 // CHECK http://jstarrdewar.com/blog/2012/02/04/input-box-tips-part-1/

     textareas = $('textarea')
     $count = $('.count')
     button = $('.button')
     limit = 140;
    
    $(textareas).focus(function(e){
        //console.log(e)
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

    /*$(textareas).keyup(function(e){
        target = e.currentTarget;
        temp = e.currentTarget.parentElement.parentElement.children[1];
        postags = target.parentElement.children[1];
        var tags;
        var t = $(target).val();
        var t1 = t.split(' ');
        var t2;
        for (var i = t1.length - 1; i >= 0; i--) {
            if(t1[i].indexOf('#') > -1)
            {
                $(t2).append(t1[i]);
                console.log(t2)
            }
        };
        //$(postags).html($(t2).replace(/#([^ ]*)/g,'<span class="label label-default">' +'#'+'$1</span>'));
    })*/

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

        //taglist = $(target).val().replace(/#([^ ]*)/g,'#<span class="label label-default">' +'#'+'$1</span>')



        displayLength(target, temp);

        });

    /*$(button).click(function(e){
        var temp = e.currentTarget.parentElement.parentElement.children[1];
       $(temp).fadeOut("slow")
    })*/
  

function displayLength(t, temp) {
    var temp2 = temp.children[2];
    if (t.value.length > limit) {
        $(temp2).text('Too long!');
    } else {
        $(temp2).html( '<span class="badge counter">' + (limit - t.value.length) + "</span> Submit");

    }
}





