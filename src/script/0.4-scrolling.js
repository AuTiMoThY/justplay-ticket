/**
 * ---------------------------------------------------------------------------------
 * >> .scrolling()
 */

scrolling() {
    const _ = this;
    if($(window).scrollTop() >= 100) {
        $("body").addClass('js-scrolling');
    }
    $(window).scroll(function(event) {
        // console.log($(this).scrollTop());
        if ($(this).scrollTop() >= 100) {
            $("body").addClass('js-scrolling');
        }else {
            $("body").removeClass('js-scrolling');
        }
    });

},