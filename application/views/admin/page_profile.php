<?php include 'include/head.php';?>
    <!-- ############ Aside START-->
      <?php include 'include/aside.php';?>
    <!-- ############ Aside END-->
    <div id="main" class="layout-column flex">
        <!-- ############ Header START-->
        <?php include 'include/header.php';?>
        <!-- ############ Footer END-->
        <?php
            $query=$this->db->select('*')
                    ->from('team')
                    ->where(array('id'=>$_SESSION['uname']))
                    ->get();
            $result=$query->row();
            $img=$result->img;
            $name=$result->name;
            $uname=$result->uname;
            $post=$result->post;
            $email=$result->email;
            $pn=$result->pn;
            $addr=$result->addr;
            $age=$result->age;
            $date=  strtotime($result->datetimes);
            $fdate=date("d M Y",$date);
        ?>
        
        <!-- ############ Content START-->
        <div id="content" class="flex">
            <!-- ############ Main START-->
            <div>
                
                <div class="page-content page-container" id="page-content" style="margin-top: 50px;">
                    <div class="padding sr">
                        <div class="card">
                            <div class="card-header bg-dark bg-img p-0 no-border" data-stellar-background-ratio="0.1" style="background-image:url(../assets/img/b3.jpg)" data-plugin="stellar">
                                <div class="bg-dark-overlay r-2x no-r-b">
                                    <div class="d-md-flex">
                                        <div class="p-4">
                                             <div class="mx-3">
                                                    <h5 class="mt-2"><?=$name?></h5>
                                                    <div class="text-fade text-sm"><span class="m-r"><?=$post?></span> <small><i class="fa fa-map-marker mr-2"></i><?=$addr?> RAIPUR, CG </small></div>
                                                </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#" data-toggle="tab" data-target="#tab_1">profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?=  base_url('admin/edit_team')?>?q=<?=$_SESSION['uname'];?>">update profile</a></li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 col-lg-8">
                                <div class="tab-content">
                                   
                                    <div class="tab-pane fade show active" id="tab_1">
                                        <div class="card" style="height: 400px;">
                                            <div class="px-2">
                                                <div class="py-3">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item"><a class="nav-link"><span><?=$addr?></span></a></li>
                                                        <li class="nav-item"><a class="nav-link"><span><?=$pn?></span></a></li>
                                                        <li class="nav-item"><a class="nav-link"><span><?=$fdate?></span></a></li>
                                                        <li class="nav-item"><a class="nav-link"><span><?=$email?></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="px-4 py-4">
                                                <div class="row mb-2">
                                                    <div class="col-6"><small class="text-muted">Cell Phone</small>
                                                        <div class="my-2"><?=$pn?></div>
                                                    </div>
                                                    <div class="col-6"><small class="text-muted">Email</small>
                                                        <div class="my-2"><?=$email?></div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6"><small class="text-muted">ID</small>
                                                        <div class="my-2"><?=$_SESSION['uname']?></div>
                                                    </div>
                                                    <div class="col-6"><small class="text-muted">User Name</small>
                                                        <div class="my-2"><?=$uname?></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                
                        <img src="<?=  base_url()?>assets/images/team/<?=$img?>" style="width: 100%; height: 400px;border-radius: 5px; ">
                     
                                
                            </div>
                        </div>
                    </div>
                </div>
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