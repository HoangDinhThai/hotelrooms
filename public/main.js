$(function() {
    $('a[href*=\\#]:not([href=\\#])').click(function(event) {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html,body').animate({
            scrollTop: target.offset().top
            }, 700, function(){
            target.attr('tabindex', '-1');
            target.focus();
            });
        // location.hash = target;
        return false;
        }
        }
    });
    });