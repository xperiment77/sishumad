<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="sidebar1-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("sidebar1/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="acara">Acara <span class="text-danger">*</span></label>
                                    <div id="ctrl-acara-holder" class=""> 
                                        <textarea placeholder="Enter Acara" id="ctrl-acara"  required="" rows="5" name="acara" class="htmleditor form-control"><?php  echo $this->set_field_value('acara',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="tempat">Tempat </label>
                                    <div id="ctrl-tempat-holder" class=""> 
                                        <textarea placeholder="Enter Tempat" id="ctrl-tempat"  rows="5" name="tempat" class="htmleditor form-control"><?php  echo $this->set_field_value('tempat',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="tanggal">Tanggal </label>
                                    <div id="ctrl-tanggal-holder" class=""> 
                                        <textarea placeholder="Enter Tanggal" id="ctrl-tanggal"  rows="5" name="tanggal" class="htmleditor form-control"><?php  echo $this->set_field_value('tanggal',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="kalender">Kalender </label>
                                    <div id="ctrl-kalender-holder" class=""> 
                                        <textarea placeholder="Enter Kalender" id="ctrl-kalender"  rows="5" name="kalender" class="htmleditor form-control"><?php  echo $this->set_field_value('kalender',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <div class="form-ajax-status"></div>
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
