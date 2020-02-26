<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userc extends CI_Controller {

	public function index()
	{
                $result['select_car']=$this->adminm->select_car();
                $result['select_dest']=$this->adminm->select_dest();
                $result['select_cp']=$this->adminm->select_cp();
                $result['review']=$this->adminm->feed_datass();
		$this->load->view('user/index',$result);
	}
        public function error()
	{
                $this->output->set_status_header('404');
		$this->load->view('user/error');
	}
        public function about()
	{
                $result['select_admin']=$this->adminm->select_admin();
		$this->load->view('user/about',$result);
	}
        public function contact()
	{
                $result['contact']=$this->adminm->contact();
		$this->load->view('user/contact',$result);
	}
        public function email()
        {
            if($this->input->post('submit'))
            {
               $fname= $this->input->post('fname');
               $lname= $this->input->post('lname');
               $email= $this->input->post('email');
               $pn= $this->input->post('pn');
               $msg= $this->input->post('msg');
               $msgg=  wordwrap($msg, 70);
               
               mail('laxmikant91111@gmail.com','user msg', $msgg,"From: $email\n");
               
            }
        }

        public function car_ac()
	{
                $id=$this->input->get('q');
                if(!isset($_SESSION['uname']))
                {
                    $errr['msg']=NULL;
                    $errr['id']=$id;
                    $this->load->view('admin/signin',$errr);
                }
                else 
                    {
                    $errr['msg']=NULL;
                    $errr['id']=$id;
                    $this->load->view('admin/signin',$errr); 
                    }
	}
        public function car_acccc()
        {
            $id=$this->input->get('q');
                $result['select_booking']=  $this->adminm->select_booking();
                $result['select_acc']=  $this->adminm->select_acc();
                $result['select_car']=  $this->adminm->edit_car($id);
                $this->load->view('user/car_accessories',$result);
        }

        public function car_detail()
	{
                $id=  $this->input->get('q');
                $result['data']=  $this->adminm->edit_car($id);
                $result['feed_data']=  $this->adminm->feed_data($id);
		$this->load->view('user/car_detail',$result);
	}
        public function cop()
	{
                
                
                if($this->input->post('submit'))
            {
                $gtp=  $this->input->post('gtp');
                $code=  $this->input->post('cop');
                $id=  $this->input->post('id');
                
                $aid=  $this->input->post('aid');
                    $quer=  $this->db->select('*')
                    ->from('coupon')
                    ->where(array('code'=>$code))
                    ->get();
                 $results=$quer->row();
                 if($quer->num_rows())
                {
                     $querr=  $this->db->select('*')
                    ->from('book_ac')
                    ->where(array('id'=>$aid))
                    ->get();
                 $resultss=$querr->row();
                 $d=$resultss->cop;
                 
                 
                 
                 
                 
                     if($d!=NULL)
                     {
                       $result['select_booking']=  $this->adminm->select_booking();
                
                $result['select_acc']=  $this->adminm->select_acc();
                $result['select_car']=  $this->adminm->set_car($id);
                $result['select_ac']=  $this->adminm->select_ac($id);
                 
                $result['msg']='already applied'; 
                $this->load->view('user/car_checkout',$result);  
                     }
                     else{
                         
                         $vall=$results->value;
                         $cod=$results->code;
                 $valll=100/$vall;
                 
                 $vallll=$gtp/$valll;
                
                 $gtpp=$gtp-$vallll;
                 $this->adminm->up_cop($gtpp,$aid,$vall,$cod,$gtp);
                 $result['select_booking']=  $this->adminm->select_booking();
                
                $result['select_acc']=  $this->adminm->select_acc();
                $result['select_car']=  $this->adminm->set_car($id);
                $result['select_ac']=  $this->adminm->select_ac($id);
                 
                $result['msg']=NULL; 
                $this->load->view('user/car_checkout',$result);
                     }
                 
                }
                else
                {
                    
                    $result['select_booking']=  $this->adminm->select_booking();
                
                $result['select_acc']=  $this->adminm->select_acc();
                $result['select_car']=  $this->adminm->set_car($id);
                $result['select_ac']=  $this->adminm->select_ac($id);
                    $result['msg']='invalid coupon code';
                   $this->load->view('user/car_checkout',$result);
                }
                 
                
                
            }
	}
        public function book_car()
	{
                $result['data']=$this->adminm->select_car();
		$this->load->view('user/car_booking',$result);
	}
        public function car_checkout()
	{
                $id=  $this->input->get('q');
                
                $result['select_booking']=  $this->adminm->select_booking();
                
                $result['select_acc']=  $this->adminm->select_acc();
                $result['select_car']=  $this->adminm->set_car($id);
                $result['select_ac']=  $this->adminm->select_ac($id);
                
                   $result['msg']=NULL; 
                
                
		$this->load->view('user/car_checkout',$result);
	}
        public function book_car_done()
	{
                $id=$this->input->get('q');
                $result['select_booking']=  $this->adminm->select_booking();
                
                $result['select_acc']=  $this->adminm->select_acc();
                $result['select_car']=  $this->adminm->set_cars($id);
                $result['select_ac']=  $this->adminm->select_a($id);
                $result['select_billing']=  $this->adminm->select_billing($id);
		$this->load->view('user/car_booking_done',$result);
	}
        public function book_car_don()
	{
                $id=$this->input->get('q');
                
		if($this->input->post('submit'))
            {
                    $quer=  $this->db->select('code')
                    ->from('book_ac')
                    ->where(array('id'=>$id))
                    ->get();
                 $cod=$quer->row();
                 $code=$cod->code;
                 $price=$this->input->post('price');
                 $fname=  $this->input->post('fname');
                 $lname=  $this->input->post('lname');
                 
                 $country=  $this->input->post('country');
                 $city=  $this->input->post('city');
                 $addr=  $this->input->post('addr');
                 $pn=  $this->input->post('pn');
                 $email=  $this->input->post('email');
                  
                 
                 $this->adminm->car_checkout($id,$fname,$lname,$country,$city,$addr,$pn,$email,$price,$code);
                 
                 redirect('userc/book_car_done?q='.$id);
            }  
	}
        public function login()
	{
		$this->load->view('user/login');
	}
        public function register()
	{
		$this->load->view('user/register');
	}
        public function team()
	{
                 $result['select_admin']=$this->adminm->select_admin();
                 $result['select_driver']=$this->adminm->select_driver();
		$this->load->view('user/team',$result);
	}
        public function booking()
	{
            $id=$this->input->get('q');
            if($this->input->post('submit'))
            {
                 $pl=  $this->input->post('pl');
                 $dl=  $this->input->post('dl');
                 $pd=  $this->input->post('pd');
                 $date1=  strtotime($pd);
                 $pdate=date("d",$date1);
                 
                 $pdh=  $this->input->post('pdh');
                 $pdm=  $this->input->post('pdm');
                 $dd=  $this->input->post('dd');
                 $date2=  strtotime($dd);
                 $ddate=date("d",$date2);
                 
                 $date3=$ddate-$pdate;
                 $date3=$date3+1;
                 $ddh=  $this->input->post('ddh');
                 $ddm=  $this->input->post('ddm');
                 
                 $this->adminm->booking($id,$pl,$dl,$pd,$pdh,$pdm,$dd,$ddh,$ddm,$date3);
                 
                 redirect('userc/car_ac?q='.$id);
            }  
	}
        public function feed()
	{
            $cid=$this->input->get('q');
            if($this->input->post('submit'))
            {
                 $name=  $this->input->post('fname');
                 $email=  $this->input->post('email');
                 $title=  $this->input->post('title');
                 $star=  $this->input->post('star');
                 $com=  $this->input->post('com');
                
                 
                 $this->adminm->add_feed($cid,$name,$email,$title,$com,$star);
                 
                 redirect('userc/car_detail?q='.$cid);
            }  
	}
        public function ad_acc()
        {
            $id=$this->input->get('q');
            
            if($this->input->post('submit'))
            {
                 $price2=  $this->input->post('price2');
                 $qtt2=  $this->input->post('qtt2');
                 $p1=$price2*$qtt2;
                 $price7=  $this->input->post('price7');
                 $qtt7=  $this->input->post('qtt7');
                 $p2=$price7*$qtt7;
                 $price8=  $this->input->post('price8');
                 $qtt8=  $this->input->post('qtt8');
                 $p3=$price8*$qtt8;
                 $price9=  $this->input->post('price9');
                 $qtt9=  $this->input->post('qtt9');
                 
                 $p4=$price9*$qtt9;
                 $tp=$p1+$p2+$p3+$p4;
                 $gtp=  $this->input->post('gtp');
                 $dur=  $this->input->post('dur');
                 $gtpp=$tp+$gtp;
                 $gtpp=$gtpp*$dur;
                 $this->adminm->book_ac($id,$qtt2,$qtt7,$qtt8,$qtt9,$tp,$p1,$p2,$p3,$p4,$gtpp);
                 redirect('userc/car_checkout?q='.$id);
            }
        }
}
