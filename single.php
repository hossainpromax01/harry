<?php get_header(); ?>
 <!-- postbox details area start -->
 <section class="tp-standard-post-format postbox__area grey-bg-4 pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="postbox__wrappers">
                        <div class="postbox__mains">
                           <div class="row">
                              <div class="col-lg-8">
                                 <div class="postbox__main-wrapper">
                                 <?php 
                                    if ( have_posts() ) {
                                          while ( have_posts() ) {
                                                the_post(); 
                                          ?>
                                                <?php echo get_template_part('template-parts/content',get_post_format()); ?>
                                          <?php
                                          } 
                                    } 
                                    ?>
                                    
                                    <div class="postbox__author d-sm-flex align-items-start white-bg mb-95">
                                       <div class="postbox__author-thumb">
                                          <a href="#">
                                             <img src="assets/img/users/user-14.jpg" alt="">
                                          </a>
                                       </div>
                                       <div class="postbox__author-content">
                                          <h3 class="postbox__author-title">
                                             <a href="#">Colene Landin</a>
                                          </h3>
                                          <p>Digital content wrangler | UX enthusiast | Recovering educator & GIF hockey fan  Oxford comma or death.!</p>

                                          <div class="postbox__author-social d-flex align-items-center">
                                             <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                             <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                             <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="postbox__related mb-65">
                                       <h3 class="postbox__related-title">You may also like</h3>

                                       <div class="row">
                                          <div class="col-xl-6 col-lg-12 col-md-6">
                                             <div class="blog__grid-item">
                                                <div class="blog__item-10 white-bg transition-3 mb-30 fix">
                                                   <div class="blog__thumb-10 w-img fix">
                                                      <a href="blog-details.html">
                                                         <img src="assets/img/blog/grid/blog-grid-1.jpg" alt="">
                                                      </a>
                                                      <div class="blog__tag-10">
                                                         <a href="#">Work Life</a>
                                                      </div>
                                                   </div>
                                                   <div class="blog__content-10">
                                                      <div class="blog__content-10-top">
                                                         <div class="blog__meta-10-wrapper d-flex align-items-center">
                                                            <div class="blog__meta-10 has-date">
                                                               <span>
                                                                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                     <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                     <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  </svg> January 21, 2022
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <h3 class="blog__title-10">
                                                            <a href="blog-details.html">How to Create an Effective Design Portfolio</a>
                                                         </h3>
                           
                                                         <p>Lorem ipsum is simply dummy text ipsum been dummy...</p>
                                                      </div>
                                                      <div class="blog__content-10-bottom d-flex align-items-center justify-content-between">
                                                         <div class="blog__meta-author-10 d-flex align-items-center">
                                                            <div class="blog__meta-author-thumb-10">
                                                               <a href="#">
                                                                  <img src="assets/img/users/user-2.jpg" alt="">
                                                               </a>
                                                            </div>
                                                            <div class="blog__meta-author-content-10">
                                                               <span>By<a href="#"> Jason</a></span>
                                                            </div>
                                                         </div>
                                                         <div class="blog__meta-10 blog-meta-10-2">
                                                            <span>
                                                               <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M12.9718 6.66668C12.9741 7.54659 12.769 8.4146 12.3732 9.20001C11.9039 10.1412 11.1825 10.9328 10.2897 11.4862C9.39697 12.0396 8.36813 12.3329 7.31844 12.3333C6.4406 12.3356 5.57463 12.13 4.79106 11.7333L1 13L2.26369 9.20001C1.86791 8.4146 1.66281 7.54659 1.6651 6.66668C1.66551 5.61452 1.95815 4.58325 2.51025 3.68838C3.06236 2.79352 3.85211 2.0704 4.79106 1.60002C5.57463 1.20331 6.4406 0.997725 7.31844 1.00002H7.65099C9.03729 1.07668 10.3467 1.66319 11.3284 2.64726C12.3102 3.63132 12.8953 4.94378 12.9718 6.33334V6.66668Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                               </svg>35
                                                            </span>
                                                            <span>
                                                               <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M11.0443 7.00397C11.0443 8.43962 9.88694 9.59974 8.45466 9.59974C7.02238 9.59974 5.86499 8.43962 5.86499 7.00397C5.86499 5.56832 7.02238 4.4082 8.45466 4.4082C9.88694 4.4082 11.0443 5.56832 11.0443 7.00397Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  <path d="M8.45466 13C11.0082 13 13.3881 11.4918 15.0446 8.88157C15.6956 7.85921 15.6956 6.14078 15.0446 5.11843C13.3881 2.50816 11.0082 1 8.45466 1C5.90115 1 3.52126 2.50816 1.86474 5.11843C1.21371 6.14078 1.21371 7.85921 1.86474 8.88157C3.52126 11.4918 5.90115 13 8.45466 13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                               </svg>234,5k
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-6 col-lg-12 col-md-6">
                                             <div class="blog__grid-item">
                                                <div class="blog__item-10 white-bg transition-3 mb-30 fix">
                                                   <div class="blog__thumb-10 w-img fix">
                                                      <a href="blog-details.html">
                                                         <img src="assets/img/blog/grid/blog-grid-2.jpg" alt="">
                                                      </a>
                                                      <div class="blog__tag-10">
                                                         <a href="#">Music</a>
                                                      </div>
                                                   </div>
                                                   <div class="blog__content-10">
                                                      <div class="blog__content-10-top">
                                                         <div class="blog__meta-10-wrapper d-flex align-items-center">
                                                            <div class="blog__meta-10 has-date">
                                                               <span>
                                                                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                     <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                     <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  </svg> January 22, 2022
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <h3 class="blog__title-10">
                                                            <a href="blog-details.html">Look at usual things with unusual eyes</a>
                                                         </h3>
                           
                                                         <p>Lorem ipsum is simply dummy text ipsum been dummy...</p>
                                                      </div>
                                                      <div class="blog__content-10-bottom d-flex align-items-center justify-content-between">
                                                         <div class="blog__meta-author-10 d-flex align-items-center">
                                                            <div class="blog__meta-author-thumb-10">
                                                               <a href="#">
                                                                  <img src="assets/img/users/user-1.jpg" alt="">
                                                               </a>
                                                            </div>
                                                            <div class="blog__meta-author-content-10">
                                                               <span>By<a href="#"> Bivouac</a></span>
                                                            </div>
                                                         </div>
                                                         <div class="blog__meta-10 blog-meta-10-2">
                                                            <span>
                                                               <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M12.9718 6.66668C12.9741 7.54659 12.769 8.4146 12.3732 9.20001C11.9039 10.1412 11.1825 10.9328 10.2897 11.4862C9.39697 12.0396 8.36813 12.3329 7.31844 12.3333C6.4406 12.3356 5.57463 12.13 4.79106 11.7333L1 13L2.26369 9.20001C1.86791 8.4146 1.66281 7.54659 1.6651 6.66668C1.66551 5.61452 1.95815 4.58325 2.51025 3.68838C3.06236 2.79352 3.85211 2.0704 4.79106 1.60002C5.57463 1.20331 6.4406 0.997725 7.31844 1.00002H7.65099C9.03729 1.07668 10.3467 1.66319 11.3284 2.64726C12.3102 3.63132 12.8953 4.94378 12.9718 6.33334V6.66668Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                               </svg>35
                                                            </span>
                                                            <span>
                                                               <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M11.0443 7.00397C11.0443 8.43962 9.88694 9.59974 8.45466 9.59974C7.02238 9.59974 5.86499 8.43962 5.86499 7.00397C5.86499 5.56832 7.02238 4.4082 8.45466 4.4082C9.88694 4.4082 11.0443 5.56832 11.0443 7.00397Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  <path d="M8.45466 13C11.0082 13 13.3881 11.4918 15.0446 8.88157C15.6956 7.85921 15.6956 6.14078 15.0446 5.11843C13.3881 2.50816 11.0082 1 8.45466 1C5.90115 1 3.52126 2.50816 1.86474 5.11843C1.21371 6.14078 1.21371 7.85921 1.86474 8.88157C3.52126 11.4918 5.90115 13 8.45466 13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                               </svg>234,5k
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="postbox__comment-wrapper">
                                       <div class="postbox__comment mb-95">
                                          <h3 class="postbox__comment-title">Comments (2)</h3>
                                          <ul>
                                             <li>
                                                <div class="postbox__comment-box d-sm-flex align-items-start">
                                                      <div class="postbox__comment-info">
                                                         <div class="postbox__comment-avater">
                                                            <img src="assets/img/users/user-17.jpg" alt="">
                                                         </div>
                                                      </div>
                                                      <div class="postbox__comment-text ">
                                                         <div class="postbox__comment-name">
                                                            <span class="post-meta"> July 14, 2022</span>
                                                            <h5><a href="#">Eleanor Fant</a></h5>
                                                         </div>
                                                         <p>One’s of the best template out of there. design, code quality, updates etc everything you needs guys, buy it you won’t regret it!</p>
                                                         <div class="postbox__comment-reply">
                                                            <a href="#">Reply</a>
                                                         </div>
                                                   </div>
                                                </div>
                                                <ul class="children">
                                                   <li>
                                                      <div class="postbox__comment-box d-sm-flex align-items-start">
                                                         <div class="postbox__comment-info">
                                                            <div class="postbox__comment-avater">
                                                               <img src="assets/img/users/user-19.jpg" alt="">
                                                            </div>
                                                         </div>
                                                         <div class="postbox__comment-text ">
                                                            <div class="postbox__comment-name">
                                                               <span class="post-meta"> July 14, 2022</span>
                                                               <h5><a href="#">Alexander Ljung</a></h5>
                                                            </div>
                                                            <p>This theme is super awesome! But I had one small issue with link option in parallax portfolio. The other day! </p>
                                                            <div class="postbox__comment-reply">
                                                               <a href="#">Reply</a>
                                                            </div>
                                                      </div>
                                                   </div>
                                                   </li>
                                                </ul>
                                             </li>
                                             <li>
                                                <div class="postbox__comment-box d-sm-flex align-items-start">
                                                      <div class="postbox__comment-info">
                                                         <div class="postbox__comment-avater">
                                                            <img src="assets/img/users/user-18.jpg" alt="">
                                                         </div>
                                                      </div>
                                                      <div class="postbox__comment-text ">
                                                         <div class="postbox__comment-name">
                                                            <span class="post-meta"> July 14, 2022</span>
                                                            <h5><a href="#">Shahnewaz Sakil</a></h5>
                                                         </div>
                                                         <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked</p>
                                                         <div class="postbox__comment-reply">
                                                            <a href="#">Reply</a>
                                                         </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="postbox__comment-form">
                                          <h3 class="postbox__comment-form-title">Leave A Reply</h3>
                                          <p>Your email address will not be published. Required fields are marked *</p>
                                          <form action="#">
                                             <div class="row">
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                                   <div class="postbox__comment-input">
                                                      <input type="text" placeholder="Name*">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                                   <div class="postbox__comment-input">
                                                      <input type="email" placeholder="Email">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-12">
                                                   <div class="postbox__comment-input">
                                                      <input type="text" placeholder="Website">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                   <div class="postbox__comment-input">
                                                      <textarea placeholder="Your Comment Here..."></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                   <div class="postbox__comment-agree d-flex align-items-start mb-25">
                                                      <input class="e-check-input" type="checkbox" id="e-agree">
                                                      <label class="e-check-label" for="e-agree">Save my name, email, and website in this browser for the next time I comment.</label>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                   <div class="postbox__comment-btn">
                                                      <button type="submit" class="tp-btn">Submit Comment</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="sidebar__wrapper pl-40">
                                    <div class="sidebar__widget mb-20">
                                       <div class="sidebar__widget-content">
                                          <div class="sidebar__search">
                                             <form action="#">
                                                <div class="sidebar__search-input">
                                                   <input type="text" placeholder="Enter your keywords...">
                                                   <button type="submit">
                                                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>
                                                   </button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sidebar__widget mb-45">
                                       <div class="sidebar__widget-content">
                                          <div class="sidebar__author">
                                             <div class="sidebar__author-thumb">
                                                <img src="assets/img/blog/sidebar/sidebar-author.jpg" alt="">
                                             </div>
                                             <div class="sidebar__author-content">
                                                <h3 class="sidebar__author-title">Colene Landin</h3>
                                                <p>Lorem ipsum dolor ametare elit consectetur adipiscing Aenean pellentesque.</p>
            
                                                <div class="sidebar__author-social d-flex align-items-center justify-content-center">
                                                   <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                   <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                   <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sidebar__widget mb-45">
                                       <h3 class="sidebar__widget-title">Category</h3>
                                       <div class="sidebar__widget-content">
                                          <ul>
                                             <li><a href="blog.html">Business <span>10</span></a></li>
                                             <li><a href="blog.html">Cleaning <span>08</span></a></li>
                                             <li><a href="blog.html">Consultant <span>24</span></a></li>
                                             <li><a href="blog.html">Creative <span>37</span></a></li>
                                             <li><a href="blog.html">Technology <span>103</span></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="sidebar__widget mb-45">
                                       <h3 class="sidebar__widget-title">Recent Post</h3>
                                       <div class="sidebar__widget-content">
                                          <div class="sidebar__post">
                                             <div class="rc__post d-flex align-items-center">
                                                <div class="rc__post-thumb">
                                                   <a href="blog-details.html"><img src="assets/img/blog/sidebar/blog-sm-1.jpg" alt=""></a>
                                                </div>
                                                <div class="rc__post-content">
                                                   <h3 class="rc__post-title">
                                                      <a href="blog-details.html">Business meeting 2021 in San Francisco</a>
                                                   </h3>
                                                   <div class="rc__meta">
                                                      <span>
                                                         <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         </svg>July 21, 2022
                                                      </span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="rc__post d-flex align-items-center">
                                                <div class="rc__post-thumb">
                                                   <a href="blog-details.html"><img src="assets/img/blog/sidebar/blog-sm-2.jpg" alt=""></a>
                                                </div>
                                                <div class="rc__post-content">
                                                   <h3 class="rc__post-title">
                                                      <a href="blog-details.html">Developing privacy user-centric apps</a>
                                                   </h3>
                                                   <div class="rc__meta">
                                                      <span>
                                                         <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         </svg>July 21, 2022
                                                      </span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="rc__post d-flex align-items-center">
                                                <div class="rc__post-thumb">
                                                   <a href="blog-details.html"><img src="assets/img/blog/sidebar/blog-sm-3.jpg" alt=""></a>
                                                </div>
                                                <div class="rc__post-content">
                                                   <h3 class="rc__post-title">
                                                      <a href="blog-details.html">Starting and Growing  Web Design in 2022</a>
                                                   </h3>
                                                   <div class="rc__meta">
                                                      <span>
                                                         <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         </svg>July 21, 2022
                                                      </span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sidebar__widget mb-40">
                                       <h3 class="sidebar__widget-title">Tags</h3>
                                       <div class="sidebar__widget-content">
                                          <div class="tagcloud">
                                             <a href="#">Techology</a>
                                             <a href="#">Food</a>
                                             <a href="#">Personality</a>
                                             <a href="#">Life Style</a>
                                             <a href="#">Travel</a>
                                             <a href="#">Nature</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- postbox details area end -->

         <?php get_footer(); ?>