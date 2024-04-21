<?php


//harry header 
function harry_header(){
      $harry_header_version = get_theme_mod( 'header_select', __('header-01','harry'));
      // var_dump($harry_header_version);
      if($harry_header_version=='header-01'){
            get_template_part('template-parts/header/header-1');
      }
      elseif($harry_header_version=='header-02'){
            get_template_part('template-parts/header/header-2');
      }
      elseif($harry_header_version=='header-03'){
            get_template_part('template-parts/header/header-3');
      }
      elseif($harry_header_version=='header-04'){
            get_template_part('template-parts/header/header-4');
      }
      else{
            get_template_part('template-parts/header/header-5');
      }
	
}

//harry offcanvas 
function harray_offcanvas(){
	get_template_part('template-parts/header/off-canvas');
}
//harry header search 
function harray_header_search(){
	get_template_part('template-parts/header/header-search');
}
// harry footer 
function harry_footer(){
      get_template_part('template-parts/footer/footer-01');
}
// harry main menu logo
function harry_logo(){
      $header_logo = get_theme_mod( 'header_logo', get_template_directory_uri().'/assets/img/logo/logo-black.svg' );
      ?>
            <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo esc_html($header_logo); ?>" alt="<?php echo bloginfo(); ?>">
            </a>
      <?php
}
// harry search template menu logo
function harry_search_logo(){
      $header_search_logo = get_theme_mod( 'header_search_logo', get_template_directory_uri().'/assets/img/logo/logo.svg' );
      ?>
            <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo esc_html($header_search_logo); ?>" alt="<?php echo bloginfo(); ?>">
            </a>
      <?php
}
// harry off canvas logo
function harry_off_canvas_logo(){
      $off_canvas_logo = get_theme_mod( 'off_canvas_header_logo', get_template_directory_uri().'/assets/img/logo/logo-black.svg' );
      ?>
            <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo esc_html($off_canvas_logo); ?>" alt="<?php echo bloginfo(); ?>">
            </a>
      <?php
}

// harry off canvas social
function harry_off_canvas_all_social(){
      $harry_facebook = get_theme_mod( 'harry_facebook', __('#','harry'));
      $harry_youtube = get_theme_mod( 'harry_youtube', __('#','harry') );
      $harry_twitter = get_theme_mod( 'harry_twitter', __('#','harry') );
      $harry_instagram = get_theme_mod( 'harry_instagram', __('#','harry') );
      $harry_linkedin = get_theme_mod( 'harry_linkedin', __('#','harry') );
      $harry_vimeo = get_theme_mod( 'harry_vimeo', __('#','harry') );
      $harry_github = get_theme_mod( 'harry_github', __('#','harry') );
      // var_dump($harry_indeed);
      ?>
            <?php if(!empty($harry_facebook)) : ?>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>
            <?php if(!empty($harry_youtube)) : ?>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <?php endif; ?>
            <?php if(!empty($harry_twitter)) : ?>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>
            <?php if(!empty($harry_instagram)) : ?>
            <a href="#"><i class="fab fa-instagram"></i></a>  
            <?php endif; ?>
            <?php if(!empty($harry_linkedin)) : ?> 
            <a href="#"><i class="fab fa-linkedin"></i></a>  
            <?php endif; ?>
            <?php if(!empty($harry_vimeo)) : ?> 
            <a href="#"><i class="fab fa-vimeo"></i></a>   
            <?php endif; ?>
            <?php if(!empty($harry_github)) : ?>
            <a href="#"><i class="fab fa-github"></i></a>   
            <?php endif; ?>
      <?php
}
//harry main menu 
function main_nav_menu(){
     wp_nav_menu( array(
	'theme_location'  => 'primary_menu',
      'menu_class'      => '',
      'menu_id'         => '',
      'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
      'walker'     => new Harry_Walker_Nav_Menu,
) ); 
}
//harry off canvas menu 
function main_off_canvas_menu(){
      wp_nav_menu( array(
       'theme_location'  => 'off_canvas_menu',
       'menu_class'      => '',
       'menu_id'         => '',
       'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
       'walker'     => new Harry_Walker_Nav_Menu,
 ) ); 
 }

// Footer Copyright
function footer_copyright_information(){
      $footer_copyright_content = get_theme_mod( 'footer_copyright_text', __('© 2022 Harry All Rights Reserved.','harry') );
      ?>
            <p>
                   <?php echo wp_kses_post($footer_copyright_content); ?>
            </p>
      <?php
}
//Footer menu 
function footer_menu(){
      wp_nav_menu( array(
       'theme_location'  => 'footer_menu',
       'menu_class'      => '',
       'menu_id'         => '',
       'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
       'walker'     => new Harry_Walker_Nav_Menu,
 ) ); 
 }
// harry single post dynamic
function harry_tags(){
	$post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            ?>
            <a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name; ?></a>
            <?php
        }
    } else {
        ?>
        <i>No tags found</i>
        <?php
    }
}



// harry post social share 
function harry_social_share(){ ?>
          <a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" target="_blank">
              <i class="fa-brands fa-linkedin-in"></i>
          </a>
          <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
              <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
              <i class="fab fa-facebook-f"></i>
          </a>
  <?php
  }
 // harry pagination
 function harry_pagination(){
      $pages = paginate_links( array( 
          'type' => 'array',
          'prev_text'    => __('<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M14.3767 5.55249L1.75421 5.55249" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
       </svg>                                       
       Prev'),
          'next_text'    => __('Next
          <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M9.82422 1L14.3767 5.5525L9.82422 10.105" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
             <path d="M1.625 5.55249H14.2475" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg> '),
      ) );
          if( $pages ) {
          echo '<nav><ul>';
          foreach ( $pages as $page ) {
              echo "<li>$page</li>";
          }
          echo '</ul></nav>';
      }
  }



// track_post_views
function track_post_views() {
      if (is_single()) {
          global $post;
          $post_id = $post->ID;
  
          $views = get_post_meta($post_id, 'post_views', true);
          $views = $views ? $views : 0;
  
          $views++;
          update_post_meta($post_id, 'post_views', $views);
      }
  }
  
  add_action('wp_head', 'track_post_views');
  
  // display_post_views 
  function display_post_views() {
      if (is_single()) {
          $post_views = get_post_meta(get_the_ID(), 'post_views', true);
          echo ($post_views ? $post_views : 0);
      }
  }