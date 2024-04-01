<article id="<?php the_ID(); ?>" <?php post_class("harry-post-format-standard postbox__item format-image mb-50 transition-3"); ?> >
      <div class="postbox__thumb w-img">
             <a href="<?php the_permalink() ?>">
                   <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_post_thumbnail_caption(); ?>">
                   
             </a>
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