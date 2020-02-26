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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Add Contact</strong></div>
            <div class="col-md-6 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?=  base_url('admin/add_cont')?>" method="post">
                                            <div class="form-group">
                                                <label class="text-muted" >Phone</label>
                                                <input type="number" class="form-control" name="pn" placeholder="Enter phone number"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email</label>
                                                <input type="email" class="form-control" name="email"  placeholder="Enter email"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Address</label>
                                                <input type="text" class="form-control" name="addr"  placeholder="Enter address"></div>
                                           
                                    
                                          
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