<?php

use Parse\ParseQuery;

class Events_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_last($limit = 5, $offset = 1) {
        $query = new ParseQuery("Events");
        $query->descending("local_start");
        $query->limit($limit);
        $query->skip($offset * 5);
        return $query->find();
    }
    
    public function get_count(){
        $events = $this->get_all();
        return count($events);
    }

    function get_all() {
        $query = new ParseQuery("Events");
        $query->descending("local_start");
        return $query->find();
    }

    function get($objectId) {
        $query = new ParseQuery("Events");
        return $query->get($objectId);
    }

}
