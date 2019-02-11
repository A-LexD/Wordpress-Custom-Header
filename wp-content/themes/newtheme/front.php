<?php /* Template Name: Front page */ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/swiper.min.css">
<style type="text/css">
  .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
</style>


 <!-- Swiper -->
  <div class="swiper-container">
    <div class="slider_info">
  <div class="slider_title"><?php the_field('text');?></div>
  <div class="slider_buttons">
    <button class="but_1"><?php the_field('Button-1');?></button>
    <button class="but_2"><?php the_field('Button-2');?></button>
  </div>
</div>
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(<?php the_field('photo');?>)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1000/1000/nightlife/2)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1000/1000/nightlife/3)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1000/1000/nightlife/4)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1000/1000/nightlife/5)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>

  <!-- Swiper JS -->
  <script src="<?php echo get_template_directory_uri();?>/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

<?php get_footer(); ?>