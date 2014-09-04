<?php

namespace enrol_elediamultikeys\event;

class elediamultikeys_unenrol extends \core\event\base {

    public function init() {
        $this->data['crud'] = 'u';
        $this->data['objecttable'] = 'enrol';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    public static function get_name() {
        return get_string('elediamultikeys_unenrol_name', 'enrol_elediamultikeys');
    }

    public static function get_explanation() {
        return get_string('elediamultikeys_unenrol_explanation', 'enrol_elediamultikeys');
    }

    public function get_description() {
        $a = new \stdClass();
        $a->user = $this->data['userid'];
        $a->course = $this->data['courseid'];
        return get_string('elediamultikeys_unenrol_description', 'enrol_elediamultikeys', $a);
    }
}