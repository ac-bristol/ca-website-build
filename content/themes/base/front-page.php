<?php
/**
 * The Template for homepage
 *
 * @package base
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="row cf">
        <div class="span12">
          <h1 class="tag-line">I'm a Bristol based front end developer. I specialise in creating responsive, pixel perfect user experiences using modular, scalable code.</h1>
        </div>
      </div>
      <div class="row cf" id="work-row">
        <div class="span3 col">
          <h2 class="home-col-header">Recent work</h2>
        </div>
        <div class="span9 col">
           <?php echo do_shortcode('[ajax_load_more repeater="new" post_type="post" category="work" order="DESC" posts_per_page="3" scroll="false" max-pages="2" transition="fade" button_label="See more work"]'); ?>
          
        </div>
      </div>
      
      <div class="row cf" id="about-row">
        <div class="span3 col">
          <h2 class="home-col-header">About me</h2>
        </div>
        <div class="span9 col">
          <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
      
      <div class="row cf" id="skills-row">
        <div class="span3 col">
          <h2 class="home-col-header">What I do</h2>
        </div>
        <div class="span9 col">
          <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Javascript</li>
            <li>Sass</li>
            <li>LESS</li>
            <li>HTML5 API's</li>
            <li>RWD</li>
            <li>AWD</li> 
            <li>PHP</li>
            <li>AJAX</li>
          </ul>
          <ul>
            <li>Wordpress</li>
            <li>Umbraco</li>
            <li>Drupal</li>  
            <li>MySQL</li>
            <li>Version control</li>  
            <li>Grunt</li>
            <li>JSON + XML</li>
            <li>Photoshop</li>
            <li>Illustrator</li>
          </ul>
        </div>
      </div>
        
      <div class="row cf" id="blog-row">
        <div class="span3 col">
          <h2 class="home-col-header">Blog</h2>
        </div>
        <div class="span9 col">
           <?php echo do_shortcode('[ajax_load_more post_type="post" category="blog" order="DESC" posts_per_page="3" scroll="false" transition="fade" button_label="Read more posts"]'); ?>
        </div>
      </div>
      
      <div class="row cf" id="instagram-row">
        <div class="span4 col">
           <img src="http://photos-e.ak.instagram.com/hphotos-ak-xap1/10549827_312584798866388_1762754338_n.jpg" alt="instagram" />
        </div>
        <div class="span2 col med-col">
          <img src="http://photos-g.ak.instagram.com/hphotos-ak-xap1/10549905_478176298984654_762113337_n.jpg" alt="instagram" />
        </div>
        <div class="span2 col">
          <img src="http://photos-h.ak.instagram.com/hphotos-ak-xap1/10518249_506952616102127_969891336_n.jpg" alt="instagram" />
        </div>
        <div class="span2 col med-col">
          <img src="http://distilleryimage9.ak.instagram.com/a6207d58bad811e28b6c22000a1f8db8_7.jpg" alt="instagram" />
        </div>
        <div class="span2 col">
          <img src="http://photos-g.ak.instagram.com/hphotos-ak-xpf1/10561013_291531551030158_1482947675_n.jpg" alt="instagram" />
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
