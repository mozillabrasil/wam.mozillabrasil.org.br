<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apps extends MY_Controller {

    public function index() {
        $this->load->model('apps_model');
        $data = array(
            'apps' => $this->apps_model->get_all()
        );
        $this->render('apps/index', $data);
    }

}
