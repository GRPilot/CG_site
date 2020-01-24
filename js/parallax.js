$(document).mousemove(
    function(e) {
        var x = (e.pageX * -1 / 100);
        $('.wrap').css('transform', 'rotateY(' + x + 'deg)');
    }
);