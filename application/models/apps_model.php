<?php

class Apps_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $query = $this->loadParseQuery("Apps");
        $query->ascending("name");
        return $query->find();
    }

}
