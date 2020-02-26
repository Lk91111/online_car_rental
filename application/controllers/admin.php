<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    function __construct() {
        parent::__construct();
        session_start();
        
    }


    public function index()
	{
                if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
                    $this->load->view('admin/page_profile');
                    }
		
	}
        public function sign()
	{
		$errr['msg']=NULL;
                $errr['id']=NULL;
                $this->load->view('admin/signin',$errr);
	}
        
        public function reg()
	{
            $err=null;
            if($this->input->post('submit'))
            {
                
                        $name=  $this->input->post('name');
                        $uname=  $this->input->post('uname');
                        $email=  $this->input->post('email');
                        $pn=  $this->input->post('pn');
                        
                        $pwd=  $this->input->post('pwd');
                        $cpwd=  $this->input->post('cpwd');
                        $addr=  $this->input->post('addr');
                        if($pwd==''||$cpwd=='')
                        {
                        $err="Please enter valid password";
                        
                        }
                        elseif ($pwd==$cpwd)
                        {
                        $this->adminm->user_reg($name,$uname,$email,$pn,$addr,$pwd,$cpwd);
                        redirect('loginc/');  
                        }
                        else
                            {
                                $err="It seems Password doesn't match";
                            }
                    
               
            }
            else{
                $err=null;
            }
                $errr=array('msg'=>$err);
                
		$this->load->view('admin/user_reg',$errr);
                
	}
        public function add_team()
	{
            $err=null;
            if($this->input->post('Add'))
            {
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/team/'.$file_name;
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png')
                {
                    $err='sorry only JPG,PNG files are allowed....';
                }  else {
                    if(file_exists($target_path))
                    {
                        $err='sorry this file is already exist....';
                    }
                    else {
                        $name=  $this->input->post('name');
                        $uname=  $this->input->post('uname');
                        $email=  $this->input->post('email');
                        $pn=  $this->input->post('pn');
                        $age=  $this->input->post('age');
                        $post=  $this->input->post('post');
                        $pwd=  $this->input->post('pwd');
                        $cpwd=  $this->input->post('cpwd');
                        $addr=  $this->input->post('addr');
                        if($pwd==$cpwd)
                        {
                        move_uploaded_file($temp_name, $target_path);
                        $this->adminm->add_team($name,$uname,$email,$pn,$age,$post,$pwd,$cpwd,$addr,$file_name);
                        redirect('admin/view_team');
                        
                        }
                        else
                            {
                                $err="It seems Password doesn't match";
                            }
                    }
               }
            }
            else{
                $err=null;
            }
                $errr=array('msg'=>$err);
                if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/add_team' ,$errr);
                    }
	}
        public function add_dest()
	{
              $err=null;
            if($this->input->post('Add'))
            {
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/dest/'.$file_name;
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png'&& $filetype!='jpeg')
                {
                    $err='sorry only JPG,PNG files are allowed....';
                }  else {
                    if(file_exists($target_path))
                    {
                        $err='sorry this file is already exist....';
                    }
                    else {
                        $city=  $this->input->post('city');
                        $state=  $this->input->post('state');
                        $descr=  $this->input->post('descr');
                        move_uploaded_file($temp_name, $target_path);
                        $this->adminm->add_dest($city,$state,$descr,$file_name);
                    
                        redirect('admin/view_dest');
                    }
               }
            }
            else{
                $err=null;
            }
                $errr=array('msg'=>$err);
                if(!isset($_SESSION['uname']))
                {
                   $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/add_dest',$errr);
                    }
	}
