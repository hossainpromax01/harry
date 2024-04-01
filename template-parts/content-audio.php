<?php 
$audio_post= function_exists('get_field') ? get_field('audio_post_url') : Null;
?>
<article id="<?php the_ID(); ?>" <?php post_class("harry-post-format-audio postbox__item format-audio mb-50 transition-3"); ?>>
      <div class="postbox__thumb postbox__audio w-img p-relative">
      <?php echo wp_oembed_get($audio_post); ?>
      </div>
      <div class="postbox__content">
            <!-- post meta -->
            <?php echo get_template_part('template-parts/blog/meta'); ?>
            <h3 class="postbox__title">
                  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </h3>
            <div class="postbox__text">
                  <?php the_excerpt(); ?>
            </div>
            <div class="postbox__read-more">
                  <a href=<?php the_permalink() ?>" class="tp-btn"><?php echo esc_html('Read More','harry'); ?></a>                               
            </div>
      </div>
</article>