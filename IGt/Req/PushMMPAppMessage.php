<?php

namespace Getui\IGt\Req;

use Getui\Protobuf\PBMessage;

class PushMMPAppMessage extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields['1'] = '\\Getui\\IGt\\Req\\MMPMessage';
        $this->values['1'] = '';
        $this->fields['2'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['2'] = [];
        $this->fields['3'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['3'] = [];
        $this->fields['4'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['4'] = [];
        $this->fields['5'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['5'] = '';
    }

    public function message()
    {
        return $this->_get_value('1');
    }

    public function set_message($value)
    {
        return $this->_set_value('1', $value);
    }

    public function appIdList($offset)
    {
        $v = $this->_get_arr_value('2', $offset);
        return $v->get_value();
    }

    public function append_appIdList($value)
    {
        $v = $this->_add_arr_value('2');
        $v->set_value($value);
    }

    public function set_appIdList($index, $value)
    {
        $v = new $this->fields['2']();
        $v->set_value($value);
        $this->_set_arr_value('2', $index, $v);
    }

    public function remove_last_appIdList()
    {
        $this->_remove_last_arr_value('2');
    }

    public function appIdList_size()
    {
        return $this->_get_arr_size("2");
    }

    public function phoneTypeList($offset)
    {
        $v = $this->_get_arr_value('3', $offset);
        return $v->get_value();
    }

    public function append_phoneTypeList($value)
    {
        $v = $this->_add_arr_value('3');
        $v->set_value($value);
    }

    public function set_phoneTypeList($index, $value)
    {
        $v = new $this->fields['3']();
        $v->set_value($value);
        $this->_set_arr_value('3', $index, $v);
    }

    public function remove_last_phoneTypeList()
    {
        $this->_remove_last_arr_value('3');
    }

    public function phoneTypeList_size()
    {
        return $this->_get_arr_size("3");
    }

    public function provinceList($offset)
    {
        $v = $this->_get_arr_value('4', $offset);
        return $v->get_value();
    }

    public function append_provinceList($value)
    {
        $v = $this->_add_arr_value('4');
        $v->set_value($value);
    }

    public function set_provinceList($index, $value)
    {
        $v = new $this->fields['4']();
        $v->set_value($value);
        $this->_set_arr_value('4', $index, $v);
    }

    public function remove_last_provinceList()
    {
        $this->_remove_last_arr_value('4');
    }

    public function provinceList_size()
    {
        return $this->_get_arr_size("4");
    }

    public function seqId()
    {
        return $this->_get_value('5');
    }

    public function set_seqId($value)
    {
        return $this->_set_value('5', $value);
    }

}
