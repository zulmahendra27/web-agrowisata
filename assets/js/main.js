(function ($) {
    'use strict';

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.nav-bar').addClass('sticky-top');
        } else {
            $('.nav-bar').removeClass('sticky-top');
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Header carousel
    $('.header-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
    });

    // Testimonials carousel
    $('.testimonial-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            992: {
                items: 2,
            },
        },
    });

    function focusTestimoni(e) {
        document.getElementById('nav-bar').style.zIndex = '9998';
        document.getElementById('nav-bar').style.opacity = '.1';
        e.target.style.zIndex = '9999';
    }

    function blurTestimoni(e) {
        document.getElementById('nav-bar').style.zIndex = '9999';
        document.getElementById('nav-bar').style.opacity = '1';
        e.target.style.zIndex = '9998';
    }

    function formatRupiah(angka) {
        let rupiah = '';
        let angkarev = angka.toString().split('').reverse().join('');
        for (let i = 0; i < angkarev.length; i++) {
            if (i % 3 == 0) {
                rupiah += angkarev.substr(i, 3) + '.';
            }
        }
        return (
            'Rp. ' +
            rupiah
                .split('', rupiah.length - 1)
                .reverse()
                .join('')
        );
    }

    let inputForBlur = document.getElementsByClassName('input-for-blur');

    for (const element of inputForBlur) {
        element.addEventListener('focus', function (e) {
            focusTestimoni(e);
        });

        element.addEventListener('blur', function (e) {
            blurTestimoni(e);
        });
    }

    let jumlahTiket = document.getElementById('jumlah_tiket');
    jumlahTiket.addEventListener('keyup', function (e) {
        let hargaTiket = document.getElementById('harga_tiket');
        let total = hargaTiket.value * e.target.value;

        document.getElementById('harga_total').value = total;
        document.getElementById('view_total').innerText = formatRupiah(total);
    });
})(jQuery);
