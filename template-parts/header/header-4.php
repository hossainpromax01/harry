 <?php 
      $header_black_logo = get_theme_mod( 'header_logo', get_template_directory_uri().'/assets/img/logo/logo-black.svg' );
      $header_white_logo = get_theme_mod( 'header_search_logo', get_template_directory_uri().'/assets/img/logo/logo.svg' );
 ?>
 <!-- header area start -->
 <header>
         <div class="header__area header__transparent">
            <div class="header__bottom header__bottom-border-3 header__sticky" id="header-sticky">
               <div class="container">
                  <div class="mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-5 col-8">
                           <div class="logo logo-border">
                              <a href="index.html">
                                 <img class="logo-light" src="<?php echo($header_white_logo); ?>" alt="logo">
                                 <img class="logo-dark" src="<?php echo($header_black_logo); ?>" alt="logo">
                              </a>
                           </div>
                        </div>
                        <div class="col-xxl-7 col-xl-8 col-lg-8 d-none d-lg-block">
                           <div class="main-menu pl-55 main-menu-ff-space">
                              <nav id="mobile-menu">
                                    <?php main_nav_menu(); ?>
                              </nav>
                              <!-- for wp -->
                              <div class="header__hamburger ml-50 d-none">
                                 <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                           <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                              <div class="header__action d-none d-xl-block">
                                 <ul>
                                    <li>
                                       <a href="javascript:void(0);" class="search-open-btn">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>                                          
                                       </a>
                                    </li>
                                    <li>
                                       <button type="button"  class="hamburger-btn offcanvas-open-btn">
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                       </button>
                                    </li>
                                 </ul>
                              </div>
                              <div class="header__hamburger ml-50 d-xl-none">
                                 <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- offcanvas area start -->
            <?php harray_offcanvas(); ?>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- search popup start -->
            <?php harray_header_search(); ?>
      <!-- search popup end -->