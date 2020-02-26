<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }
    
    public function send(){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->PHPMailer_lib->load();
        if($this->input->post('submit'))
            {
               $fname= $this->input->post('fname');
               $lname= $this->input->post('lname');
               $email= $this->input->post('email');
               $pn= $this->input->post('pn');
               $msg= $this->input->post('msg');
               $msgg=  wordwrap($msg, 70);
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = '';
        $mail->SMTPAuth = true;
        $mail->Username = 'laxmikant91111@gmail.com';
        $mail->Password = '';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom("$email", 'CodexWorld');
        $mail->addReplyTo('info@example.com', 'CodexWorld');
        
        // Add a recipient
        $mail->addAddress('laxmikant91111@gmail.com');
        
        // Add cc or bcc 
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = $msgg;
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
            }
    }
    
}
