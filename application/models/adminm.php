<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminm extends CI_Controller {
    public function add_team($v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10)
    {
        $data=array('img'=>$v10,'name'=>$v1,'uname'=>$v2,'email'=>$v3,'pn'=>$v4,'age'=>$v5,'post'=>$v6,'pwd'=>$v7,'cpwd'=>$v8,'addr'=>$v9);
        $this->db->insert('team',$data);
    }
     public function add_acc($v1,$v2,$v3,$v4)
    {
        $data=array('img'=>$v4,'name'=>$v1,'price'=>$v2,'com'=>$v3);
        $this->db->insert('accessories',$data);
    }
     public function add_car($v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11)
    {
        $data=array('img'=>$v11,'con'=>$v1,'maker'=>$v2,'model'=>$v3,'trans'=>$v4,'year'=>$v5,'ft'=>$v6,'ecc'=>$v7,'door'=>$v8,'seat'=>$v9,'price'=>$v10);
        $this->db->insert('cars',$data);
    }
     public function add_dest($v1,$v2,$v3,$v4)
    {
        $data=array('img'=>$v4,'city'=>$v1,'state'=>$v2,'descr'=>$v3);
        $this->db->insert('destination',$data);
    }
    public function add_cont($v1,$v2,$v3)
    {
        $data=array('pn'=>$v1,'email'=>$v2,'addr'=>$v3);
        $this->db->insert('contact',$data);
    }
    public function add_coupon($v1,$v2)
    {
        $data=array('code'=>$v1,'value'=>$v2);
        $this->db->insert('coupon',$data);
    }
    public function select_con()
    {
        $query=$this->db->query("select * from contact");
	return $query->result();
    }
    public function delete_con($id)
    {
        $query=$this->db->query("delete from contact where id='$id'");
        return $query;
    }
    public function display_con($id)
    {
        $query=$this->db->query("select * from contact where id='$id'");
        return $query->result();
    }
    public function update_con($t1,$t2,$t3,$id)
	{
	$query=$this->db->query("update contact set pn='$t1',email='$t2',addr='$t3' where id='$id'");
        
       }
       public function select_car()
    {
        $query=$this->db->query("select * from cars");
	return $query->result();
    }
    public function edit_car($id)
    {
        $query=$this->db->query("select * from cars where id='$id'");
	return $query->result();
    }
    public function car($id)
    {
        $query=$this->db->query("select * from cars where id='$id'");
	return $query->result();
    }
    public function delete_car($id)
    {
        $query=$this->db->query("delete from cars where id='$id'");
        return $query;
    }
    public function update_car($con,$maker,$model,$trans,$year,$ft,$ecc,$door,$seat,$price,$id)
	{
	$query=$this->db->query("update cars set con='$con',maker='$maker',model='$model',trans='$trans',year='$year',ft='$ft',ecc='$ecc',door='$door',seat='$seat',price='$price' where id='$id'");
        
       }
    public function update_car_img($con,$maker,$model,$trans,$year,$ft,$ecc,$door,$seat,$price,$img,$id)
	{
	$query=$this->db->query("update cars set con='$con',maker='$maker',model='$model',trans='$trans',year='$year',ft='$ft',ecc='$ecc',door='$door',seat='$seat',price='$price',img='$img' where id='$id'");
        
       }
    public function team($id)
    {
        $query=$this->db->query("select * from team where id='$id'");
	return $query->result();
    }
    public function edit_team($id)
    {
        $query=$this->db->query("select * from team where id='$id'");
	return $query->result();
    }
     public function select_team($id)
    {
        $query=$this->db->query("select * from team where not id='$id'");
	return $query->result();
    }
    public function delete_team($id)
    {
        $query=$this->db->query("delete from team where id='$id'");
        return $query;
    }
    public function update_team($name,$uname,$email,$pn,$age,$post,$pwd,$cpwd,$addr,$id)
	{
	$query=$this->db->query("update team set name='$name',uname='$uname',email='$email',pn='$pn',age='$age',post='$post',pwd='$pwd',cpwd='$cpwd',addr='$addr' where id='$id'");
        
       }
       public function update_team_img($name,$uname,$email,$pn,$age,$post,$pwd,$cpwd,$addr,$img,$id)
	{
	$query=$this->db->query("update team set name='$name',uname='$uname',email='$email',pn='$pn',age='$age',post='$post',pwd='$pwd',cpwd='$cpwd',addr='$addr',img='$img' where id='$id'");
        
       }
    public function select_dest()
    {
        $query=$this->db->query("select * from destination");
	return $query->result();
    }
    public function delete_dest($id)
    {
        $query=$this->db->query("delete from destination where id='$id'");
        return $query;
    }
    public function dest($id)
    {
        $query=$this->db->query("select * from destination where id='$id'");
	return $query->result();
    }
    public function edit_dest($id)
    {
        $query=$this->db->query("select * from destination where id='$id'");
	return $query->result();
    }
    public function update_dest($city,$state,$descr,$id)
	{
	$query=$this->db->query("update destination set city='$city',state='$state',descr='$descr' where id='$id'");
        
       }
       public function update_dest_img($city,$state,$descr,$img,$id)
	{
	$query=$this->db->query("update destination set city='$city',state='$state',descr='$descr',img='$img' where id='$id'");
        
       }
    public function select_acc()
    {
        $query=$this->db->query("select * from accessories");
	return $query->result();
    }
    public function delete_acc($id)
    {
        $query=$this->db->query("delete from accessories where id='$id'");
        return $query;
    }
    public function edit_acc($id)
    {
        $query=$this->db->query("select * from accessories where id='$id'");
        return $query->result();
    }
    public function update_acc($name,$price,$com,$id)
	{
	$query=$this->db->query("update accessories set name='$name',price='$price',com='$com' where id='$id'");
        
       }
       public function update_acc_img($name,$price,$com,$img,$id)
	{
	$query=$this->db->query("update accessories set name='$name',price='$price',com='$com',img='$img' where id='$id'");
        
       }
    public function select_coupon()
    {
        $query=$this->db->query("select * from coupon");
	return $query->result();
    }
    public function delete_coupon($id)
    {
        $query=$this->db->query("delete from coupon where id='$id'");
        return $query;
    }
    public function delete_user($id)
    {
        $query=$this->db->query("delete from user where id='$id'");
        return $query;
    }
    public function edit_coupon($id)
    {
        $query=$this->db->query("select * from coupon where id='$id'");
        return $query->result();
    }
    public function update_coupon($code,$value,$id)
	{
	$query=$this->db->query("update coupon set code='$code',value='$value' where id='$id'");
        
       }
    public function user_reg($v1,$v2,$v3,$v4,$v5,$v6,$v7)
    {
        $data=array('name'=>$v1,'uname'=>$v2,'email'=>$v3,'pn'=>$v4,'addr'=>$v5,'pwd'=>$v6,'cpwd'=>$v7);
        $this->db->insert('user',$data);
    }
    public function booking($id,$pl,$dl,$pd,$pdh,$pdm,$dd,$ddh,$ddm,$dur)
    {
       $data=array('cid'=>$id,'pl'=>$pl,'dl'=>$dl,'pd'=>$pd,'pdh'=>$pdh,'pdm'=>$pdm,'dd'=>$dd,'ddh'=>$ddh,'ddm'=>$ddm,'dur'=>$dur);
        $this->db->insert('booking',$data); 
    }
    public function select_booking()
    {
        $query=$this->db->query("select * from booking where id=(select MAX(ID) from booking)");
        return $query->result();
    }
     public function select_user()
    {
        $query=$this->db->query("select * from user");
        return $query->result();
    }
    public function select_book()
    {
        $query=$this->db->query("select cid from booking where id=(select MAX(ID) from booking)");
        return $query->result();
    }
     public function select_cp()
    {
        $query=$this->db->query("select * from coupon where id=(select MAX(ID) from coupon)");
        return $query->result();
    }
    public function book_ac($id,$qtt2,$qtt7,$qtt8,$qtt9,$tp,$p1,$p2,$p3,$p4,$gtpp)
    {
        $data=array('bid'=>$id,'gps'=>$qtt2,'gpsp'=>$p1,'bbs'=>$qtt7,'bbsp'=>$p2,'exd'=>$qtt8,'exdp'=>$p3,'ins'=>$qtt9,'insp'=>$p4,'tp'=>$tp,'gtp'=>$gtpp);
        $this->db->insert('book_ac',$data);
    }
    public function select_ac($bid)
    {
        $query=$this->db->query("select * from book_ac where bid='$bid'");
        return $query->result();
    }
    public function select_a($bacid)
    {
        $query=$this->db->query("select * from book_ac where id='$bacid'");
        return $query->result();
    }
    public function set_car($bid)
    {
        $query=$this->db->query("select * from cars where id=(select cid from booking where id='$bid')");
        return $query->result();
    }
    public function set_cars($bacid)
    {
        $query=$this->db->query("select * from cars where id=(select cid from booking where id=(select bid from book_ac where id='$bacid'))");
        return $query->result();
    }
    public function car_checkout($bacid,$fname,$lname,$country,$city,$addr,$pn,$email,$price,$code)
    {
        $data=array('bacid'=>$bacid,'fname'=>$fname,'lname'=>$lname,'country'=>$country,'city'=>$city,'addr'=>$addr,'pn'=>$pn,'email'=>$email,'price'=>$price,'coupon'=>$code);
        $this->db->insert('billing',$data);
    }
    public function add_feed($cid,$name,$email,$title,$com,$star)
    {
        $data=array('cid'=>$cid,'name'=>$name,'email'=>$email,'title'=>$title,'com'=>$com,'star'=>$star);
        $this->db->insert('review',$data);
    }
    public function feed_data($cid)
    {
        $query=$this->db->query("select * from reviews where cid='$cid'");
        return $query->result();
    }
    public function feed_datas()
    {
        $query=$this->db->query("select * from review");
        return $query->result();
    }
    public function feed_datass()
    {
        $query=$this->db->query("select * from reviews");
        return $query->result();
    }
     public function contact()
    {
        $query=$this->db->query("select * from contact");
        return $query->result();
    }
    public function cop($code)
    {
        $query=$this->db->query("select value from coupon where code='$code'");
        return $query->result();
    }
    public function up_cop($copp,$id,$vall,$cod,$ttl)
    {
        $query=$this->db->query("update book_ac set gtp='$copp',ttl='$ttl',code='$cod',cop='$vall' where id='$id'");
        return $query;
    }
    public function select_billing($bacid)
    {
        $query=$this->db->query("select * from billing where bacid='$bacid'");
        return $query->result();
    }
    public function select_bill()
    {
        $query=$this->db->query("select * from billing");
        return $query->result();
    }
    public function delete_bill($id)
    {
        $query=$this->db->query("delete from billing where id='$id'");
        return $query;
    }
     public function delete_review($id)
    {
        $query=$this->db->query("delete from review where id='$id'");
        return $query;
    }
    public function tick_review($id)
    {
        $query=$this->db->query("insert into reviews(cid,name,email,title,com,star) values((select cid from review where id='$id'),(select name from review where id='$id'),(select email from review where id='$id'),(select title from review where id='$id'),(select com from review where id='$id'),(select star from review where id='$id'))");
        $quer=$this->db->query("delete from review where id='$id'");
        return $query;
        return $quer;
    }
    public function delete_reviews($id)
    {
        $query=$this->db->query("insert into review(cid,name,email,title,com,star) values((select cid from reviews where id='$id'),(select name from reviews where id='$id'),(select email from reviews where id='$id'),(select title from reviews where id='$id'),(select com from reviews where id='$id'),(select star from reviews where id='$id'))");
        $quer=$this->db->query("delete from reviews where id='$id'");
        return $query;
        return $quer;
    }
     public function select_admin()
    {
        $query=$this->db->query("select * from team where post = 'admin' ");
	return $query->result();
    }
    public function select_driver()
    {
        $query=$this->db->query("select * from team where post = 'driver' ");
	return $query->result();
    }
}