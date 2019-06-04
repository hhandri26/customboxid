<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Send_email_models extends CI_Model
{
    public function send($data, $info, $file){
        $ci                     = get_instance();
        $config['protocol'] 	= "smtp";
        $config['smtp_host'] 	= "mail.mj5event.com";
        $config['smtp_port'] 	= "25";
        $config['smtp_user'] 	= "cs@mj5event.com";
        $config['smtp_pass'] 	= "Mj5eventR4hasia";
        $config['charset'] 		= "utf-8";
        $config['mailtype'] 	= "html";
        $config['newline'] 		= "\r\n";
        $ci->email->initialize($config);
        $ci->email->from($info->email);
        $ci->email->attach($file,'attachment', 'Invoice','application/pdf');
        $ci->email->to($data['email']);
        $ci->email->subject('Invoice Customboxid');
        $ci->email->message($info->pesan_invoice);
        if ($this->email->send()){

        }else{
            show_error($this->email->print_debugger());
        }
    }

}