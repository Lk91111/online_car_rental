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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Cars Details</strong></div>
            <div class="col-md-12 container" style="margin-top: 30px;">
                
                    <div class="padding">
                        <div class="mb-5">
                            <div class="toolbar">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-icon btn-white" data-toggle="tooltip" title="Trash" id="btn-trash"><i data-feather="trash" class="text-muted"></i></button>
                                    <button class="btn btn-sm btn-icon btn-white sort" data-sort="item-title" data-toggle="tooltip" title="Sort"><i class="sorting"></i></button>
                                </div>
                                <form class="flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-theme form-control-sm search" placeholder="Search" required> <span class="input-group-append"><button class="btn btn-white no-border btn-sm" type="button"><span class="d-flex text-muted"><i data-feather="search"></i></span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-theme table-row v-middle">
                                    <thead>
                                        <tr style="background-color:#101525; height: 80px;font-size: 16px;">
                                            <th style="width:20px">
                                                <label class="ui-check m-0">
                                                    </label>
                                            </th>
                                            <th class="text-muted">Id</th>
                                            <th class="text-muted">Image</th>
                                            <th class="text-muted">Condition</th>
                                            <th class="text-muted">maker</th>
                                            <th class="text-muted">Model</th>
                                            <th class="text-muted">Transmission</th>
                                            <th class="text-muted">Year</th>
                                            <th class="text-muted">Fuel type</th>
                                            <th class="text-muted">Engine(cc)</th>
                                            <th class="text-muted">Doors</th>
                                            <th class="text-muted">Seats</th>
                                            <th class="text-muted">Price</th>
                                            <th class="text-muted">Date </th>
                                            <th class="text-muted">Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($products_data as $value){
                                        ?>
                                        <tr class="v-middle" data-id="15">
                                            <td>
                                                <label class="ui-check m-0">
                                                    <input type="checkbox" name="id" value="15"> <i></i></label>
                                            </td>
                                             <td>
                                                <div class="avatar-group"><?=$value->id?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <img src="<?=  base_url()?>assets/images/car/<?=$value->img?>" style="height: 40px;width: 40px;border-radius: 50%;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->con?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->maker?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->model?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->trans?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->year?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->ft?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->ecc?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->door?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->seat?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->price?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$value->datetimes?></div>
                                            </td>
                                            <td>
                                                 <div class="avatar-group">
                                                     
                                                     <a href="<?=  base_url('admin/delete_car')?>?q=<?=$value->id?>"><span class="nav-icon text-info">
                                                                    <i data-feather="trash">

                                                                    </i>
                                                         </span></a>
                                                     <a href="<?=  base_url('admin/car')?>?q=<?=$value->id?>"><span class="nav-icon text-info">
                                                                    <i data-feather="eye">

                                                                    </i>
                                                         </span></a>
                                                     <a href="<?=  base_url('admin/edit_car')?>?q=<?=$value->id?>"><span class="nav-icon text-info">
                                                                    <i data-feather="edit-2">

                                                                    </i>
                                                         </span></a>
                                                 </div>
                                            </td>
                                            
                                        </tr>
                                        
                                      <?php
                                        }
                                      ?> 
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>                  
            </div>
            <!-- ############ Main END-->
        </div>
        
    </div>
    <script src="<?=  base_url()?>adm_assets/js/site.min.js"></script>
</body>

</html>