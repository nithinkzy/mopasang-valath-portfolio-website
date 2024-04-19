<?php
/*
 * Template Name: About Page
 */
function custom_meta_tags()
{
    // Output your custom meta tags
    echo '<meta name="description" content="Learn about Web-Wrapper, a Toronto-based web agency. Committed to making websites affordable globally. Get insights into our mission, values, and dedicated team.">';
    echo '<meta name="keywords" content="web agency, Toronto, affordable websites, digital transformation, mission, values, dedicated team">';
}

// Hook into the wp_head action to add custom meta tags
add_action('wp_head', 'custom_meta_tags');

// Modify the document title
function custom_document_title_parts($title_parts)
{
    // Customize the title based on the current page
    $title_parts['title'] = "About Us | Web-Wrapper - Your Digital Transformation Partner";

    return $title_parts;
}

// Hook into the document_title_parts filter to modify the title
add_filter('document_title_parts', 'custom_document_title_parts');
get_header();
?>


<section id="about" class="container">
    <div data-aos="fade-up" data-aos-once="false" data-aos-anchor-placement="top-center" class="section__about">
        <div class="d-xl-flex justify-content-xl-between border-bottom">

            <div class="row col-xl-5 d-flex flex-column justify-content-center justify-content-xl-between text-center  pb-4">

                <div class="about-intro">
                    <h1 class=" mb-5 order-1">About Me</h1>
                    <p class="mb-5 order-2">
                        <!-- Mopasang Valath<br> -->
                        S/o Eminent Malayalam Writer V.V.K Valath<br>
                        Born in 1956, Ernakulam.<br>
                        Post graduate in Economics.<br>
                        State Patron, Kerala Chitra Kala Parishath.<br>
                    </p>
                    <p>
                        <strong>Honours and Awards</strong><br>
                        Highly commended Certificate from Kerala Lalitha kala Academy<br>
                        Vailoppilly Sapthathi Smaraka Award<br>
                        AAtma Award<br>
                        Artist Camps<br>
                    </p>
                    <p>
                        Participated in the camps organized by Kerala Lalitha kala Academy: National Watercolor Camp,
                        Kumarakom, StateWatercolor camp Thekkady, State Watercolor camp Thirunelly, Galeeli Thrissur,
                        Artist camp Gawi, Artist camp Lakshadweep, Artist camp Thasrak.
                    </p>
                    <p>
                        Performed Watercolor workshops in, Chennai, Bangalore, Mysore, Tiruppur, Thiruvananthapuram,
                        Ernakulam, Alappuzha, Mahe and Kannur.
                    </p>
                    <p>
                        Conducted solo exhibition at Kottayam in 2006.
                    </p>
                    <p>
                        Participated in the state exhibition of art 1983 1984, 2005, 2006, 2017.
                    </p>
                    <p>

                        Group Exhibitions: Jehangir art gallery Mumbai (2022), Bangalore (2006, 2017) Coimbatore (2017)
                        Ernakulam(2017),Mattanchery (2017), Kayamkulam (2022).
                    </p>
                    <p>
                        Doing paintings for Hotels Resorts and Corporate Offices.<br>
                        Edited and published the book “Artist Directory”<br>
                        Presented live painting programme, Varnalokam in various TV channels for more than ten years.<br>
                        Presented more than 400 Live Watercolor daily show in Face Book.<br>
                    </p>
                    </p>
                </div>

                <div class="about-title 2 border-lg-top pt-4 order-4">
                    <div class="cta-btn row px-2">
                        <a href="#contact" type="button" class="mb-3 btn btn-outline-secondary">Contact Me</a>
                        <a type="button" class="btn btn-outline-primary" href="<?php echo $resume; ?>" download>Download Resume</a>
                    </div>
                </div>

                <img class="about-img mb-3 order-3 d-xl-none" src="<?php echo get_template_directory_uri() . '/assets/profile_picture.png' ?>" alt="Mopasang Valath Profile Picture">
            </div>
            <div class="col-xl-7 d-none d-xl-block">
                <img class="about-img mb-3 order-3" src="<?php echo get_template_directory_uri() . '/assets/profile_picture.png' ?>" alt="Mopasang Valath Profile Picture">
            </div>
        </div>

    </div>
</section>
<?php
get_footer();
