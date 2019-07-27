<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_desc() {
        echo '<form method="post" action="' . base_url() . 'admin_controller/update_desc" />';
        echo '<textarea name="desc"></textarea>';
        echo '<input type="submit" name="submit" />';
        echo '</form>';
    }

    public function update_desc() {
        $desc = $this->input->post('desc');
        $this->db->set('product_desc', $desc);
        $this->db->where('product_pid', '1');
        if($this->db->update('data_product')) {
            echo '1';
        }
    }

}
?>