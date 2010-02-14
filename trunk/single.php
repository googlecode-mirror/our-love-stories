<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if (is_page())  {
$style_item = 'page';
} elseif (is_single()) {
if ($post->post_author == '1') {
$style_item = 'left';
}
elseif ($post->post_author == '2') {
$style_item = 'right';
}
} else {
$style_item = 'normal';
} ?>


<div id="mainpage">

  <div id="content">

 <div id="page" class="wrap-<?php echo($style_item); ?>">

 <div class="post" id="post-<?php the_ID(); ?>">
  <h2><a href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

  <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

  <div class="postmeta">
   <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><!-- | <?php trackback_rdf(); ?>--></p>
   <p>Category <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ',', ' '); ?></p>
   
   <p>You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.</p>
  </div><!-- end #postmeta -->
<?php wp_reset_query(); ?>

 <?php comments_template(); ?>
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>


</div>


<div class="clear"></div>
<?php get_footer(); ?>