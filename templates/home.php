<?php
/**
 * Template Name: Home
 */
get_header(); 
$mypost= $post;
?>

            
            <!-- Welcome Section -->
    <section class="sec-welcome">
        <div class="swiper-container containers1">
                <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'slider',
                'posts_per_page' => '-1',
				'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>

                <div class="swiper-slide">

                    <div class="welc__img">
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                    </div>

                </div>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>
        </div>

        <div class="welc-content">
            <div class="container">
            <div class="line1">
                <h1>Hi! We Are Frontline, All We Do is Work</h1>
            </div>

            <div class="line2">
                 <h2>Let Us Help You</h2>
            </div>

            <div class="line3">
                <h3>We educated, privileged lawyers have a professional and moral duty to represent the underrepresented in our society, to ensure that justice exists for all, both legal and economic justice.</h3>
            </div>
                <div class="jstdisplay">
                <div class="button1">
                        <a href="<?php the_field('button1'); ?>">FREE CONSULATION</a>
                </div>
                <div class="arrowss">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                </div>
                </div>
                </div>
        </div>  

    </section>



    <!-- Second Section -->

    <div class="aboutus__home">
        <div class="container">
        <div class="fline">
                <p>“The justice that love brings is the surrender, the justice that the law brings is punishment” </p>
        </div>
        <div class="sline">
            <div class="row">

                <div class="lefts col-lg-6">
                    <div class="elementor-text-editor elementor-clearfix">
                        <p>
                        <span class="elementor-drop-cap">
                        <span class="elementor-drop-cap-letter">A</span>
                        </span>lthough there seems to be a renewed emphasis on law and order today, the government has always pursued criminal cases aggressively. Armed with vast financial resources nd sweeping investigative powers state and business federal prosecutors have an unfair advantage over those who have been accused of a crime. If you are under investigation or facing criminal charges, it is crucial to have proper legal representation. The Frontline Office is the premier criminal defense law firm serving clients throughout the Albany.
                        </p>
                    </div>
                </div>

                <div class="rights col-lg-6">
                <p>Clients against misdemeanor and felony charges in both state and federal courts, we have a proven track record of achieving successful outcomes. While each case is unique, we are dedicated advocates. Cum sociis Theme natoque penatibus.</p>
                    <div class="imgs">
                        <div class="limg">
                        <img src="<?php the_field('limg');?>" alt=""> 
                        <div class="personal-i">
                            <h1>Mark J. Sacco</h1>
                            <h2>CEO Law Company</h2>
                        </div>
                        </div>
                        <div class="rimg">
                        <img src="<?php the_field('rimg');?>" alt=""> 
                        </div>
                    </div>
                </div>
                </div>
        </div>
        </div>
    </div>





    <!-- Third Section -->

    <div class="practicesection" id="practice" style="background-image: url(<?php the_field('bgrmenuprac');?>)">
        <div class="justpdg">
            <div class="container">
                    <div class="intro">
                    <img src="<?php the_field('iconin');?>" alt="">
                    <h1>PRACTICE AREAS</h1>
                    <h2>Replenish saw living moved light blessed given together green god. Him our. Divide air give creeping said set. Forth night fourth it called that. Fruitful light signs heaven were good that deep.</h2>
                    </div>

                    <div class="swiper-container containers2">
                    <div class="swiper-wrapper ">
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

                    <div class="swiper-slide">
                    <div class="wrapperiout">
                        <div class="wrapperi">

                        <div class="icon__post">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>

                        <h1><?php the_title(); ?></h1>
                        <h2><?php the_content(); ?></h2>

                        </div>
                    </div>
                    </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    </div>
                    </div>
            </div>
        </div>
    </div>





    <div class="whyus" id="about">
        <div class="row">
        <div class="leftside col-lg-4">
                <img src="<?php the_field('bgrvideo');?>" alt=""> 
                
                
                <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-47810e98 elementor-widget elementor-widget-cms_video_popup" data-id="47810e98" data-element_type="widget" data-widget_type="cms_video_popup.default">
				<div class="elementor-widget-container">
			<div class="cms-video-popup">
    <div class="content-inner">
        <a class="video-play-button" href="https://vimeo.com/193738828">
            <i class="fas fa-play"></i>
        </a>
            </div>
