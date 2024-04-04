<?php if(is_single()) : ?>
      <article id="<?php the_ID(); ?>" <?php post_class("harry-post-standard"); ?> >  
            <div class="postbox__thumb w-img mb-30">
                  <?php the_post_thumbnail(); ?>
            </div>

                         <!-- post meta -->
             <?php echo get_template_part('template-parts/blog/meta'); ?>
              <div class="postbox__details-content-wrapper mb-60">
                  <h3 class="postbox__details-title"><?php the_title(); ?></h3>
                  <?php the_content(); ?>
            </div>
            <div class="postbox__share-wrapper mb-60">
                                       <div class="row align-items-center">
                                          <div class="col-xl-7">
                                             <div class="tagcloud tagcloud-sm">
                                                <span><?php echo esc_html__('Tags:','harry'); ?></span>
                                                <?php harry_tags() ?>
                                             </div>
                                          </div>
                                          <div class="col-xl-5">
                                             <div class="postbox__share text-xl-end">
                                                <span><?php echo esc_html__('Share On:','harry'); ?></span>
                                               <?php harry_social_share(); ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="postbox__more-navigation white-bg d-none d-md-flex justify-content-between flex-wrap mb-40">
                                       <div class="postbox__more-left d-flex align-items-center">
                                          <div class="postbox__more-icon">
                                             <a href="blog-details.html">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M7 12.9718L2.06061 8.04401C1.47727 7.46205 1.47727 6.50975 2.06061 5.92778L7 1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </a>
                                          </div>
                                          <div class="postbox__more-content">
                                             <p>Previous Article</p>
                                             <h4>
                                                <a href="blog-details.html">Traveling Solo Is Awesome</a>
                                             </h4>
                                          </div>
                                       </div>
                                       <div class="postbox__more-right d-flex align-items-center">
                                          <div class="postbox__more-content">
                                             <p>Next Article</p>
                                             <h4>
                                                <a href="blog-details.html">A Beautiful Sunday Morning</a>
                                             </h4>
                                          </div>
                                          <div class="postbox__more-icon">
                                             <a href="blog-details.html">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M1 12.9718L5.93939 8.04401C6.52273 7.46205 6.52273 6.50975 5.93939 5.92778L1 1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                                      
                                             </a>
                                          </div>
                                       </div>
                                    </div>    
      </article>
<?php else : ?>
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
                  <a href=<?php the_permalink() ?>" class="tp-btn"><?php echo esc_html__('Read More','harry'); ?></a>                               
            </div>
      </div>
</article>
<?php endif; ?>