<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subscribe extends MY_Controller {

    public function add() {
        $this->load->model('emails_model');
        $email = $this->input->post('email', true);
        $data = array(
            'email' => $email
        );
        $this->render('subscribe/add', $data);
    }

}
