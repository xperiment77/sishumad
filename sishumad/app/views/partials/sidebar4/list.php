<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("sidebar4/add");
$can_edit = ACL::is_allowed("sidebar4/edit");
$can_view = ACL::is_allowed("sidebar4/view");
$can_delete = ACL::is_allowed("sidebar4/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="grid" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <h4 >  
                        <!DOCTYPE html>
                        <html lang="en">
                            <head>
                                <meta charset="utf-8">
                                    <title>Silicon UI Kit | Testimonials / reviews</title>
                                    <!-- SEO Meta Tags -->
                                    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
                                        <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
                                            <meta name="author" content="Createx Studio">
                                                <!-- Viewport -->
                                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                                    <meta name="theme-color" content="#ffffff">
                                                        <!-- Vendor Styles -->
                                                        <link rel="stylesheet" media="screen" href="assets/boostrapcss/boxicons.min.css"/>
                                                        <link rel="stylesheet" media="screen" href="https://silicon.createx.studio/assets/vendor/swiper/swiper-bundle.min.css"/>
                                                        <link rel="stylesheet" media="screen" href="assets/boostrapcss/prism.css"/>
                                                        <link rel="stylesheet" media="screen" href="assets/boostrapcss/prism-toolbar.css"/>
                                                        <link rel="stylesheet" media="screen" href="assets/boostrapcss/prism-line-numbers.css"/>
                                                        <link rel="stylesheet" media="screen" href="assets/boostrapcss/swiper-bundle.min.css"/>
                                                        <!-- Main Theme Styles + Bootstrap -->
                                                        <link rel="stylesheet" media="screen" href="assets/boostrapcss/theme.min.css">
                                                            <!-- Theme mode -->
                                                            <script>
                                                                let mode = window.localStorage.getItem('mode'),
                                                                root = document.getElementsByTagName('html')[0];
                                                                if (mode !== null && mode === 'dark') {
                                                                root.classList.add('dark-mode');
                                                                } else {
                                                                root.classList.remove('dark-mode');
                                                                }
                                                            </script>
                                                        </head>
                                                        <body data-bs-spy="scroll" data-bs-target="#jumpToNav" tabindex="0">
                                                            <script src=" https://silicon.createx.studio/assets/vendor/swiper/swiper-bundle.min.js"></script>
                                                            <script src="assets/boostrapjs/smooth-scroll.polyfills.min.js"></script>
                                                            <script src="assets/boostrapjs/swiper-bundle.min.js"></script>
                                                            <script src="assets/boostrapjs/prism-core.min.js"></script>
                                                            <script src="assets/boostrapjs/prism-markup.min.js"></script>
                                                            <script src="assets/boostrapjs/prism-clike.min.js"></script>
                                                            <script src="assets/boostrapjs/prism-toolbar.min.js"></script>
                                                            <script src="assets/boostrapjs/prism-copy-to-clipboard.min.js"></script>
                                                            <script src="assets/boostrapjs/prism-line-numbers.min.js"></script>
                                                            <script src="assets/boostrapjs/swiper-bundle.min.js"></script>
                                                            <!-- Main Theme Script -->
                                                            <script src="assets/boostrapjs/theme.min.js"></script>
                                                        </body>
                                                    </html></h4>
                                                    <div class="">
                                                        <!-- Page bread crumbs components-->
                                                        <?php
                                                        if(!empty($field_name) || !empty($_GET['search'])){
                                                        ?>
                                                        <hr class="sm d-block d-sm-none" />
                                                        <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                                            <ul class="breadcrumb m-0 p-1">
                                                                <?php
                                                                if(!empty($field_name)){
                                                                ?>
                                                                <li class="breadcrumb-item">
                                                                    <a class="text-decoration-none" href="<?php print_link('sidebar4'); ?>">
                                                                        <i class="fa fa-angle-left"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="breadcrumb-item">
                                                                    <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                                                </li>
                                                                <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                                                    <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                                                </li>
                                                                <?php 
                                                                }   
                                                                ?>
                                                                <?php
                                                                if(get_value("search")){
                                                                ?>
                                                                <li class="breadcrumb-item">
                                                                    <a class="text-decoration-none" href="<?php print_link('sidebar4'); ?>">
                                                                        <i class="fa fa-angle-left"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="breadcrumb-item text-capitalize">
                                                                    Search
                                                                </li>
                                                                <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </nav>
                                                        <!--End of Page bread crumbs components-->
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php $this :: display_page_errors(); ?>
                                                    <div  class=" animated fadeIn page-content">
                                                        <div id="sidebar4-list-records">
                                                            <?php
                                                            if(!empty($records)){
                                                            ?>
                                                            <div id="page-report-body">
                                                                <div class="row sm-gutters page-data" id="page-data-<?php echo $page_element_id; ?>">
                                                                    <!--record-->
                                                                    <?php
                                                                    $counter = 0;
                                                                    foreach($records as $data){
                                                                    $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                                                    $counter++;
                                                                    ?>
                                                                    <div class="col-sm-12">
                                                                        <div class=" ">
                                                                            <div><?php echo $data['upload']; ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php 
                                                                    }
                                                                    ?>
                                                                    <!--endrecord-->
                                                                </div>
                                                                <div class="row sm-gutters search-data" id="search-data-<?php echo $page_element_id; ?>"></div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                            if($show_footer == true){
                                                            ?>
                                                            <div class=" border-top mt-2">
                                                                <div class="row justify-content-center">    
                                                                    <div class="col-md-auto">   
                                                                    </div>
                                                                    <div class="col">   
                                                                        <?php
                                                                        if($show_pagination == true){
                                                                        $pager = new Pagination($total_records, $record_count);
                                                                        $pager->route = $this->route;
                                                                        $pager->show_page_count = false;
                                                                        $pager->show_record_count = false;
                                                                        $pager->show_page_limit =false;
                                                                        $pager->limit_count = $this->limit_count;
                                                                        $pager->show_page_number_list = true;
                                                                        $pager->pager_link_range=5;
                                                                        $pager->render();
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                            }
                                                            }
                                                            else{
                                                            ?>
                                                            <div class="text-muted  animated bounce p-3">
                                                                <h4><i class="fa fa-ban"></i> No record found</h4>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
