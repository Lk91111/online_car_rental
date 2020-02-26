    <?php
        include 'include/head.php';
    ?>
    <!-- ############ Aside START-->
    <?php
        include 'include/aside.php';
    ?>
    <!-- ############ Aside END-->
    <div id="main" class="layout-column flex">
        <!-- ############ Header START-->
        <?php
        include 'include/header.php';
        ?>
        <!-- ############ Footer END-->
        <!-- ############ Content START-->
        <div id="content" class="flex">
            <!-- ############ Main START-->
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Update Destination</strong></div>
            <div class="col-md-6 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php 
                                                foreach ($data as $values){
                                        ?>
                                                
                                        <form method="post" action="<?=  base_url('admin/up_dest')?>" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="text-muted" >ID</label>
                                                <input type="text" class="form-control" name="id" placeholder="" value="<?=$values->id?>" readonly=""></div>
                                            
                                            <div class="form-group">
                                                <label class="text-muted" >City</label>
                                               <input type="text" class="form-control" name="city" placeholder="Enter city" value="<?=$values->city?>"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >State</label>
                                                <input type="text" class="form-control" name="state"  placeholder="Enter state" value="<?=$values->state?>"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Description</label>
                                                <input type="text" class="form-control" name="descr"  placeholder="Enter description" value="<?=$values->descr?>"></div>
                                           <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span></div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="img" value="<?=$values->img?>">
                                                <label class="custom-file-label" ><?=$values->img?></label>
                                                
                                            </div>
                                        </div>
                                          
                                           <div style="margin-left: 33%;margin-top: 30px;">
                                               <input class="btn w-lg mb-3 btn-rounded btn-outline-info" type="submit" value="UPDATE" name="UPDATE">
                                            </div>
                                        </form>
                                                <?php
                                                
                                                }
                                                ?>
                                    </div>
                                </div>
                            </div>
            <!-- ############ Main END-->
        </div>
        
    </div>
    <script src="<?=  base_url()?>adm_assets/js/site.min.js"></script>
</body>

</html>