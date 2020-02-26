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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Add team</strong></div>
            <div class="col-md-8 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?=  base_url('admin/add_team')?>" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">User Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter User Name" name="uname">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Phone</label>
                                                    <input type="number" class="form-control" placeholder="Enter Phone Number" name="pn">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Age</label>
                                                    <input type="number" class="form-control" placeholder="Enter Age" name="age">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Post</label>
                                                    <input type="text" class="form-control" placeholder="Post" name="post">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Password<small>(Register account)</small></label>
                                                    <input type="password" class="form-control" placeholder="Password" name="pwd">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Re-enter Password</label>
                                                    <input type="password" class="form-control" placeholder="Re-enter Password" name="cpwd">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="text-muted">Address</label>
                                                <input type="text" class="form-control" placeholder="City/Country" name="addr">
                                            </div>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span></div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="img">
                                                <label class="custom-file-label">Choose image</label>
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