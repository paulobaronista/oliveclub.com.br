$(document).on('ready', function () {
    $(".glr-home").slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 20000,
    });

    $(".glr-receitas").slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 20000,
    });

    $(".galeria-01").slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 8000,
    });
});

$(document).ready(function () {
    $('#modalPascoa').modal();
});

$(document).ready(function () {
    $('#cookies').show();
    if (window.localStorage.getItem('accept_cookies')) {
        $('#cookies').hide();
        return false;
    }
    $(".btn_cookie").click(function () {
        window.localStorage.setItem('accept_cookies', true);
        $('#cookies').hide();
        return false;
    });
});

// Script Scroll OnPage
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        $(".menu").addClass('active');
        var scroll_pos = 0;
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();
            if (scroll_pos > 100) {
                $(".menu").addClass('active');
            } else {
                $(".menu").removeClass('active');
            }
        });

        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({ scrollTop: $target.offset().top - 35 }, 500, 'swing', function () {
            // window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 100) {
            $(".menu").addClass('active');
        } else {
            $(".menu").removeClass('active');
        }
    });
});

$(document).on('ready', function () {
    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
    });
});

$(document).ready(function () {
    $("#close").click(function () {
        $("#aviso").hide();
        window.location.href = "https://azeitebatalha.com.br/"
    });
});

$(function () {
    $('.nome').clear();
    $('.email').clear();
    $('.telefone').clear();
    $('.assunto1').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function () {
        var n, e, t, a, m;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.telefone').val();
        a = $('.assunto1').val();
        m = $('.msg').val();

        if (n !== '' && e !== '' & t !== '' && a !== '' && m !== '') {
            setTimeout(function() { 
                $(".btn_enviar").attr('disabled', 'disabled');
            }, 1000);
        }
    });
});