</div>		</div>
				</div>
		                </div>
                    </div>

                
        </div>
        <div class="rightside col-lg-8">
                    <h1>WHAT WE ARE EXPERT AT</h1>
                    <h2>WHY CHOOSE US?</h2>
                    <h3>Scaffidi & Associates was founded in 1985 on the simple yet vital principal that everyone, regardless of circumstance, is entitled to equal justice under the law. Mr. Scaffidi began the firm after spending nearly a decade at a prestigious Manhattan defense firm. representing physicians and corporate defendants and trying their most serious cases. For more than three decades, the firm has succeeded in leveling the playing field by providing innocent victims with strong, tireless advocates and the same access to high-powered.</h3>
                    <div class="liness">
                        <div class="l1"><span></span> Work professionally and quickly</div>
                        <div class="l2"><span></span> If you don't win, we don't take money</div>
                        <div class="l3"><span></span> Warning of updated legal risks for customers</div>
                    </div>
                    <div class="numberseff animate__lightSpeedInLeft animate__animated">
						<div class="counteri">
							<?php dynamic_sidebar('counter');?>
						</div>
					</div>
            </div>
        </div>
    </div>


<div class="yourcase">
    <div class="container">
            <div class="intro">
            <img src="<?php the_field('iconin');?>" alt="">
            <h1>FREE CASE EVALUATION</h1>
            <h2>The personal injury attorneys in Frontline Law Firm have the compassion and trial lawyer skills to tell your story to a jury. Lorem Ipsum, you need to be sure there isn’t anything embarrassing.</h2>
            </div>


        <div class="row">
            <div class="lefts col-lg-6">
                    <h1>TESTIMONIALS</h1>
                    <!-- <?php the_field('testim');?> -->
                    <img src="<?php the_field('testim');?>" alt=""> 
            </div>

            <div class="rights col-lg-6">
                    <h1>SAY YOUR CASE</h1>
                    <?php the_field('contactcase');?>
            </div>
        </div>

    </div>
</div>


<div class="betweens">
    <img src="<?php the_field('nowinnofee');?>" alt="">
    <div class="container">
            <div class="contenttt">
            <h1>NO WIN . NO FEE</h1>
            <h2>WE ASSURE YOU THAT YOU WILL WIN</h2>
            <div class="button2">
                    <a href="<?php the_field('button2'); ?>">FREE CASE EVALUATION</a>
            </div>
            </div>
    </div>
</div>