//        start contact 
        public function add_cont()
	{
            if($this->input->post('Add'))
            {
                 $pn=  $this->input->post('pn');
                 $email=  $this->input->post('email');
                 $addr=  $this->input->post('addr');
                 $this->adminm->add_cont($pn,$email,$addr);
            }
            if(!isset($_SESSION['uname']))
                {
                $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/add_cont');
                    }
	}
         public function view_con()
	{
             $result['products_data']=$this->adminm->select_con();
             if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/view_con',$result );
                    }
	}
        public function delete_con()
        {
            $id=$this->input->get('q');
	$this->adminm->delete_con($id);
	redirect('admin/view_con');
        }
        public function edit_con()
	{
            $id=$this->input->get('q');
            $result['data']=$this->adminm->display_con($id);
            
            $this->load->view('admin/edit_cont',$result);
	}
        public function up_con()
        {
            
            if($this->input->post('UPDATE'))
		{
                $id=$this->input->post('id');
                $pn=$this->input->post('pn');
		$email=$this->input->post('email');
		$addr=$this->input->post('addr');
		$this->adminm->update_con($pn,$email,$addr,$id);
		redirect('admin/view_con');
		}  else {
                    echo 'error';
                }
        }

        public function add_coupon()
	{
            if($this->input->post('Add'))
            {
                 
                 $code=  $this->input->post('code');
                 $value=  $this->input->post('value');
                 $this->adminm->add_coupon($code,$value);
            }
		if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/add_coupon');
                    }
	}
        public function add_acc()
	{
            
            $err=null;
            if($this->input->post('Add'))
            {
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/acc/'.$file_name;
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png')
                {
                    $err='sorry only JPG,PNG files are allowed....';
                }  else {
                    if(file_exists($target_path))
                    {
                        $err='sorry this file is already exist....';
                    }
                    else {
                        $name=  $this->input->post('name');
                        $price=  $this->input->post('price');
                        $com=  $this->input->post('com');
                        move_uploaded_file($temp_name, $target_path);
                        $this->adminm->add_acc($name,$price,$com,$file_name);
                    
                        redirect('admin/view_acc');
                    }
               }
            }
            else{
                $err=null;
            }
                $errr=array('msg'=>$err);
                if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/add_acc' ,$errr);
                    }
	}
         public function add_car()
	{
             $err=null;
            if($this->input->post('Add'))
            {
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/car/'.$file_name;
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png')
                {
                    $err='sorry only JPG,PNG files are allowed....';
                }  else {
                    if(file_exists($target_path))
                    {
                        $err='sorry this file is already exist....';
                    }
                    else {
                        $con=  $this->input->post('con');
                        $maker=  $this->input->post('maker');
                        $model=  $this->input->post('model');
                        $trans=  $this->input->post('trans');
                        $year=  $this->input->post('year');
                        $ft=  $this->input->post('ft');
                        $ecc=  $this->input->post('ecc');
                        $door=  $this->input->post('door');
                        $seat=  $this->input->post('seat');
                        $price=  $this->input->post('price');
                        move_uploaded_file($temp_name, $target_path);
                        $this->adminm->add_car($con,$maker,$model,$trans,$year,$ft,$ecc,$door,$seat,$price,$file_name);
                        
                        redirect('admin/view_car');
                    }
               }
            }
            else{
                $err=null;
            }
                $errr=array('msg'=>$err);
                if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/add_car' ,$errr);
                    }
	}
         public function view_team()
	{
                $result['products_data']=$this->adminm->select_team($_SESSION['uname']);
                if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
		$this->load->view('admin/view_team',$result);
                    }
	}
        public function view_dest()
	{
            $result['products_data']=$this->adminm->select_dest();
	if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {	
            $this->load->view('admin/view-dest',$result);
                    }
	}
        public function view_acc()
	{
                $result['data']=$this->adminm->select_acc();
		if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
                $this->load->view('admin/view_acc',$result);
                    }
	}
       
        public function view_coupon()
	{
                $result['data']=$this->adminm->select_coupon();
		if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
                $this->load->view('admin/view_coupon',$result);
                    }
	}
        public function view_car()
	{
                $result['products_data']=$this->adminm->select_car();
		if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
                $this->load->view('admin/view_car',$result);
                    }
	}
        public function profile()
	{
		$this->load->view('admin/page_profile');
	}
        public function user()
	{
                $result['data']=  $this->adminm->select_user();
		$this->load->view('admin/user_home',$result);
	}
        public function review()
	{
            if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
                    $result['data']=  $this->adminm->feed_datas();
		$this->load->view('admin/review',$result);
                    }
	}
        public function delete_review()
	{
                $id=  $this->input->get('q');
                $this->adminm->delete_review($id);
		redirect('admin/review');
	}
        public function delete_user()
	{
                $id=  $this->input->get('q');
                $this->adminm->delete_user($id);
		redirect('admin/user');
	}
        public function delete_reviews()
	{
                $id=  $this->input->get('q');
                $this->adminm->delete_reviews($id);
		redirect('admin/reviews');
	}
        public function tick_review()
	{
                $id=  $this->input->get('q');
                $this->adminm->tick_review($id);
		redirect('admin/review');
	}
        public function reviews()
	{
            if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
                    $result['data']=  $this->adminm->feed_datass();
		$this->load->view('admin/reviews',$result);
                    }
	}
        public function bill()
	{
                $result['data']=  $this->adminm->select_bill();
		$this->load->view('admin/billing',$result);
	}
        
        public function delete_bill()
	{
                $id=  $this->input->get('q');
                $this->adminm->delete_bill($id);
		redirect('admin/bill');
	}
         public function edit_car()
	{
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->edit_car($id);
		$this->load->view('admin/edit_car',$result);
	}
        public function up_car()
        {
            
            if($this->input->post('UPDATE'))
		{
                $file_name=$_FILES['image']['name'];
                $temp_name=$_FILES['image']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/car/'.$file_name;
                $con=$this->input->post('con');
                $maker=$this->input->post('maker');
		$model=$this->input->post('model');
		$trans=$this->input->post('trans');
                $year=$this->input->post('year');
                $ft=$this->input->post('ft');
		$ecc=$this->input->post('ecc');
		$door=$this->input->post('door');
                $seat=$this->input->post('seat');
                $price=$this->input->post('price');
		
		$id=$this->input->post('id');
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png')
                {
                    $this->adminm->update_car($con,$maker,$model,$trans,$year,$ft,$ecc,$door,$seat,$price,$id);
		redirect('admin/view_car');
                }  
                else {
                
                move_uploaded_file($temp_name, $target_path);
		$this->adminm->update_car_img($con,$maker,$model,$trans,$year,$ft,$ecc,$door,$seat,$price,$file_name,$id);
		redirect('admin/view_car');
                    }   
                }
                
        }
        public function edit_team()
	{
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->edit_team($id);
		$this->load->view('admin/edit_team',$result);
	}
        public function up_team()
        {
            
            if($this->input->post('UPDATE'))
		{
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/team/'.$file_name;
                $name=$this->input->post('name');
                $uname=$this->input->post('uname');
		$email=$this->input->post('email');
		$pn=$this->input->post('pn');
                $age=$this->input->post('age');
                $post=$this->input->post('post');
		$pwd=$this->input->post('pwd');
		$cpwd=$this->input->post('cpwd');
                $addr=$this->input->post('addr');
                
		$id=$this->input->post('id');
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png')
                {
                $this->adminm->update_team($name,$uname,$email,$pn,$age,$post,$pwd,$cpwd,$addr,$id);
		redirect('admin/view_team');
                }
                else {
                
                move_uploaded_file($temp_name, $target_path);
		$this->adminm->update_team_img($name,$uname,$email,$pn,$age,$post,$pwd,$cpwd,$addr,$file_name,$id);
		redirect('admin/view_team');
                    }   
                }
                
        }
        public function edit_dest()
	{
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->edit_dest($id);
		$this->load->view('admin/edit_dest',$result);
	}
        public function up_dest()
        {
            
            if($this->input->post('UPDATE'))
		{
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/dest/'.$file_name;
                $city=$this->input->post('city');
                $state=$this->input->post('state');
		$descr=$this->input->post('descr');
		
		$id=$this->input->post('id');
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png'&& $filetype!='jpeg')
                {
                   $this->adminm->update_dest($city,$state,$descr,$id);
                    redirect('admin/view_dest'); 
                }
                else {
                
                move_uploaded_file($temp_name, $target_path);
		$this->adminm->update_dest_img($city,$state,$descr,$file_name,$id);
                redirect('admin/view_dest');
                    }   
                }
                
        }
        public function edit_acc()
	{
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->edit_acc($id);
		$this->load->view('admin/edit_acc',$result);
	}
        public function up_acc()
        {
            
            if($this->input->post('UPDATE'))
		{
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/xpedia/assets/images/acc/'.$file_name;
                $name=$this->input->post('name');
                $price=$this->input->post('price');
		$com=$this->input->post('com');
		
		$id=$this->input->post('id');
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                if($filetype!='jpg'&& $filetype!='png')
                {
                   $this->adminm->update_acc($name,$price,$com,$id);
                    redirect('admin/view_acc'); 
                }
                else {
                
                move_uploaded_file($temp_name, $target_path);
		$this->adminm->update_acc_img($name,$price,$com,$file_name,$id);
                redirect('admin/view_acc');
                    }   
                }
                
        }
        public function edit_coupon()
	{
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->edit_coupon($id);
		$this->load->view('admin/edit_coupon',$result);
	}
        public function up_coupon()
        {
            
            if($this->input->post('UPDATE'))
		{
                $id=$this->input->post('id');
                $code=$this->input->post('code');
		$value=$this->input->post('value');
		
		$this->adminm->update_coupon($code,$value,$id);
		redirect('admin/view_coupon');
		}  
        }
         public function car()
	{
             $id=  $this->input->get('q');
             $result['data']=  $this->adminm->car($id);
             $this->load->view('admin/car',$result);
	}
         public function dest()
	{
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->dest($id);
		$this->load->view('admin/dest',$result);
	}
         public function team()
	{       
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->team($id);
		$this->load->view('admin/team',$result);
	}
        public function delete_car()
        {
            $id=$this->input->get('q');
            
	$this->adminm->delete_car($id);
        
	redirect('admin/view_car');
        }
        public function delete_team()
        {
            $id=$this->input->get('q');
	$this->adminm->delete_team($id);
	redirect('admin/view_team');
        }
         public function delete_dest()
        {
            $id=$this->input->get('q');
	$this->adminm->delete_dest($id);
	redirect('admin/view_dest');
        }
        public function delete_acc()
        {
            $id=$this->input->get('q');
	$this->adminm->delete_acc($id);
	redirect('admin/view_acc');
        }
        public function delete_coupon()
        {
            $id=$this->input->get('q');
	$this->adminm->delete_coupon($id);
	redirect('admin/view_coupon');
        }
        
}


