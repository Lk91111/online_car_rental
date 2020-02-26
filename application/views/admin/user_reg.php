<?php include 'include/head.php';?>

<body class="layout-row " >
    <div class="flex">
        <div class="w-xl w-auto-sm mx-auto py-5">
            <div class="p-4 d-flex flex-column h-100">
                <!-- brand -->
                 <a href="#" class="navbar-brand align-self-center">
                     <img src="<?=  base_url()?>adm_assets/img/logo.png" alt="..." class="logo">
                     
                 </a>
                <!-- / brand -->
            </div>
            <div class="card">
                <div id="content-body">
                    <div class="p-3 p-md-5">
                        <h5>Registration</h5>
                        <p><small class="text-muted">Register to Xpedia</small></p>
                        <form class="" role="form" action="" method="post">
                            <div class="form-group">
                             
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                           
                            </div> 
                            <div class="form-group">
                             
                                <input type="text" class="form-control" name="uname" placeholder="Enter User Name">
                           
                            </div>
                            <div class="form-group">
                             
                                <input type="email" class="form-control" name="email" placeholder="Enter email">
                           
                            </div>
                            <div class="form-group">
                             
                                <input type="number" class="form-control" name="pn" placeholder="Enter phone number">
                           
                            </div>
                            <div class="form-group">
                             
                                <input type="text" class="form-control" name="addr" placeholder="Enter Your Address">
                           
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pwd" placeholder="Password">
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cpwd" placeholder="Re-enter Password">
                                
                            </div>
                            <div style="color: lightcoral;margin-bottom: 10px;"><?=$msg?></div>
                            <input type="submit" class="btn  mb-4" name="submit">
	
                            <div>Already have an account? <a href="<?=  base_url('admin/sign')?>" class="text-primary">Sign in</a></div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <style>
        .btn{
            border: 1px solid white;
            border-radius: 10px; 
            width: 100%
        }
        .btn:hover{
            background-color: #222e4f;
            border-color:   #222e4f;
        }
    </style>
    <script src="<?=  base_url()?>adm_assets/js/site.min.js"></script>
</body>


</html>