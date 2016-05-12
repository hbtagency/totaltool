<?php 
/*
* Template Name: Template default
*/
get_header(); 
?>


<section class="slider">
    <div class="container">
    <?php echo do_shortcode("[rev_slider landing_slider]")?>
    </div>
</section>  

<!-- Terms and conditions -->
<div class="modal fade" id="terms_conditions" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Total Tools INSIDER Terms &amp; Conditions</h4>
        </div>
        <div class="modal-body">
             <?php 
                $my_postid = 74;//This is page id or post id
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
             ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<!-- Privacy -->
<div class="modal fade" id="privacy" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Privacy Policy</h4>
        </div>
        <div class="modal-body">
             <?php 
                $my_postid = 76;//This is page id or post id
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
             ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>



<div class="container">
  <section id="primary" class="wrap-content">
        <main id="main" class="site-main">
        <?php if ( have_posts() ) {
            while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                </div>
            </article>
            <?php endwhile;
        } else { ?>
            <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1><?php _e( 'Not found', 'voidx' ); ?></h1>
            </header>
            <div class="entry-content">
                <p><?php _e( 'Sorry, but your request could not be completed.', 'voidx' ); ?></p>
                <?php get_search_form(); ?>
            </div>
            </article>
        <?php } ?>
        </main>
        <?php //voidx_post_navigation(); ?>
  </section>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>