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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>UPDATE team</strong></div>
            <div class="col-md-8 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php
                                            foreach ($data as $values)
                                            {
                                        ?>
                                        <form method="post" action="<?=  base_url('admin/up_team')?>" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Name</label>
                                                    <input type="text" class="form-control" value="<?=$values->id?>" placeholder="" name="id" hidden="">
                                                
                                                    <input type="text" class="form-control" value="<?=$values->name?>" placeholder="Enter Your Name" name="name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">User Name</label>
                                                    <input type="text" class="form-control" value="<?=$values->uname?>" placeholder="Enter User Name" name="uname">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Email</label>
                                                    <input type="email" class="form-control" value="<?=$values->email?>" placeholder="Email" name="email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Phone</label>
                                                    <input type="number" class="form-control" value="<?=$values->pn?>" placeholder="Enter Phone Number" name="pn">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Age</label>
                                                    <input type="number" class="form-control" value="<?=$values->age?>" placeholder="Enter Age" name="age">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Post</label>
                                                    <input type="text" class="form-control" value="<?=$values->post?>" placeholder="Post" name="post">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Password<small>(Register account)</small></label>
                                                    <input type="password" class="form-control" placeholder="Password" value="<?=$values->pwd?>" name="pwd">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Re-enter Password</label>
                                                    <input type="password" class="form-control" value="<?=$values->cpwd?>" placeholder="Re-enter Password" name="cpwd">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="text-muted">Address</label>
                                                <input type="text" class="form-control" value="<?=$values->addr?>" name="addr" placeholder="City/Country">
                                            </div>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span></div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="img">
                                                <label class="custom-file-label"><?=$values->img?></label>
                                            </div>
                                        </div>
                                            <div style="margin-left: 33%;margin-top: 30px;">
                                                <input class="btn w-lg mb-3 btn-rounded btn-outline-info" value="UPDATE" name="UPDATE" type="submit">
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