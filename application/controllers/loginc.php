<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginc extends CI_Controller {
    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index()
	{
            if(!isset($_SESSION['uname']))
            {
                $errr['msg']=NULL;
                $errr['id']=NULL;
                $this->load->view('admin/signin',$errr);
            }
            else
            {
                $errr['id']=NULL;
		$errr['msg']=NULL;
                $this->load->view('admin/signin',$errr);
            }
                
        }
    public function login()
    {
        if ($this->input->post('Login'))
        {
            $uname=  $this->input->post('uname');
            $pwd=  $this->input->post('pwd');
            $id=  $this->input->post('q');
            $query=  $this->db->select('id')
                    ->from('team')
                    ->where(array('uname'=>$uname,'pwd'=>$pwd,'post'=>'admin'))
                    ->get();
            $result=$query->row();
            
            if($query->num_rows())
            {
                $n=$result->id;
                $_SESSION['uname']=$n;
                $this->load->view('admin/page_profile',$_SESSION['uname']);
            }
            else
                {
                $quer=  $this->db->select('id')
                    ->from('user')
                    ->where(array('uname'=>$uname,'pwd'=>$pwd))
                    ->get();
            $results=$quer->row();
            if($quer->num_rows())
            {
                $m=$results->id;
                $_SESSION['uname']=$m;
                if($id=='')
                {
                    redirect('userc/');  
                }
 
                else {
                  redirect('userc/car_acccc?q='.$id);   
                }
               
            }else{
                $errr['msg']='invalid Username or password';
                 $errr['id']=NULL;
                $this->load->view('admin/signin',$errr);
                }
                }
        }
        else{
                        echo 'error';}
    }
    public function logout()
    {
        session_destroy();
        redirect(base_url('loginc'));
    }
    public function logouts()
    {
        session_destroy();
        redirect(base_url('userc'));
    }
}