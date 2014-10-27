<?php

use Parse\ParseQuery;

class Categories_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $query = new ParseQuery("Categories");
        $query->ascending("name");
        return $query->find();
    }

}
