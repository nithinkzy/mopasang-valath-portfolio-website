<?php /* Template Name: Water Color*/ ?>
<?php
function water_meta_tags()
{
    echo '<meta name="description" content="Welcome to MyWater Color Painting Gallery, showcasing stunning artwork from some of the finest water color painters in the country. Explore our selection of beautiful, vibrant paintings that will bring color and joy to any home or office. Buy now and enjoy a lifetime of beauty." />';
}
add_action('wp_head', 'water_meta_tags');
get_header();

global $wpdb;
$water_color_db = $wpdb->get_results("select * from water_color");
// var_dump($water_color_db);
// die();
$imageDir = get_template_directory_uri() . '/assets/images/water_color/';

?>
<style>

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />
<section id="water__color">
    <div class="container-fluid">
        <div class="mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <h1 class="text-center mb-4 main-title">Water Color Paintings</h1>
            <p class="lead text-center mb-5 lead-title">Experience my Colorful World of Watercolor Art!</p>
        </div>
        <div  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" class="gallery d-flex flex-wrap  ">
            <?php
            foreach ($water_color_db as $key => $obj) {

                $title = $obj->Title;
                $dimension = $obj->Dimensions;
                $availability = $obj->Availability;
                $filename = $obj->filename;
            ?>
                <div class="gallery__wrapper col-12 col-md-6 col-lg-4 col-xl-3 px-2 mb-4  align-self-start">
                    <div class="gallery__image">
                        <a class="mb-5" href="<?php echo $imageDir . $filename ?>" data-lightbox="Water Color Gallery" data-title="<?php echo $title ?>">

                            <img class="mb-5 img-fluid frame " src="<?php echo $imageDir . $filename ?>" alt="">
                        </a>
                        <p class="lead text-center my-1"><strong><?php echo $title ?></strong></p>
                        <p class="lead text-center my-1"><?php echo $dimension ?></p>
                        <p class="lead text-center my-1"><?php echo $availability ?></p>
                    </div>

                </div>
            <?php
            }
            ?>
        </div>
        
    </div>
    <div class="container-lg py-5 my-5">
        <div  class="my-5">

            <p class="lead mb-3 text-center display-2 ">Follow along for more of the same - Join me on social media!</p>
            <ul class="d-flex   justify-content-evenly w-100 my-5 my-lg-5 py-lg-5">
                <li>
                    <a class="fs-1" href="https://www.mojarto.com/artworks?searchText=mopasang%20valath"><img src="data:image/png;base64,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" alt=""></a>
                </li>
                <li>
                    <a class="fs-1" href="https://www.instagram.com/mopasang_valath_/?hl=en"><i class="ri-instagram-fill"></i></a>
                </li>
                <li>
                    <a class="fs-1" href="https://www.facebook.com/Paintings.Of.MopasangValath/"><i class="ps-2 ri-facebook-box-fill"></i></a>
                </li>
                <li>
                    <a class="fs-1" href="https://youtube.com/c/MopasangValath"><i class="ri-youtube-fill"></i></a>
                </li>

            </ul>

        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<?php get_footer(); ?>