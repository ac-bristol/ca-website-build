<li>
  <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail('large'); ?> 
    </a>
  <?php } ?>
  
  <h3 class="small-header">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?>
    </a>
  </h3>
  
  <?php the_excerpt(); ?>
  
  <p class="entry-meta"><?php the_time("F d, Y"); ?></p>

</li>