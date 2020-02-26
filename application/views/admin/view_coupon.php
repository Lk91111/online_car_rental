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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Coupon Details</strong></div>
            <div class="col-md-8 container" style="margin-top: 30px;">
                
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
                                            <th class="text-muted">Code</th>
                                            <th class="text-muted">Value</th>
                                            <th class="text-muted">Date </th>
                                            <th class="text-muted">Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                foreach ($data as $values){
                                        ?>
                                        <tr class="v-middle" data-id="15">
                                            <td>
                                                <label class="ui-check m-0">
                                                    <input type="checkbox" name="id" value="15"> <i></i></label>
                                            </td>
                                             <td>
                                                <div class="avatar-group"><?=$values->id?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$values->code?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$values->value?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$values->datetimes?></div>
                                            </td>
                                            <td>
                                                 <div class="avatar-group">
                                                     <a href="<?=  base_url('admin/delete_coupon')?>?q=<?=$values->id?>"><span class="nav-icon text-info">
                                                                    <i data-feather="trash">

                                                                    </i>
                                                         </span></a>
                                                     
                                                     <a href="<?=  base_url('admin/edit_coupon')?>?q=<?=$values->id?>"><span class="nav-icon text-info">
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