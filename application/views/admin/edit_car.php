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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>UPDATE car</strong></div>
            <div class="col-md-8 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php 
                                                foreach ($data as $values)
                                                {
                                        ?>
                                        <form method="post" action="<?=  base_url('admin/up_car')?>" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <input type="text" class="form-control" placeholder="" value="<?=$values->id?>" name="id" hidden="">
                                                
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Condition</label>
                                                   
                                                    <select class="form-control form-control-sm" name="con">
                                                            <option><?=$values->con?></option>
                                                            <option>new</option>
                                                            <option>used</option>
                                                    
                                                            <option>certified used</option>
                                                    
                                                        </select>
                                                    
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Maker</label>
                                                    
                                                    <select class="form-control form-control-sm" name="maker">
                                                            <option><?=$values->maker?></option>
                                                            <option>mahindra</option>
                                                            <option>bentley</option>
                                                            <option>ford</option>
                                                            <option>honda</option>
                                                            <option>BMW</option>
                                                            <option>hyundai</option>
                                                            <option>jeep</option>
                                                            <option>kia</option>
                                                            <option>lamborghini</option>
                                                            <option>audi</option>
                                                            <option>mazda</option>
                                                            <option>mercedes</option>
                                                            <option>nissan</option>
                                                            <option>tesla</option>
                                                            <option>tata</option>
                                                            <option>Porsche</option>
                                                            <option>Land rover</option>
                                                            <option>volkswagon</option>
                                                        </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Model</label>
                                                    <input type="text" class="form-control" placeholder="Enter model" value="<?=$values->model?>" name="model">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Transmission</label>
                                                   <select class="form-control form-control-sm" name="trans">
                                                            <option><?=$values->trans?></option>
                                                            <option>Semi-auto</option>
                                                            <option>Manual</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Year</label>
                                                   <select class="form-control form-control-sm" name="year">
                                                            <option><?=$values->year?></option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Fuel type</label>
                                                   <select class="form-control form-control-sm" name="ft">
                                                            <option><?=$values->ft?></option>
                                                            <option>diesel</option>
                                                            <option>petrol</option>
                                                            <option>electric</option>
                                                            <option>hybrid</option>
                                                            <option>LPG autogas</option>
                                                           
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Engine(cc)</label>
                                                    <input type="text" class="form-control" placeholder="Engine in CC" value="<?=$values->ecc?>" name="ecc">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Doors</label>
                                                    <input type="number" class="form-control" placeholder="Enter no. of doors" value="<?=$values->door?>" name="door">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Seat</label>
                                                    <input type="number" class="form-control" placeholder="Enter no. of seats" value="<?=$values->seat?>" name="seat">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Price</label>
                                                    <input type="number" class="form-control" placeholder="Enter price" value="<?=$values->price?>" name="price">
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span></div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
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