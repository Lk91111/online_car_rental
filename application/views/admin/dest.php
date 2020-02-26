<?php include 'include/head.php';?>
    <!-- ############ Aside START-->
      <?php include 'include/aside.php';?>
    <!-- ############ Aside END-->
    <div id="main" class="layout-column flex">
        <!-- ############ Header START-->
        <?php include 'include/header.php';?>
        <!-- ############ Footer END-->
        <!-- ############ Content START-->
        <div id="content" class="flex">
            <!-- ############ Main START-->
            <div>
                <?php
                foreach ($data as $values){
                ?>
                <div><a href="<?=  base_url('admin/view_dest')?>"><input type="button" class="btn btn-dark" name="Back" value="back" style=" height: 50px; width: 100px; border-radius:10px;border:2px solid #101525; float: right;margin-right: 50px; margin-top: 32px;"></a></div>   
              
                <div class="page-content page-container" id="page-content" style="margin-top: 50px;">
                    <div class="padding sr">
                        <div class="card">
                            <div class="card-header bg-dark bg-img p-0 no-border" data-stellar-background-ratio="0.1" style="background-image:url(../assets/img/b3.jpg)" data-plugin="stellar">
                                <div class="bg-dark-overlay r-2x no-r-b">
                                    <div class="d-md-flex">
                                        <div class="p-4">
                                             <div class="mx-3">
                                                    <h5 class="mt-2"><?=$values->city?></h5>
                                                    <div class="text-fade text-sm"><span class="m-r"><?=$values->state?></span></div>
                                                </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-7 col-lg-8">
                                <div class="tab-content">
                                   
                                    <div class="tab-pane fade show active" id="tab_1">
                                        <div class="card" style="height: 350px;">
                                            <div class="px-2">
                                                <div class="py-3">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item"><a class="nav-link"><span style="font-size: 18px;"><?=$values->id?></span></a></li>
                                                       
                                                        <li class="nav-item"><a class="nav-link"><span style="font-size: 18px;"><?=$values->datetimes?></span></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="px-4 py-4">
                                                <div class="row mb-2">
                                                    <div class="col-6"><small class="text-muted" style="font-size: 18px;">Description</small>
                                                        <div class="my-2" style="font-size: 16px;"><?=$values->descr?></div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                
                        <img src="<?=  base_url()?>assets/images/dest/<?=$values->img?>" style="width: 100%; height: 350px;border-radius: 5px; ">
                     
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <!-- ############ Main END-->
        </div>
        <!-- ############ Content END-->
        <!-- ############ Footer START-->
        <div id="footer" class="page-footer hide">
            <div class="d-flex p-3"><span class="text-sm text-muted flex">&copy; Copyright. flatfull.com</span>
                <div class="text-sm text-muted">Version 1.1.2</div>
            </div>
        </div>
        <!-- ############ Footer END-->
    </div>
    <script src="<?=  base_url()?>adm_assets/js/site.min.js"></script>
</body>

</html>