<?php include 'include/head.php';?>

<body class="layout-row">
    <div class="flex">
       
        <div class="w-xl w-auto-sm mx-auto py-5">
            <div class="p-4 d-flex flex-column h-100">
                <!-- brand -->
                <a href="#" class="navbar-brand align-self-center">
                   <img src="<?=  base_url()?>adm_assets/img/logo.png" alt="...">
                </a>
            </div>
            <div class="card">
                <div id="content-body">
                    <div class="p-3 p-md-5">
                        <h5>Welcome back</h5>
                        <p><small class="text-muted">Login to manage your account</small></p>
                        <form class="" role="form" action="<?=  base_url('loginc/login')?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="q" placeholder="" value="<?=$id?>" hidden="">
                            
                                <input type="text" class="form-control" name="uname" placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control" name="pwd" placeholder="Password">
                                <div class="my-3 text-right"><a href="forgot-password.html" class="text-muted">Forgot password?</a></div>
                            </div>
                            <div class="checkbox mb-3">
                                <div style="color: lightcoral;margin-bottom: 10px;"><?=$msg?></div>
                            </div>
                            <input type="submit" class="btn  mb-4" name="Login" value="Login">
                                <div>Do not have an account? <a href="<?=  base_url('admin/reg')?>" class="text-primary">Sign up</a></div>
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