<?php

function get_date_by_parse($date) {
    return DateTime::createFromFormat('Y-m-d\TH:i:s', $date);
}

function get_event_header($objectId) {
    return base_url() . 'assets/images/events/' . $objectId . '.jpg';
}

function get_apps_header($objectId) {
    return base_url() . 'assets/images/apps/' . $objectId . '.jpg';
}
