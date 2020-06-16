<?php

namespace Getui\IGt\Req;

use Getui\Protobuf\PBMessage;

class ReqServList extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields['1'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['1'] = '';
        $this->fields['2'] = '\\Getui\\Protobuf\\Type\\PBInt';
        $this->values['2'] = '';
    }

    public function seqId()
    {
        return $this->_get_value('1');
    }

    public function set_seqId($value)
    {
        return $this->_set_value('1', $value);
    }

    public function timestamp()
    {
        return $this->_get_value('2');
    }

    public function set_timestamp($value)
    {
        return $this->_set_value('2', $value);
    }

}
