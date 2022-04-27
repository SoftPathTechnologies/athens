<?php
class Crud_model extends CI_Model
{
    function validate($email = '', $password = '')
    {
        $admin_credential = array('admin_email' => $email, 'admin_password' => MD5($password));

        // Checking login credential for Admin
        $query = $this->db->get_where('admin', $admin_credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->session->set_userdata('admin_login', TRUE);
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('admin_name', $row->admin_name);
            $this->session->set_userdata('admin_encrypted_id', $row->encrypted_id);
            $this->session->set_userdata('email', $row->admin_email);
            $this->session->set_userdata('logged_in', TRUE);
            return 'admin';
        }
    }

    ////////IMAGE URL//////////
    function get_image_url($type = '', $id = '')
    {
        if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
            $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
        else
            $image_url = base_url() . 'uploads/user.png';

        return $image_url;
    }

    function get_all_countries()
    {
        $query = $this->db->get('country');
        return $query->result_array();
    }

    function get_admins()
    {
        $query = $this->db->get('admin');
        return $query->result_array();
    }

    function get_speakers()
    {
        $query = $this->db->get('speakers');
        return $query->result_array();
    }

    function get_participants()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    function get_payment_pending_participants()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('users');
        return $query->result_array();
    }

    function get_confirmed_participants()
    {
        $this->db->order_by('id', 'desc');
        $this->db->where('reg_code !=', "");
        $query = $this->db->get('users');
        return $query->result_array();
    }

    function check_admin_email($email)
    {
        $this->db->where('admin_email', $email);
        $query = $this->db->get('admin');
        return $query->num_rows();
    }

    function check_speaker_name($name)
    {
        $this->db->where('name  ', $name);
        $query = $this->db->get('speakers');
        return $query->num_rows();
    }

    function get_pending_registrations()
    {
        $this->db->where('reg_code  ', "");
        $query = $this->db->get('users');
        return $query->num_rows();
    }

    

    function get_total_balance()
    {
        $total_balance = 0;
        $this->db->where('reg_code !=', "");
        $query = $this->db->get('users')->result_array();
        foreach($query as $query){
            $total_balance = $total_balance + $query['amount'];
        }
        return $total_balance;
    }


}
