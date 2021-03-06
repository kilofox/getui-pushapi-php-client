<?php

namespace Getui\IGt\Req;

use Getui\Protobuf\PBMessage;

class NotifyInfo extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields['1'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['1'] = '';
        $this->fields['2'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['2'] = '';
        $this->fields['3'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['3'] = '';
        $this->fields['4'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['4'] = '';
        $this->fields['5'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['5'] = '';
        $this->fields['6'] = '\\Getui\\IGt\\Req\\NotifyInfo_Type';
        $this->values['6'] = '';
        $this->values['6'] = new NotifyInfo_Type;
        $this->values['6']->value = NotifyInfo_Type::_payload;
        $this->fields['7'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['7'] = '';
    }

    public function title()
    {
        return $this->_get_value('1');
    }

    public function set_title($value)
    {
        return $this->_set_value('1', $value);
    }

    public function content()
    {
        return $this->_get_value('2');
    }

    public function set_content($value)
    {
        return $this->_set_value('2', $value);
    }

    public function payload()
    {
        return $this->_get_value('3');
    }

    public function set_payload($value)
    {
        return $this->_set_value('3', $value);
    }

    public function intent()
    {
        return $this->_get_value('4');
    }

    public function set_intent($value)
    {
        return $this->_set_value('4', $value);
    }

    public function url()
    {
        return $this->_get_value('5');
    }

    public function set_url($value)
    {
        return $this->_set_value('5', $value);
    }

    public function type()
    {
        return $this->_get_value('6');
    }

    public function set_type($value)
    {
        return $this->_set_value('6', $value);
    }

    public function notifyId()
    {
        return $this->_get_value('7');
    }

    public function set_notifyId($value)
    {
        return $this->_set_value('7', $value);
    }

}
