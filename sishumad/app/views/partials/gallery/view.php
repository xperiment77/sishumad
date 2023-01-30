<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("gallery/add");
$can_edit = ACL::is_allowed("gallery/edit");
$can_view = ACL::is_allowed("gallery/view");
$can_delete = ACL::is_allowed("gallery/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 >
                        <!DOCTYPE html>
                        <head>
                            <script type="text/javascript">
                                window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.inspirostudio.ro\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.22"}};
                                !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])?!1:!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55358,56760,9792,65039],[55358,56760,8203,9792,65039])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
                            </script>
                            <style type="text/css">
                                img.wp-smiley,
                                img.emoji {
                                display: inline !important;
                                border: none !important;
                                box-shadow: none !important;
                                height: 1em !important;
                                width: 1em !important;
                                margin: 0 .07em !important;
                                vertical-align: -0.1em !important;
                                background: none !important;
                                padding: 0 !important;
                                }
                            </style>
                            <link rel='stylesheet' id='wpgrade-main-style-css'  href='https://www.inspirostudio.ro/wp-content/themes/mies/style.css?ver=1.7.5' type='text/css' media='all' />
                            <style id='wpgrade-main-style-inline-css' type='text/css'>
                            </style>
                            <link rel='stylesheet' id='contact-form-7-css'  href='https://www.inspirostudio.ro/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.3' type='text/css' media='all' />
                            <script type='text/javascript' src='https://www.inspirostudio.ro/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
                            <script type='text/javascript' src='https://www.inspirostudio.ro/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
                            <script type='text/javascript'>
                                /* <![CDATA[ */
                                var monsterinsights_frontend = {"js_events_tracking":"true","download_extensions":"doc,pdf,ppt,zip,xls,docx,pptx,xlsx","inbound_paths":"[]","home_url":"https:\/\/www.inspirostudio.ro","hash_tracking":"false"};
                                /* ]]> */
                            </script>
                            <script type='text/javascript' src='https://www.inspirostudio.ro/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend.min.js?ver=7.10.0'></script>
                            <link rel='https://api.w.org/' href='https://www.inspirostudio.ro/wp-json/' />
                            <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.inspirostudio.ro/xmlrpc.php?rsd" />
                            <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.inspirostudio.ro/wp-includes/wlwmanifest.xml" />
                            <meta name="generator" content="WordPress 4.9.22" />
                            <link rel='shortlink' href='https://www.inspirostudio.ro/' />
                            <link rel="alternate" type="application/json+oembed" href="https://www.inspirostudio.ro/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.inspirostudio.ro%2F" />
                            <link rel="alternate" type="text/xml+oembed" href="https://www.inspirostudio.ro/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.inspirostudio.ro%2F&#038;format=xml" />
                        </head>
                        <body class="home page-template page-template-page-templates page-template-projects-list page-template-page-templatesprojects-list-php page page-id-118 page-parent header--sticky nav-scroll-hide" data-smoothscrolling data-parallax-speed="0.5"  >
                            <div class="overlay  overlay--navigation">
                                <nav class="overlay">
                                    <div class="overlay  sidebar  sidebar-before  content--single">
                                    </div>
                                    <div class="overlay  sidebar  sidebar--overlay-after  content--single">
                                    </div>
                                </nav>
                            </div><!-- .overlay.overlay-navigation -->
                            <div class="hero  full-height  projects  projects--slider">
                                <div class="hero  js-hero-bg  hero--slider-container  js-projects-slider">
                                    <div class="hero  js-pixslider" data-slidertransition="fade" data-arrows data-bullets
                                        data-sliderautoplay=""
                                        data-sliderdelay="6000"
                                        >
                                        <div class="rsContent  table">
                                            <div class="hero hero--shadowed">
                                                <div class="hero-wrap  content  align-center">
                                                    <h1 class="hero  large">Amenajare casa cartier Borhanci</h1>
                                                    <div class="hero">
                                                        <a href="https://www.inspirostudio.ro/portfolio/amenajare-casa-cartier-borhanci/" class="btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div><!-- .hero -->
                                            <div class="hero">
                                                <img itemprop="image" src="https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4.jpg" alt="" srcset="https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4.jpg 1920w, https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4-300x200.jpg 300w, https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4-768x512.jpg 768w, https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4-1024x683.jpg 1024w, https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4-1200x800.jpg 1200w, https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4-800x533.jpg 800w, https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4-385x257.jpg 385w, https://www.inspirostudio.ro/wp-content/uploads/2020/10/living-1-4-400x267.jpg 400w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                            </div>
                                        </div>
                                        <div class="rsContent  table">
                                            <div class="hero hero--shadowed">
                                                <div class="hero-wrap  content  align-center">
                                                    <h1 class="hero  large">Amenajare in stil scandinav</h1>
                                                    <div class="hero">
                                                        <a href="https://www.inspirostudio.ro/portfolio/amenajare-apartament-cu-2-camere-in-stil-scandinav/" class="btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div><!-- .hero -->
                                            <div class="hero">
                                                <img itemprop="image" src="https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6.jpg" alt="" srcset="https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6.jpg 1920w, https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6-300x200.jpg 300w, https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6-768x512.jpg 768w, https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6-1024x683.jpg 1024w, https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6-1200x800.jpg 1200w, https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6-800x533.jpg 800w, https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6-385x257.jpg 385w, https://www.inspirostudio.ro/wp-content/uploads/2019/04/dormitor2-6-400x267.jpg 400w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                            </div>
                                        </div>
                                        <div class="rsContent  table">
                                            <div class="hero hero--shadowed">
                                                <div class="hero-wrap  content  align-center">
                                                    <h1 class="hero  large">Amenajare apartament D</h1>
                                                    <div class="hero">
                                                        <a href="https://www.inspirostudio.ro/portfolio/amenajare-apartament-d/" class="btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div><!-- .hero -->
                                            <div class="hero">
                                                <img itemprop="image" src="https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3.jpg" alt="" srcset="https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3.jpg 1920w, https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3-300x200.jpg 300w, https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3-768x512.jpg 768w, https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3-1024x683.jpg 1024w, https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3-1200x800.jpg 1200w, https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3-800x533.jpg 800w, https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3-385x257.jpg 385w, https://www.inspirostudio.ro/wp-content/uploads/2022/03/frontpage-3-400x267.jpg 400w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                            </div>
                                        </div>
                                        <div class="rsContent  table">
                                            <div class="hero hero--shadowed">
                                                <div class="hero-wrap  content  align-center">
                                                    <h1 class="hero  large">Casa cu cub verde</h1><div class="hero"><p>Wilujeng sumping</p>
                                                    </div>
                                                    <div class="hero">
                                                        <a href="https://www.inspirostudio.ro/portfolio/casa-cu-cub-verde/" class="btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div><!-- .hero -->
                                            <div class="hero">
                                                <img itemprop="image" src="https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1.jpg" alt="" srcset="https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1.jpg 1920w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1-300x200.jpg 300w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1-768x512.jpg 768w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1-1024x683.jpg 1024w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1-1200x800.jpg 1200w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1-800x533.jpg 800w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1-385x257.jpg 385w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/casa-cu-cub-verde-02-1-400x267.jpg 400w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                            </div>
                                        </div>
                                        <div class="rsContent  table">
                                            <div class="hero hero--shadowed">
                                                <div class="hero-wrap  content  align-center">
                                                    <h1 class="hero  large">Casa cu terasa inierbata</h1><div class="hero"><p>Selamat datang</p>
                                                    </div>
                                                    <div class="hero">
                                                        <a href="https://www.inspirostudio.ro/portfolio/casa-cu-terasa-inierbata/" class="btn">View Project</a>
                                                    </div>
                                                </div>
                                            </div><!-- .hero -->
                                            <div class="hero">
                                                <img itemprop="image" src="https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1.jpg" alt="" srcset="https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1.jpg 1920w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1-300x200.jpg 300w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1-768x512.jpg 768w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1-1024x683.jpg 1024w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1-1200x800.jpg 1200w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1-800x533.jpg 800w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1-385x257.jpg 385w, https://www.inspirostudio.ro/wp-content/uploads/2018/05/fatada-intrare1-1-400x267.jpg 400w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                            </div>
                                        </div>
                                    </div><!-- .hero-slider -->
                                </div>
                            </div>
                            <div class="js-arrows-templates  hidden">
                                <svg class="svg-arrow  svg-arrow--left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="42" height="16" viewBox="0 0 42 16">
                                    <path d="M41.124,9.031 C41.124,9.031 3.164,9.031 3.164,9.031 C3.164,9.031 8.725,14.607 8.725,14.607 C8.725,14.607 7.297,16.039 7.297,16.039 C7.297,16.039 0.012,8.734 0.012,8.734 C0.012,8.734 0.726,8.018 0.726,8.018 C0.726,8.018 0.012,7.302 0.012,7.302 C0.012,7.302 7.297,-0.004 7.297,-0.004 C7.297,-0.004 8.725,1.429 8.725,1.429 C8.725,1.429 3.164,7.005 3.164,7.005 C3.164,7.005 41.124,7.005 41.124,7.005 C41.124,7.005 41.124,9.031 41.124,9.031 Z" id="path-1" class="cls-2" fill-rule="evenodd"/>
                                </svg>
                                <svg class="svg-arrow  svg-arrow--right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="41" height="16" viewBox="0 0 41 16">
                                    <path d="M40.123,7.924 C40.123,7.924 40.832,8.632 40.832,8.632 C40.832,8.632 33.597,15.851 33.597,15.851 C33.597,15.851 32.179,14.436 32.179,14.436 C32.179,14.436 37.701,8.925 37.701,8.925 C37.701,8.925 0.002,8.925 0.002,8.925 C0.002,8.925 0.002,6.923 0.002,6.923 C0.002,6.923 37.701,6.923 37.701,6.923 C37.701,6.923 32.179,1.412 32.179,1.412 C32.179,1.412 33.597,-0.003 33.597,-0.003 C33.597,-0.003 40.832,7.217 40.832,7.217 C40.832,7.217 40.123,7.924 40.123,7.924 C40.123,7.924 40.123,7.924 40.123,7.924 Z" id="path-1" class="cls-2" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="js-map-pin  hidden">
                                <img class="gmap" src="https://www.inspirostudio.ro/wp-content/themes/mies/assets/images/map-pin.png" alt="Map pin"/>
                            </div>
                            <div class="covers"></div>
                            <script type='text/javascript' src='https://pxgcdn.com/js/rs/9.5.7/index.js?ver=4.9.22'></script>
                            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/jquery.gsap.min.js?ver=4.9.22'></script>
                            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js?ver=4.9.22'></script>
                            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/plugins/ScrollToPlugin.min.js?ver=4.9.22'></script>
                            <script type='text/javascript'>
                                /* <![CDATA[ */
                                var ajaxurl = "https:\/\/www.inspirostudio.ro\/wp-admin\/admin-ajax.php";
                                var objectl10n = {"tPrev":"Previous (Left arrow key)","tNext":"Next (Right arrow key)","tCounter":"of","infscrLoadingText":"","infscrReachedEnd":""};
                                var theme_name = "mies";
                                /* ]]> */
                            </script>
                            <script type='text/javascript' src='https://www.inspirostudio.ro/wp-content/themes/mies/assets/js/main.js?ver=1.7.5'></script>
                            <script type='text/javascript'>
                                /* <![CDATA[ */
                                var wpcf7 = {"apiSettings":{"root":"https:\/\/www.inspirostudio.ro\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
                                /* ]]> */
                            </script>
                            <script type='text/javascript' src='https://www.inspirostudio.ro/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.3'></script>
                            <script type='text/javascript' src='//maps.google.com/maps/api/js?v=3.exp&#038;libraries=places&#038;ver=3.22'></script>
                            <script type='text/javascript' src='https://s7.addthis.com/js/250/addthis_widget.js?ver=4.9.22#async=1'></script>
                            <script type='text/javascript' src='https://www.inspirostudio.ro/wp-includes/js/wp-embed.min.js?ver=4.9.22'></script>
                            <script type="text/javascript">
                                ;(function($){
                                })(jQuery);
                            </script>
                        </body>
                    </html>
                </h4>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<div  class="">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 comp-grid">
                <?php $this :: display_page_errors(); ?>
                <div  class="card animated fadeIn page-content">
                    <?php
                    $counter = 0;
                    if(!empty($data)){
                    $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                    $counter++;
                    ?>
                    <div id="page-report-body" class="">
                        <table class="table table-hover table-borderless table-striped">
                            <!-- Table Body Start -->
                            <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                <div><?php echo $data['upload']; ?></div>
                            </tbody>
                            <!-- Table Body End -->
                        </table>
                    </div>
                    <div class="p-3 d-flex">
                        <?php if($can_edit){ ?>
                        <a class="btn btn-sm btn-info"  href="<?php print_link("gallery/edit/$rec_id"); ?>">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <?php } ?>
                        <?php if($can_delete){ ?>
                        <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("gallery/delete/$rec_id/?csrf_token=$csrf_token"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                            <i class="fa fa-times"></i> Delete
                        </a>
                        <?php } ?>
                    </div>
                    <?php
                    }
                    else{
                    ?>
                    <!-- Empty Record Message -->
                    <div class="text-muted p-3">
                        <i class="fa fa-ban"></i> No Record Found
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
