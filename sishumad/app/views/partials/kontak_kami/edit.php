<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("kontak_kami/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                                        <div id="ctrl-nama_lengkap-holder" class=""> 
                                            <input id="ctrl-nama_lengkap"  value="<?php  echo $data['nama_lengkap']; ?>" type="text" placeholder="Enter Nama Lengkap"  required="" name="nama_lengkap"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" for="telp_whatsapp">Telp Whatsapp <span class="text-danger">*</span></label>
                                            <div id="ctrl-telp_whatsapp-holder" class=""> 
                                                <input id="ctrl-telp_whatsapp"  value="<?php  echo $data['telp_whatsapp']; ?>" type="text" placeholder="Enter Telp Whatsapp"  required="" name="telp_whatsapp"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                                <div id="ctrl-email-holder" class=""> 
                                                    <input id="ctrl-email"  value="<?php  echo $data['email']; ?>" type="email" placeholder="Enter Email"  required="" name="email"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label" for="kategori">Kategori <span class="text-danger">*</span></label>
                                                    <div id="ctrl-kategori-holder" class=""> 
                                                        <select required=""  id="ctrl-kategori" name="kategori"  placeholder="Pilih Kategory"    class="custom-select" >
                                                            <option value="">Pilih Kategory</option>
                                                            <?php
                                                            $kategori_options = Menu :: $kategori;
                                                            $field_value = $data['kategori'];
                                                            if(!empty($kategori_options)){
                                                            foreach($kategori_options as $option){
                                                            $value = $option['value'];
                                                            $label = $option['label'];
                                                            $selected = ( $value == $field_value ? 'selected' : null );
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
                                                    <textarea placeholder="Enter Pesan" id="ctrl-pesan"  required="" rows="5" name="pesan" class=" form-control"><?php  echo $data['pesan']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-ajax-status"></div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary" type="submit">
                                                Update
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
