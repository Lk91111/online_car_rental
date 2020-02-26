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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Add Accessories</strong></div>
            <div class="col-md-6 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?=  base_url('admin/add_acc')?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="text-muted" >Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter name"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Price</label>
                                                <input type="text" class="form-control" name="price"  placeholder="Enter price"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Comment</label>
                                                <input type="text" class="form-control" name="com"  placeholder="Enter comment"></div>
                                           <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span></div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="img">
                                                <label class="custom-file-label" >Choose Images</label>
                                            </div>
                                        </div>
                                           <div style="color: lightcoral;"><?=$msg?></div>
                                           <div style="margin-left: 33%;margin-top: 30px;">
                                                <input style="cursor: pointer;" class="btn w-lg mb-3 btn-rounded btn-outline-info" value="Add" type="submit" name="Add">
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