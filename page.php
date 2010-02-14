<?php get_header(); ?>
<div id="main">
  <div id="content">
 <div id="page" class="fullpage">
 <div class="post">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 <?php the_content(__('Read more'));?>	
<?php endwhile; else: ?>
 <p>Sorry, nothing matches that criteria.</p>
<?php endif; ?>
</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>