<?php /* Template Name: Admin Page*/ ?>
<?php get_header(); ?>

<?php
if ($_POST == "acrylic.jpg") {
    echo "Upload file to acrylic folder";
}
?>
<section id="admin">
    <div class="container-fluid">

        <div id="basic" class="basic__upload border-bottom ">
            <h1>Basic Image Updates</h1>
            <div class="row">

                <?php
                $cover_image_dir =  '/assets/images/cover_images';
                $cover_images = array_values(array_diff(scandir(get_template_directory() . $cover_image_dir), array('.', '..', '.DS_Store')));

                foreach ($cover_images as $key => $image) {
                    $image_type = substr($image, 0, strpos($image, "."));
                ?>

                    <div class="col-4 ">
                        <form class="d-flex flex-column justify-content-center align-items-center" method="post" enctype="multipart/form-data">
                            <h2><?php echo $image_type ?></h2>
                            <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri() . $cover_image_dir . DIRECTORY_SEPARATOR . $image ?>" alt="">
                            <p> Select image to upload:</p>
                            <div class="input-group mb-3">
                                <input type="file" name="<?php echo $image_type . "_file" ?>" id="<?php echo $image_type . "_file" ?>" class="form-control">
                                <button class="btn btn-outline-secondary" data-img="<?php echo $image_type ?>" type="button">Upload</button>
                            </div>
                        </form>
                    </div>
                <?php
                    # code...
                }
                ?>
            </div>

        </div>
    </div>
</section>
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<script type="module" src="<?php echo get_template_directory_uri() . "/js/admin.js" ?>"></script>

<?php get_footer(); ?>