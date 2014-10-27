<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends MY_Controller {

    public function index() {
        $this->render('blog/index');
    }

}
