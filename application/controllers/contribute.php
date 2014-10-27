<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contribute extends MY_Controller {

    public function index() {
        $this->render('contribute/index');
    }

}
