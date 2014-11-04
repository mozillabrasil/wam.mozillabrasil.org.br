<?php

class Categories_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $query = $this->loadParseQuery("Categories");
        $query->ascending("name");
        return $query->find();
    }

}
