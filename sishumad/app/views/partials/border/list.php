<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("border/add");
$can_edit = ACL::is_allowed("border/edit");
$can_view = ACL::is_allowed("border/view");
$can_delete = ACL::is_allowed("border/delete");
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
        <div class="">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("header/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("berita_terbaru/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("informasi_kampus/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("layanan/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("covid_19/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("video/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("peta/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("alamat/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
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
                                    <a class="text-decoration-none" href="<?php print_link('border'); ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('border'); ?>">
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
                    <div class=" ">
                        <?php  
                        $this->render_page("css/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
