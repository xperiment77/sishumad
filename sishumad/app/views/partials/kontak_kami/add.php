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
    <div  class="bg-white py-5">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 comp-grid">
                    <h4 ><h5 style="text-align: center; ">Silahkan ketik pesan anda agar terhubung dengan kami</h5>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-2 comp-grid">
                </div>
                <div class="col-md-8 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="kontak_kami-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("kontak_kami/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                                        <div id="ctrl-nama_lengkap-holder" class=""> 
                                            <input id="ctrl-nama_lengkap"  value="<?php  echo $this->set_field_value('nama_lengkap',""); ?>" type="text" placeholder="Enter Nama Lengkap"  required="" name="nama_lengkap"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" for="telp_whatsapp">Telp Whatsapp <span class="text-danger">*</span></label>
                                            <div id="ctrl-telp_whatsapp-holder" class=""> 
                                                <input id="ctrl-telp_whatsapp"  value="<?php  echo $this->set_field_value('telp_whatsapp',""); ?>" type="text" placeholder="Enter Telp Whatsapp"  required="" name="telp_whatsapp"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                                <div id="ctrl-email-holder" class=""> 
                                                    <input id="ctrl-email"  value="<?php  echo $this->set_field_value('email',""); ?>" type="email" placeholder="Enter Email"  required="" name="email"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label" for="kategori">Kategori <span class="text-danger">*</span></label>
                                                    <div id="ctrl-kategori-holder" class=""> 
                                                        <select required=""  id="ctrl-kategori" name="kategori"  placeholder="Pilih Kategory"    class="custom-select" >
                                                            <option value="">Pilih Kategory</option>
                                                            <?php
                                                            $kategori_options = Menu :: $kategori;
                                                            if(!empty($kategori_options)){
                                                            foreach($kategori_options as $option){
                                                            $value = $option['value'];
                                                            $label = $option['label'];
                                                            $selected = $this->set_field_selected('kategori', $value, "");
                                                            ?>
                                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                <?php echo $label ?>
                                                            </option>                                   
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="pesan">Pesan <span class="text-danger">*</span></label>
                                                <div id="ctrl-pesan-holder" class=""> 
                                                    <textarea placeholder="Enter Pesan" id="ctrl-pesan"  required="" rows="5" name="pesan" class=" form-control"><?php  echo $this->set_field_value('pesan',""); ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-submit-btn-holder text-center mt-3">
                                            <div class="form-ajax-status"></div>
                                            <button class="btn btn-primary" type="submit">
                                                Kirim
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-2 comp-grid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
