<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends MY_Controller {

    public function firefoxos() {
        $this->render('products/firefoxos');
    }

    public function lightbeam() {
        $this->render('products/lightbeam');
    }

    public function marketplace() {
        $this->render('products/marketplace');
    }

    public function firefox() {
        $this->render('products/firefox');
    }

    public function webmaker() {
        $this->render('products/webmaker');
    }

}
