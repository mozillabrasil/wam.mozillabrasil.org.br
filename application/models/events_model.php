<?php

class Events_model extends MY_Model {
    
    function __construct() {
        parent::__construct();
    }

    function get_last($limit = 5, $offset = 1) {
        $query = $this->loadParseQuery("Events");
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
        $query = $this->loadParseQuery("Events");
        $query->descending("local_start");
        return $query->find();
    }

    function get($objectId) {
        $query = $this->loadParseQuery("Events");
        return $query->get($objectId);
    }

}
