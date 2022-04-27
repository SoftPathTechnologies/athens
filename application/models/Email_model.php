<?php
class Email_model extends CI_Model
{


    function send_message1($user_email){
        if ($this->config->item('protocol') == "smtp") {
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = $this->config->item('smtp_hostname');
            $config['smtp_user'] = $this->config->item('smtp_username');
            $config['smtp_pass'] = $this->config->item('smtp_password');
            $config['smtp_port'] = $this->config->item('smtp_port');
            $config['smtp_timeout'] = $this->config->item('smtp_timeout');
            // $config['mailtype'] = $this->config->item('smtp_mailtype');
            // $config['charset'] = $this->config->item('utf-8');
            // $config['mailtype'] = $this->config->item('html');
            $config['starttls']  = $this->config->item('starttls');
            $config['newline']  = $this->config->item('newline');

            $this->email->initialize($config);
        }

        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $fromemail  = "athens2022@agefadd.eu"; 
        $fromname   = "evenTalk Event";
        $subject    = "Athens 2022 Health Conference";

        $message    = $this->load->view('Emails/reg-confirm','',true);      
          
        $this->email->to($user_email);
        $this->email->from($fromemail, $fromname);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            return false;
            show_error($this->email->print_debugger());
        } else {
            return true;
        }
        
    }
    function send_message2($user_email){
        if ($this->config->item('protocol') == "smtp") {
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = $this->config->item('smtp_hostname');
            $config['smtp_user'] = $this->config->item('smtp_username');
            $config['smtp_pass'] = $this->config->item('smtp_password');
            $config['smtp_port'] = $this->config->item('smtp_port');
            $config['smtp_timeout'] = $this->config->item('smtp_timeout');
            // $config['mailtype'] = $this->config->item('smtp_mailtype');
            // $config['charset'] = $this->config->item('utf-8');
            // $config['mailtype'] = $this->config->item('html');
            $config['starttls']  = $this->config->item('starttls');
            $config['newline']  = $this->config->item('newline');

            $this->email->initialize($config);
        }

        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $fromemail  = "athens2022@agefadd.eu"; 
        $fromname   = "evenTalk Event";
        $subject    = "Athens 2022 Health Conference";

        $message    = $this->load->view('Emails/reg-confirm2','',true);      
          
        $this->email->to($user_email);
        $this->email->from($fromemail, $fromname);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            return false;
            show_error($this->email->print_debugger());
        } else {
            return true;
        }
        
    }

    function send_message3($user_email){
        if ($this->config->item('protocol') == "smtp") {
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = $this->config->item('smtp_hostname');
            $config['smtp_user'] = $this->config->item('smtp_username');
            $config['smtp_pass'] = $this->config->item('smtp_password');
            $config['smtp_port'] = $this->config->item('smtp_port');
            $config['smtp_timeout'] = $this->config->item('smtp_timeout');
            // $config['mailtype'] = $this->config->item('smtp_mailtype');
            // $config['charset'] = $this->config->item('utf-8');
            // $config['mailtype'] = $this->config->item('html');
            $config['starttls']  = $this->config->item('starttls');
            $config['newline']  = $this->config->item('newline');

            $this->email->initialize($config);
        }

        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $fromemail  = "athens2022@agefadd.eu"; 
        $fromname   = "evenTalk Event";
        $subject    = "Athens 2022 Health Conference";

        $message    = $this->load->view('Emails/reg-confirm3','',true);      
          
        $this->email->to($user_email);
        $this->email->from($fromemail, $fromname);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            return false;
            show_error($this->email->print_debugger());
        } else {
            return true;
        }
        
    }

    function send_invite_email($user_email){
        if ($this->config->item('protocol') == "smtp") {
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = $this->config->item('smtp_hostname');
            $config['smtp_user'] = $this->config->item('smtp_username');
            $config['smtp_pass'] = $this->config->item('smtp_password');
            $config['smtp_port'] = $this->config->item('smtp_port');
            $config['smtp_timeout'] = $this->config->item('smtp_timeout');
            $config['starttls']  = $this->config->item('starttls');
            $config['newline']  = $this->config->item('newline');

            $this->email->initialize($config);
        }

        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $fromemail  = "athens2022@agefadd.eu"; 
        $fromname   = "evenTalk Event";
        $subject    = "Athens 2022 Health Conference";

        $message    = $this->load->view('Emails/invite','',true);      
          
        $this->email->to($user_email);
        $this->email->from($fromemail, $fromname);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            return false;
            show_error($this->email->print_debugger());
        } else {
            return true;
        }
        
    }

    function send_admin_email($user_email){
        if ($this->config->item('protocol') == "smtp") {
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = $this->config->item('smtp_hostname');
            $config['smtp_user'] = $this->config->item('smtp_username');
            $config['smtp_pass'] = $this->config->item('smtp_password');
            $config['smtp_port'] = $this->config->item('smtp_port');
            $config['smtp_timeout'] = $this->config->item('smtp_timeout');
            $config['starttls']  = $this->config->item('starttls');
            $config['newline']  = $this->config->item('newline');

            $this->email->initialize($config);
        }

        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $fromemail  = "athens2022@agefadd.eu"; 
        $fromname   = "evenTalk Event";
        $subject    = "Athens 2022 Health Conference";

        $message    = $this->load->view('Emails/admin','',true);      
          
        $this->email->to($user_email);
        $this->email->from($fromemail, $fromname);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            return false;
            show_error($this->email->print_debugger());
        } else {
            return true;
        }
        
    }

    
}
