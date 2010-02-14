<?php get_header(); ?>


<div id="main">

  <div id="content">
    <div id="left">
<?php
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('author=2' . '&paged=' . $paged);
?>
<div class="postleft">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 <div class="author"><p>Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, <br />by <?php the_author() ?></p></div>

 <?php the_content(__('Read more'));?>

 <div class="postmeta">
  <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><!-- | <?php trackback_rdf(); ?>--></p>

  
 </div><!-- end #postmeta -->

 <?php endwhile; else: ?>
  <p><strong>There has been a glitch in the Matrix.</strong></p>
  <p>Sorry, there's nothing to see right now.</p>
 <?php endif; ?>

 <div class="postnavigation">
  <p><?php next_posts_link('&laquo; Older Entries') ?><?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
 </div> <!-- end #postnavigation -->

</div> <!-- end #post -->
<?php wp_reset_query(); ?>

</div>
    <div id="middle">
<?php get_sidebar(); ?>

</div>
    <div id="right">

<?php
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('author=1' . '&paged=' . $paged);
?>
<div class="postright">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 <div class="author"><p>Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, <br />by <?php the_author() ?></p></div>

 <?php the_content(__('Read more'));?>

 <div class="postmeta">
  <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><!-- | <?php trackback_rdf(); ?>--></p>


 </div><!-- end #postmeta -->

 <?php endwhile; else: ?>
  <p><strong>There has been a glitch in the Matrix.</strong></p>
  <p>Sorry, there's nothing to see right now.</p>
 <?php endif; ?>

 <div class="postnavigation">
  <p><?php next_posts_link('&laquo; Older Entries') ?><?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
 </div> <!-- end #postnavigation -->

</div> <!-- end #post -->
<?php wp_reset_query(); ?>

</div>
  </div>






<div class="clear"></div>



<?php get_footer(); ?>