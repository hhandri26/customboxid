<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Send_email_models extends CI_Model
{
    public function send($data, $info, $file){
        $ci                     = get_instance();
        $config['protocol'] 	= "smtp";
        $config['smtp_host'] 	= "mail.customboxid.com";
        $config['smtp_port'] 	= "25";
        $config['smtp_user'] 	= "admin@customboxid.com";
        $config['smtp_pass'] 	= "!126Admin";
        $config['charset'] 		= "utf-8";
        $config['mailtype'] 	= "html";
        $config['newline'] 		= "\r\n";
        $ci->email->initialize($config);
        if($data['dari']=='home'){
            $ci->email->from($data['email']);
            $ci->email->to($info->email);
            $ci->email->subject('Pesan Baru'.$data['email']);
        }else{
            $ci->email->from($info->email);
            $ci->email->to($data['email']);
            $ci->email->subject('Invoice Customboxid');
        }        
        if($file==''){
        }else{
            $ci->email->attach($file,'attachment', 'Invoice','application/pdf');
        }
                
        if($data['dari']=='admin'){
            $ci->email->message($info->pesan_vertifikasi);
        }elseif($data['dari'=='home']){
            $ci->email->message($data['pesan']);
        }else{
            $ci->email->message($info->pesan_invoice);
        }
        if ($this->email->send()){

        }else{
            show_error($this->email->print_debugger());
        }
    }

}