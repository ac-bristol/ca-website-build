<li>
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(100,100));}?>
  <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
</li>