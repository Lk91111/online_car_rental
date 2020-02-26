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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Add car</strong></div>
            <div class="col-md-8 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?=  base_url('admin/add_car')?>" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Condition</label>
                                                   
                                                    <select class="form-control form-control-sm" name="con">
                                                            <option>new</option>
                                                            <option>used</option>
                                                    
                                                            <option>certified used</option>
                                                    
                                                        </select>
                                                    
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Maker</label>
                                                    
                                                    <select class="form-control form-control-sm" name="maker">
                                                            <option>Select</option>
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
                                                    <input type="text" class="form-control" placeholder="Enter model" name="model">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Transmission</label>
                                                   <select class="form-control form-control-sm" name="trans">
                                                            <option>Select</option>
                                                            <option>Semi-auto</option>
                                                            <option>Manual</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Year</label>
                                                   <select class="form-control form-control-sm" name="year">
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
                                                    <input type="text" class="form-control" placeholder="Engine in CC" name="ecc">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Doors</label>
                                                    <input type="number" class="form-control" placeholder="Enter no. of doors" name="door">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Seat</label>
                                                    <input type="number" class="form-control" placeholder="Enter no. of seats" name="seat">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Price</label>
                                                    <input type="number" class="form-control" placeholder="Enter price" name="price">
                                                </div>
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