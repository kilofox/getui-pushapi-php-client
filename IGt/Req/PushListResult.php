<?php

namespace Getui\IGt\Req;

use Getui\Protobuf\PBMessage;

class PushListResult extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields['1'] = '\\Getui\\IGt\\Req\\PushResult';
        $this->values['1'] = [];
    }

    public function results($offset)
    {
        return $this->_get_arr_value('1', $offset);
    }

    public function add_results()
    {
        return $this->_add_arr_value('1');
    }

    public function set_results($index, $value)
    {
        $this->_set_arr_value('1', $index, $value);
    }

    public function remove_last_results()
    {
        $this->_remove_last_arr_value('1');
    }

    public function results_size()
    {
        return $this->_get_arr_size('1');
    }

}
