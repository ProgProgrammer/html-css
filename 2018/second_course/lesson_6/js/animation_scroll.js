var header_h2 = document.getElementById('header_h1');

var avatarSourceBottom = header_h2.getBoundingClientRect().top + window.pageYOffset;

var button2 = document.getElementById('button');

var header_padding2 = document.getElementById("header_padding");

var header_p2 = document.getElementById("header_p");

var header_arrow2 = document.getElementById("header_arrow");



window.onscroll = function() {

    if (window.pageYOffset > avatarSourceBottom) {
        button2.classList.remove('scroll_off');
        button2.classList.add('scroll');

        header_padding2.classList.remove('visible_off');
        header_padding2.classList.add('visible_on');

        header_h2.classList.remove('header_h1_on');
        header_h2.classList.add('header_h1_off');

        header_p2.classList.remove('header_p_on');
        header_p2.classList.add('header_p_off');

        header_arrow2.classList.remove('header_p_on');
        header_arrow2.classList.add('header_p_off');

    } else if (button2.classList.contains('scroll')) {
        button2.classList.remove('scroll');
        button2.classList.add('scroll_off');

        header_padding2.classList.remove('visible_on');
        header_padding2.classList.add('visible_off');

        header_h2.classList.remove('header_h1_off');
        header_h2.classList.add('header_h1_on');

        header_p2.classList.remove('header_p_off');
        header_p2.classList.add('header_p_on');

        header_arrow2.classList.remove('header_p_off');
        header_arrow2.classList.add('header_p_on');

    }
}