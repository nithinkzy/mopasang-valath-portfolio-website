<?php get_header();
$resume = get_template_directory_uri() . '/assets/mopasang_resume.jpeg';
$acrylic_cover_path = get_template_directory_uri() . '/assets/images/cover_images/acrylic.jpg';
$water_cover_path = get_template_directory_uri() . '/assets/images/cover_images/water.jpg';
$profile_pic = get_template_directory_uri() . '/assets/images/cover_images/profile.png';
$work_samples = "";
$achievements_dir = get_template_directory() . '/assets/images/achievements/';

$achievements_filenames = array_diff(scandir($achievements_dir), array('.', '..'));

// Works 
$works_dir = get_template_directory() . '/assets/images/works/';
$works_filenames = array_diff(scandir($works_dir), array('.', '..'));



?>
<main class="container-fluid">

  <section id="home">
    <div data-aos="fade-up" data-aos-once="false" data-aos-anchor-placement="top-center" class="section__hero container-fluid d-flex flex-column flex-md-row border-bottom justify-content-center align-items-center justify-content-md-around  ">

      <div class="col-12 col-md-4 hero_img_panel order-2 order-md-1 mb-4">
        <div class="w-100">
          <img class="img-fluid" src="<?php echo $acrylic_cover_path ?>" alt="Acrylic Album Cover Picture">
        </div>
        <a href="/acrylic-gallery" class="btn btn-sm btn-primary border">Acrylic Gallery</a>
      </div>

      <div class="col-12 mb-4 pb-3 col-md-4 hero__section-intro  border-sm-bottom border-md-start border-md-end order-1">
        <img class="hero__logo" src="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>" alt="" class="img-fluid">
        <div>
          <h1 class="text-uppercase mb-3 mb-md-5">A self-taught <br> <span> artist</span>
            brimming with energy and a
            never-ending passion for <br> <span> colours</span></h1>
        </div>
        <div class="cta-btn d-flex justify-content-between">
          <a href="#contact" type="button" class="btn btn-sm btn-outline-primary">Contact Me</a>
          <a type="button" class="btn btn-sm btn-outline-primary" href="<?php echo $resume; ?>" download>Download Resume</a>
        </div>
      </div>

      <div class="col-12 col-md-4 hero_img_panel d-flex flex-column align-items-center order-3">
        <div class="w-100">
          <img class="img-fluid" src="<?php echo $water_cover_path ?>" alt="Water Color Album Cover Picture">
        </div>
        <a href="/water-color-gallery" class="btn btn-sm btn-primary border">Watercolor Gallery</a>
      </div>

    </div>

    <!-- <div class="section__awards border-bottom border-2 contianer-f">
      <h2 class="text-center">Honours and Awards</h2>
      <div class="section__awards-award">
        <p class="py-4">Vailoppilly Sapthathi Smaraka Award</p>
        <p class="py-4">AAtma Award</p>
        <p class="py-4">Highly commended Certificate from Kerala Lalitha kala Academy </p>
      </div>
    </div> -->
  </section>

  <!-- work -->

  <section id="work">
    <div data-aos="fade-up" data-aos-once="false" class="section__work bg-secondary d-flex flex-column text-primary">
      <h1 class="mb-5 text-center order-1 ">Works</h1>


      <!-- <h2 class="mb-3 order-3 order-lg-2">Provides the unique piece of art that sets in the ambiance for Hotels, Resorts
        and
        Corporate Offices. </h2> -->
      <h2 class="mb-3 order-3 order-lg-2">Transform Your Space with One-of-a-Kind Art – Setting the Ambiance for Every Occasion. </h2>
      <!-- <img src="https://scontent.fcok9-1.fna.fbcdn.net/v/t1.6435-9/186472605_153918623411010_8599233629783228525_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=n6eVe8dZIVkAX9CmfKJ&_nc_ht=scontent.fcok9-1.fna&oh=00_AfAB6mCQGppNvRh39jrsoO46uSNwaaiK2EMgzbrBa5p5_Q&oe=63BD6DC0" alt=""> -->
      <div class="swiper workSwiper mb-5 order-2 order-lg-3">
        <div class="swiper-wrapper">
          <?php
          foreach ($works_filenames as $key => $filename) {
          ?>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/works/' . $filename ?>" alt="">
            </div>
          <?php
          }
          ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="order-4">

        <a href="#contact" type="button" class="mb-3 btn btn-outline-primary">Contact Me</a>
      </div>

    </div>
  </section>


  <section id="about_2 bg-light">
    <div data-aos="fade-up" data-aos-once="false" data-aos-anchor-placement="top-center" class="section__about-2 border-lg mx-4 text-center my-5 py-5">
      <div class="d-flex flex-column justify-content-lg-between mb-md-5 ">

        <div class="div1 ">
          <p class="blockquote">
            <span>10+ Years</span>
          </p>
          <p class="blockquote-footer">
            Varnalokam <br>( live painting programme )<br> in various TV channels
          </p>
        </div>
        <div class="div2">
          <p class="blockquote">

            <span>"Artist Directory"</span>
          </p>
          <p class="blockquote-footer">

            Published the book
          </p>
        </div>
      </div>

      <div class="d-flex flex-column justify-content-center text-center align-items-center my-4 mb-lg-5 pb-lg-4">
        <p class="blockquote"> <span>state exhibition art </span></p>
        <ul>
          <li>1983</li>
          <li>1984</li>
          <li>2005</li>
          <li>2006</li>
          <li>2017</li>
        </ul>
      </div>

      <div class="d-flex flex-column justify-content-center align-items-center justify-content-lg-between">
        <div class="div4">
          <p class="blockquote">
            <span>solo exhibition</span>
          </p>
          <p class="blockquote-footer">

            at Kottayam in 2006.
          </p>
        </div>
        <div class="div5 ">
          <p class="blockquote">
            <span>400+</span>
          </p>
          <p class="blockquote-footer">

            Live Watercolor daily show on Face Book.
          </p>
        </div>
      </div>

    </div>

  </section>

  <section id="achievements">
    <div data-aos="fade-up" data-aos-once="false" data-aos-anchor-placement="top-center" class="section__achievements d-flex flex-column justify-content-center align-items-center border-bottom my-5 py-5 ">
      <h1>Achievements</h1>


      <div class="swiper mySwiper">
        <div class="swiper-wrapper">


          <?php
          foreach ($achievements_filenames as $key => $filename) {
          ?>

            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/achievements/' . $filename ?>" alt="">
            </div>

          <?php
          }
          ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <!-- <img class="img-fluid" src="https://scontent.fcok9-1.fna.fbcdn.net/v/t39.30808-6/316672708_2752263374909216_8099949936463500474_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=C22MIp4pylwAX8ENLub&tn=w5JFr3Y7ewFo64a5&_nc_ht=scontent.fcok9-1.fna&oh=00_AfAT-JYtA3rzM0SaJ0P87A2eUBPQc6DwdTiaakNHbY1Dfw&oe=639D128F" alt=""> -->

    </div>
  </section>

  <section id="contact">
    <div data-aos="fade-up" data-aos-once="false" data-aos-anchor-placement="top-center" class="container-lg">

      <h1 class=" mb-5 text-center text-primary ">Contact Me</h1>
      <div class="section__contact row flex-column justify-content-center text-center">

        <div class=" border-lg-end">

          <p class="lead mb-3 text-start ">Let's create something special together - Contact me for custom artworks to make your project shine!</p>
          <ul class="d-flex  flex-column  justify-content-evenly w-100 section__contact-action my-5 my-lg-5 py-lg-5 ">
            <li class="btn-link">
              <a href="tel:+91 94473 55111">Call</a>
            </li>
            <li class=" btn-link">
              <a href="mailto:mopasangvalath@gmail.com">Email</a>
            </li>
            <li class=" btn-link">
              <a href="https://api.whatsapp.com/send?phone=919447355111">Whatsapp</a>
            </li>
          </ul>

          <p class="lead mb-3 text-end ">Follow me on social media to stay up-to-date on my latest projects and adventures!</p>
          <ul class="d-flex   justify-content-evenly w-100 my-5 my-lg-5 py-lg-5">
            <li>
              <a href="https://www.mojarto.com/artworks?searchText=mopasang%20valath"><img src="data:image/png;base64,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" alt=""></a>
            </li>
            <li>
              <a href="https://www.instagram.com/mopasang_valath_/?hl=en"><i class="ri-instagram-fill"></i></a>
            </li>
            <li>
              <a href="https://www.facebook.com/Paintings.Of.MopasangValath/"><i class="ps-2 ri-facebook-box-fill"></i></a>
            </li>
            <li>
              <a href="https://youtube.com/c/MopasangValath"><i class="ri-youtube-fill"></i></a>
            </li>

          </ul>

        </div>




        <div class=" cta-btn mb-5">
          <a type="button" class="btn btn-outline-primary" href="<?php echo $resume; ?>" download>Download Resume</a>

        </div>
      </div>

      <div class="text-center text-lg-end mb-5">
        <iframe class="ps-lg-5 mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.0170141327076!2d76.5067029159475!3d9.593801382525687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062b06cf99ff51%3A0x5497618e4d1dc5df!2sMopasang%20Valath%2C%20Artist!5e0!3m2!1sen!2sin!4v1670782601197!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p class="lead"> <span class="text-muted text-lower"> ADDRESS :</span>
          Mopasang Valath
          2/492, Aiswarya Gardens,
          Puthenangady Kottayam 1
        </p>
        <a type="button" class="btn btn-secondary" href="http://maps.google.com/?q=2/492, Aiswarya Gardens, Puthenangadi, Kottayam, Kerala 686001"">Get Direction</a>

      </div>
    </div>
    <H3>Mopasang Valath</H3>
    </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>