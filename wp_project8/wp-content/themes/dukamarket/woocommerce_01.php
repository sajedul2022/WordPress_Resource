<?php get_template_part('template-parts/header/header', 'header'); ?>

    <main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height-2" data-background="assets/img/banner/page-banner-4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">Blog</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>Blog</span>
                                         </li>
                                      </ul>
                                   </nav> 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- news-detalis-area-start -->
        <div class="blog-area mt-120 mb-75">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-7">
                    <div class="row">

                    <!-- blog single  -->
                        

                            <!-- single content link -->

                            <?php get_template_part('template-parts/content/content', 'content')?>

                        
                        
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination text-center pt-30 pb-30">
                                <nav>
                                   <ul>
                                      <li>
                                         <a href="blog.html" class="active">1</a>
                                      </li>
                                      <li>
                                         <a href="blog.html">2</a>
                                      </li>
                                      <li>
                                         <a href="blog.html">3</a>
                                      </li>
                                     <li>
                                        <a href="blog.html">5</a>
                                     </li>
                                     <li>
                                        <a href="blog.html">6</a>
                                     </li>
                                      <li>
                                         <a href="shop.html">
                                            <i class="fal fa-angle-double-right"></i>
                                         </a>
                                      </li>
                                   </ul>
                                 </nav>
                             </div>
                        </div>
                    </div>
                  </div>
                  
                    <!-- Sidebar  -->
                    <?php  get_template_part('template-parts/sidebar/sidebar', 'sidebar'); ?>



               </div>
            </div>
         </div>
         <!-- news-detalis-area-end  -->


        <!-- Socail, Subscribe, App -->
        <?php  get_template_part('template-parts/footer/social_subscribe', 'subscribe'); ?>


    </main>


    <!-- footer -->
    <?php  get_template_part('template-parts/footer/footer', 'footer'); ?>
