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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>UPDATE Contact</strong></div>
            <div class="col-md-6 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php
                                        foreach($data as $value){
                                        ?>
                                        <form method="post" action="<?=  base_url('admin/up_con')?>">
                                            <div class="form-group">
                                                <label class="text-muted" >ID</label>
                                                <input type="number" class="form-control disabled" name="id" value="<?=$value->id?>" placeholder="" readonly=""></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Phone</label>
                                                <input type="number" class="form-control" name="pn" value="<?=$value->pn?>" placeholder="Enter phone number"></div>
                                            
                                            <div class="form-group">
                                                <label class="text-muted" >Email</label>
                                                <input type="email" class="form-control" name="email" value="<?=$value->email?>"  placeholder="Enter email"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Address</label>
                                                <input type="text" class="form-control" name="addr" value="<?=$value->addr?>"  placeholder="Enter address"></div>
                                           
                                    
                                          
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