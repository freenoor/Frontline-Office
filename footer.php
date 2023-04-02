<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lawyer1
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
      
        <div class="container">
          <div class="row">
            <div class="footersection1 footer-4 col-lg-3">
                <a class="logo-footer" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php dynamic_sidebar('logo_footer');?>
                </a>
                    <?php dynamic_sidebar('footer_text') ?>
            </div> 


  
            <div class="footersection2 footer-4 col-lg-3">
              <h1>Contact Info</h1>
                    <?php dynamic_sidebar('footercontact');?>
            </div> 


            <div class="footersection3 footer-4 col-lg-3">
                <h1>Practice Area</h1>
                    <?php
                    $args = array(
                    'post_type' => 'practicearea',
                    'posts_per_page' => '-1',
                    'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                    while($loop->have_posts()):
                    $loop->the_post();
                    ?>

                    <h3><?php the_title(); ?></h3>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
            </div>

            <div class="footersection4 footer-4 col-lg-3">
            <h1>Follow Along</h1>
			        <?php dynamic_sidebar('socialsfooter'); ?>
            </div>
            </div>
            </div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>




<script>
var homeSwiper = new Swiper(".containers1", {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  fadeEffect: { crossFade: true },
  virtualTranslate: true,
//   autoplay: {
//       delay: 2500,
//       disableOnInteraction: true,
//   },
  speed: 1000, 
  slidersPerView: 1,
  effect: "fade"
});
</script>


<script>
    var swiper = new Swiper('.containers2', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768.98: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        991.98: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
  </script>


<script>
    jQuery('.tnp-email').attr('placeholder', 'Email Address*');
</script>

<script>
    jQuery(document).ready(function() {
        jQuery('.call-header').click(function() {
            jQuery('.call-header').toggleClass('visiblee');
        });
    });
</script>

</body>
</html>
