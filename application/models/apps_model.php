<?php

use Parse\ParseQuery;

class Apps_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $query = new ParseQuery("Apps");
        $query->ascending("name");
        return $query->find();
    }

}
