// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

console.log("js loade");
// var swiper = new Swiper(".mySwiper", {
//     pagination: {
//       el: ".swiper-pagination",
//       type: "fraction",
//     },
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//   });

var swiper = new Swiper(".workSwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
var swiper = new Swiper(".mySwiper", {
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    pagination: {
        el: ".swiper-pagination",
    }, autoplay: {
        delay: 2000,
    },
});

jQuery(document).ready(function () {
    $('#basic button[type="submit"]').click(function (e) {
        e.preventDefault();
        console.log($(this).data('img'));
    })

    jQuery(".user_vote").click(function (e) {
        e.preventDefault();
        post_id = jQuery(this).attr("data-post_id")
        nonce = jQuery(this).attr("data-nonce")

        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: myAjax.ajaxurl,
            data: { action: "my_user_vote", post_id: post_id, nonce: nonce },
            success: function (response) {
                if (response.type == "success") {
                    jQuery("#vote_counter").html(response.vote_count)
                }
                else {
                    alert("Your vote could not be added")
                }
            }
        })

    })

})