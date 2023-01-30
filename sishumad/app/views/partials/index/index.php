        <?php 
        $page_id = null;
        $comp_model = new SharedController;
        ?>
        <div  class="py-1">
            <div class="">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <div class=" ">
                            <?php  
                            $this->render_page("info/list?limit_count=20" , array( 'show_pagination' => false )); 
                            ?>
                        </div>
                        <div class=" ">
                            <?php  
                            $this->render_page("border/list?limit_count=20" , array( 'show_header' => false,'show_footer' => false )); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <h4 ></h4>
                    </div>
                    <div class="col-md-4 comp-grid">
                    </div>
                </div>
            </div>
        </div>
        