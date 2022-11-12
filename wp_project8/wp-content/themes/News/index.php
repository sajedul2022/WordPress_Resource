<!-- Header -->
  <?php get_header()?>

        <section id="sliderSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="slick_slider">
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="<?php echo get_template_directory_uri() ?>/images/slider_img4.jpg" alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui.</p>
                            </div>
                        </div>
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="<?php echo get_template_directory_uri() ?>/images/slider_img2.jpg" alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="<?php echo get_template_directory_uri() ?>/images/slider_img3.jpg" alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="<?php echo get_template_directory_uri() ?>/images/slider_img1.jpg" alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="latest_post">
                        <h2><span>Latest post</span></h2>
                        <div class="latest_post_container">
                            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                            <ul class="latest_postnav">
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Israel, Arab nations deepen cooperation</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Revival of rivals’ talks: Iraqi PM arrives</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/slider_img1.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Tensions between Iran and Saudi Arabia rose 2019</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/slider_img2.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> An
                                                Iranian official told Reuters "the resumption</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                The fifth round of talks were held in April</a> </div>
                                    </div>
                                </li>
                            </ul>
                            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="left_content">
                        <div class="single_post_content">
                            <h2><span>Business</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav  wow fadeInDown">

                                <!-- post loop -->
                                    <?php 
                                        $sql = new WP_Query(array(
                                            'post_type'=> 'slider',
                                            'posts_per_page' => 1
                                        ));
                                        if($sql->have_posts()) :
                                            while ($sql->have_posts()): $sql->the_post();       
                                    ?>

                                    <li>
                                        <figure class="bsbig_fig"> <a href="pages/single_page.html"
                                                class="featured_img"> 
                                                <?php the_post_thumbnail() ?>
                                                <!-- <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/featured_img1.jpg"> -->
                                                <span class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">Israel, Arab nations deepen
                                                    cooperation
                                                </a> </figcaption>
                                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus,
                                                egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                        </figure>
                                    </li>
                                    <?php 
                                            endwhile;
                                        endif;
					                ?>

                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Revival of rivals’ talks: Iraqi PM arrives</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Tensions between Iran and Saudi Arabia rose
                                                    2019</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> An Iranian official told Reuters "the resumption
                                                </a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> The fifth round of talks were held in April
                                                </a> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fashion_technology_area">
                            <div class="fashion">
                                <div class="single_post_content">
                                    <h2><span>Fashion</span></h2>
                                    <ul class="business_catgnav wow fadeInDown">
                                        <li>
                                            <figure class="bsbig_fig"> <a href="pages/single_page.html"
                                                    class="featured_img"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/featured_img2.jpg">
                                                    <span class="overlay"></span> </a>
                                                <figcaption> <a href="pages/single_page.html">Kadhimi's visit comes as a
                                                        months-long impasse</a> </figcaption>
                                                <p>An Iranian official told Reuters he fifth round of talks were held in
                                                    April
                                                    severity and scale of the conflict UN human rights chief Michelle
                                                    The toll included those killed as a direct...</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> An Iranian official told Reuters</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Fifth round of talks were held in April
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> severity and scale of the conflict
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> UN human rights chief Michelle
                                                    </a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="technology">
                                <div class="single_post_content">
                                    <h2><span>Technology</span></h2>
                                    <ul class="business_catgnav">
                                        <li>
                                            <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="featured_img"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/featured_img3.jpg">
                                                    <span class="overlay"></span> </a>
                                                <figcaption> <a href="pages/single_page.html">Revival of rivals’ talks:
                                                        Iraqi PM arrives
                                                    </a> </figcaption>
                                                <p>Tensions between Iran and Saudi Arabia rose 2019.An Iranian official
                                                    told Reuters "the resumption.The fifth round of talks were held in
                                                    April.Kadhimi's visit comes as a months-long impasse...</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Tensions between Iran and Saudi Arabia rose
                                                        2019
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> An Iranian official told Reuters "the
                                                        resumption
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> The fifth round of talks were held in April
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Kadhimi's visit comes as a months-long
                                                        impasseTensions between Iran and Saudi </a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_post_content">
                            <h2><span>Photography</span></h2>
                            <ul class="photograph_nav  wow fadeInDown">
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img2.jpg"
                                                title="Photography Ttile 1"> <img
                                                    src="<?php echo get_template_directory_uri() ?>/images/photograph_img2.jpg"
                                                    alt="" /></a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img3.jpg"
                                                title="Photography Ttile 2"> <img
                                                    src="<?php echo get_template_directory_uri() ?>/images/photograph_img3.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img4.jpg"
                                                title="Photography Ttile 3"> <img
                                                    src="<?php echo get_template_directory_uri() ?>/images/photograph_img4.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img4.jpg"
                                                title="Photography Ttile 4"> <img
                                                    src="<?php echo get_template_directory_uri() ?>/images/photograph_img4.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img2.jpg"
                                                title="Photography Ttile 5"> <img
                                                    src="<?php echo get_template_directory_uri() ?>/images/photograph_img2.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img3.jpg"
                                                title="Photography Ttile 6"> <img
                                                    src="<?php echo get_template_directory_uri() ?>/images/photograph_img3.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content">
                            <h2><span>Games</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav">
                                    <li>
                                        <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img"
                                                href="pages/single_page.html"> <img
                                                    src="<?php echo get_template_directory_uri() ?>/images/featured_img1.jpg"
                                                    alt=""> <span class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">Arabia rose 2019
                                                    An Iranian official told Reuters </a> </figcaption>
                                            <p>Nunc tincidunt,"the resumption.The fifth round of talks were held in
                                                April.Kadhimi's visit comes as a months-long impasse...</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title">
                                                    Kadhimi's visit comes as a months-long impasse</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> An Iranian official told Reuters
                                                </a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Round of talks were held in April
                                                </a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Severity and scale of the conflict
                                                </a> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <aside class="right_content">
                        <div class="single_sidebar">
                            <h2><span>Popular Post</span></h2>
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> UN
                                                human rights chief Michelle </a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Revival of rivals’ talks: Iraqi PM arrives
                                            </a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Tensions between Iran and Saudi Arabia rose 2019
                                            </a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt=""
                                                src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                        </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> An
                                                Iranian official told Reuters "the resumption
                                            </a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single_sidebar">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#category" aria-controls="home"
                                        role="tab" data-toggle="tab">Category</a></li>
                                <li role="presentation"><a href="#video" aria-controls="profile" role="tab"
                                        data-toggle="tab">Video</a></li>
                                <li role="presentation"><a href="#comments" aria-controls="messages" role="tab"
                                        data-toggle="tab">Comments</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="category">
                                    <ul>
                                        <li class="cat-item"><a href="#">Sports</a></li>
                                        <li class="cat-item"><a href="#">Fashion</a></li>
                                        <li class="cat-item"><a href="#">Business</a></li>
                                        <li class="cat-item"><a href="#">Technology</a></li>
                                        <li class="cat-item"><a href="#">Games</a></li>
                                        <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                                        <li class="cat-item"><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="video">
                                    <div class="vide_area">
                                        <iframe width="100%" height="250"
                                            src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="comments">
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Revival of rivals’ talks: Iraqi PM arrives
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Tensions between Iran and Saudi Arabia rose
                                                        2019
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img1.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> An Iranian official told Reuters "the
                                                        resumption
                                                    </a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="<?php echo get_template_directory_uri()?>/images/post_img2.jpg">
                                                </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> The fifth round of talks were held in April
                                                    </a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Sponsor</span></h2>
                            <a class="sideAdd" href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/add_img.jpg" alt=""></a>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Category Archive</span></h2>
                            <select class="catgArchive">
                                <option>Select Category</option>
                                <option>Life styles</option>
                                <option>Sports</option>
                                <option>Technology</option>
                                <option>Treads</option>
                            </select>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Links</span></h2>
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Rss Feed</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Life &amp; Style</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

       <!-- footer -->

       <?php get_footer(); ?>