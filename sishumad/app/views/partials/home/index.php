<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="">
        <div class="">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("info/list?limit_count=20" , array( 'show_pagination' => false )); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="py-1">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-sm-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("border/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
