<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function render($view, $params = array()) {
        $this->load->model('events_model');

        $data = array();
        $data['events'] = $this->events_model->get_last();
        $data['last_events'] = array(
            0 => $data['events'][0],
            1 => $data['events'][1]
        );

        if (!$this->input->is_ajax_request()) {
            $this->load->view('header', $data);
            $this->load->view('footer', $data);
        } else {
            $this->load->view($view, array_merge($data, $params));
        }
    }

}
