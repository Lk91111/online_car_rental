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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>update Coupon</strong></div>
            <div class="col-md-6 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php
                                                foreach ($data as $values)
                                                {
                                                    
                                                
                                        ?>
                                        <form action="<?=  base_url('admin/up_coupon')?>" method="post">
                                            <div class="form-group">
                                                <label class="text-muted" >ID</label>
                                                <input type="text" class="form-control" name="id" value="<?=$values->id?>" placeholder="" readonly=""></div>
                                            
                                            <div class="form-group">
                                                <label class="text-muted" >Code</label>
                                                <input type="text" class="form-control" name="code" value="<?=$values->code?>" placeholder="Enter code"></div>
                                            <div class="form-group">
                                                <label class="text-muted" >Value</label>
                                                <input type="number" class="form-control" name="value" value="<?=$values->value?>"  placeholder="Enter value"></div>
                                            
                                    
                                          
                                           <div style="margin-left: 33%;margin-top: 30px;">
                                               <input class="btn w-lg mb-3 btn-rounded btn-outline-info" value="UPDATE" type="submit" name="UPDATE">
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