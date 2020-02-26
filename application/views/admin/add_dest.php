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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Add Destination</strong></div>
            <div class="col-md-6 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?=  base_url('admin/add_dest')?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="text-muted" >City</label>
                                                <input type="text" class="form-control" name="city" placeholder="Enter city"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >State</label>
                                                <input type="text" class="form-control" name="state"  placeholder="Enter state"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Description</label>
                                                <input type="text" class="form-control" name="descr"  placeholder="Enter description"></div>
                                           <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span></div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="img">
                                                <label class="custom-file-label" >Choose Images</label>
                                            </div>
                                        </div>
                                            <div style="color: lightcoral;"><?=$msg?></div>
                                           <div style="margin-left: 33%;margin-top: 30px;">
                                               <input class="btn w-lg mb-3 btn-rounded btn-outline-info" value="Add" name="Add" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
            <!-- ############ Main END-->
        </div>
        
    </div>
    <script src="<?=  base_url()?>adm_assets/js/site.min.js"></script>
</body>

</html>