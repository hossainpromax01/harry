<?php 
$gallery_post_img= function_exists('get_field') ? get_field('post_gallery_image') : Null;
// var_dump($gallery_post_img);
?>
<article id="<?php the_ID(); ?>" <?php post_class("harry-post-format-gallery postbox__item format-image mb-50 transition-3"); ?>>
      <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
            <div class="swiper-wrapper">
                  <?php foreach($gallery_post_img as $gallery_item): ?>
                  <div class="postbox__slider-item swiper-slide">
                         <img src="<?php echo esc_html($gallery_item['url']); ?>" alt="">
                   </div>
                   
                   <?php endforeach; ?>
                  </div>
                  <div class="postbox__nav">
                        <button class="postbox-slider-button-next"><i class="fa-regular fa-angle-right"></i></button>
                         <button class="postbox-slider-button-prev"><i class="fa-regular fa-angle-left"></i></button>
                  </div>
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