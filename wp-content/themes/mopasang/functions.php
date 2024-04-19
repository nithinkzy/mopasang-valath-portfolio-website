<?php

function add_style_script()
{

    // Stylesheets
    // wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css', array(), false, false);
    // wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), false, false);
    // wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css', array(), false, false);
    // wp_enqueue_style('boxicons', 'https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css', array(), false, false);
    // wp_enqueue_style('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css', array(), false, false);
    // wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), false, false);
    // wp_enqueue_style('ani', 'https://anijs.github.io/lib/anicollection/anicollection.css', array(), false, false);
    // wp_enqueue_style('hover', 'https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css', array(), false, false);
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), false, false);
    // wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/style.css/custom.min.css', array(), false, false);

    // Scripts
    wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), false, true);
    wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, false);
    // wp_enqueue_script('box-icons', 'https://unpkg.com/boxicons@2.1.2/dist/boxicons.js ', array('jquery'), false, true);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), false, true);
    // wp_enqueue_script('lightbox', 'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js', array(), false, true);
    // wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), false, true);
    // wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), false, true);
    // wp_enqueue_script('anijs', 'https://anijs.github.io/lib/anijs/anijs-min.js', array(), false, true);
    // wp_enqueue_script('tilt', 'https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js', array(), false, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array("jQuery", "aos"), false, true);

    wp_localize_script(
        'main',
        'frontend_ajax_object',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );
    // wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array("jQuery","aos"), false, true);
}
add_action('wp_enqueue_scripts', 'add_style_script');

function send_email()
{
    if (isset($_POST) && !empty($_POST)) {
        $to = "info@alkhaleejtr.com";
        $from = $_POST['from'];
        $subject =  $from . " - " . $_POST['subject'];
        $message = $_POST['message'];
        $headers = array(

            "MIME-Version: 1.0",

            "Content-type:text/html;charset=UTF-8",

            "From: Mopasang - " . $_POST['from'],

            'Reply-To: Mopasang - ' . $subject . $from

        );
        $mail = wp_mail(
            $to,
            $subject,
            $message,
            $headers
        );
        if ($mail) {
            return true;
        }
    }
    return false;
}
add_action('wp_ajax_nopriv_send_email', 'send_email');
add_action('wp_ajax_send_email', 'send_email');