<div class="attorneys" id="attourneys">
    <div class="container">

        <div class="intro">
        <img src="<?php the_field('iconin');?>" alt="">
        <h1>MEET OUR ATTOURNEYS</h1>
        <h2>Frontline has extensive experience across all industries. We bring each client a combination of deep industry knowledge and expert perspectives from other industries on the challenge at stake.</h2>
        </div>
                <div class="row">
                <?php
                $args = array(
                'post_type' => 'attorneys',
                'posts_per_page' => '-1',
				'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                

            <div class="grid-item col-lg-4">
            <div class="grid-item-inner">
                    <div class="entry-featured">
                        <div class="post-image scale-hover">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>
                    </div>

                <div class="entry-body">

                    <h4 class="entry-title">
                    <?php the_title(); ?><span>  -  </span> <?php the_excerpt(); ?></span>
                    </h4>

                    <div class="entry-content"><?php the_content(); ?></div>

                    <div class="contact-info">

                        <?php the_field('conttt') ?>

                    </div>

                </div>

            </div>
            </div>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>
    </div>
</div>








<div class="quest" id="appointment">
    <div class="row">
    <div class="left col-lg-6">
<!-- 11. freequently area start -->
<div class="frequently_wrapper section_padd border_bottm" id="faq">
    <div class="container">
        <div class="row justify-content-center">
                <div class="titttle col-lg-10" >
                <i class="fas fa-question-circle"></i>
                <h2 class="title_head mb_30">Frequently Asked Questions</h2>
                </div>
                <div class="col-lg-10 mt_30">
                
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <button class="btn btn-link sub_title" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Is KingLaw Firm the right law firm for me?
                            </button>
                            
                           <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                              <div class="card-body" style="padding-bottom: 25px; padding-top: 15px; padding-left: 1rem; padding-right: 4rem;">
                              Choosing a law firm to represent you and your case is one of the most important decisions you can make. We understand that your case is important to you and choosing the right firm and attorneys to represent you could make the difference for your case.
                              </div>
                           </div>
                        </div>
                    </div>

                     <div class="accordion mt_15" id="accordionExample">
                        <div class="card">
                            <button class="btn btn-link sub_title" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">What types of cases does your law firm handle?</button>
                             
                           <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
                              <div class="card-body" style="padding-bottom: 25px; padding-top: 15px; padding-left: 1rem; padding-right: 4rem;">
                              Choosing a law firm to represent you and your case is one of the most important decisions you can make. We understand that your case is important to you and choosing the right firm and attorneys to represent you could make the difference for your case. 
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="accordion mt_15" id="accordionExample">
                        <div class="card">
                                 <button class="btn btn-link sub_title" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">How long have you been in business?</button>
                             
                           <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                              <div class="card-body" style="padding-bottom: 25px; padding-top: 15px; padding-left: 1rem; padding-right: 4rem;">
                              Choosing a law firm to represent you and your case is one of the most important decisions you can make. We understand that your case is important to you and choosing the right firm and attorneys to represent you could make the difference for your case.
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="accordion mt_15" id="accordionExample">
                        <div class="card">
                                 <button class="btn btn-link sub_title" style="width: 100%; outline: unset;" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">What do I receive in exchange for your attorney’s fee?</button>
                             
                           <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                              <div class="card-body" style="padding-bottom: 25px; padding-top: 15px; padding-left: 1rem; padding-right: 4rem;">
                              Choosing a law firm to represent you and your case is one of the most important decisions you can make. We understand that your case is important to you and choosing the right firm and attorneys to represent you could make the difference for your case.</div>
                           </div>
                        </div>
                     </div>
                   
                     <div class="accordion mt_15" id="accordionExample">
                        <div class="card">
                                 <button class="btn btn-link sub_title" style="width: 100%" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsethree">What is expected of me as a client of your firm?</button>
                             
                           <div id="collapsefive" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                              <div class="card-body" style="padding-bottom: 25px; padding-top: 15px; padding-left: 1rem; padding-right: 4rem;">
                              Choosing a law firm to represent you and your case is one of the most important decisions you can make. We understand that your case is important to you and choosing the right firm and attorneys to represent you could make the difference for your case.
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- 11. freequently area start -->









    </div>
    <div class="right col-lg-6" style="background-image: url(<?php the_field('justbgr');?>)">
        <div class="upp">
                <div class="leftt">
                <h1>Schedule a Free Consultation 24/7</h1>
                <?php dynamic_sidebar('call2');?>
                </div>
                <div class="righttt">
                <div class="button3">
                    <a href="<?php the_field('button3'); ?>">MAKE AN APPOINTMENT</a>
                </div>
                </div>
        </div>
        
                <!-- <img src="<?php the_field('justbgr');?>" alt=""> -->
        
    </div>
</div>
</div>







<div class="recentnews">
    <div class="container">
                <div class="upline">
                    <div class="jstspb">
                    <h1>LATEST NEWS FROM US</h1>
                    <div class="left">
                    <h2>RECENT NEWS</h2>
                    </div>
                    </div>
                    
                    <div class="right">
                    <?php dynamic_sidebar('newsletter');?>
                    </div>
                </div>




                <div class="row roww">
                <?php
                $args = array(
                'post_type' => 'blog',
                'posts_per_page' => '-1',
                'order' => 'ASC',
                'menucategory' => $term->slug
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                
                ?>
                    <div class="oout col-lg-4">

                        <div class="blog__img scale-hover">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>

                        <h1><?php the_title(); ?></h1>

                        <div class="dateandcat">
                        <li class="far fa-calendar-alt"><p><?php echo get_the_date('Y-m-d');?></p></li>
                        <li class="far fa-calendar-alt"><p><?php $terms = get_the_terms($post->ID, 'menucategory' ); if ($terms && ! is_wp_error($terms)): $tslugs_arr = array();
                        foreach ($terms as $term) {$tslugs_arr[] = $term->slug;} $terms_slug_str = join( ", ", $tslugs_arr); endif; echo $terms_slug_str; ?></p>
                        </li>
                        </div>

                        <h2><?php the_content(); ?></h2>

                        <div class="button3">
                            <a href="/">READ MORE</a>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>





    </div>
</div>
















    <script>
	jQuery('.numberseff h3').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 1000,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});
</script>

<?php get_footer(); ?>
