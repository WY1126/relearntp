<?php
namespace app\test\controller;
class Abc
{
    public function eat($who = '隔壁老王')
    {
        $data = array(
            'a'     =>      54,
            'b'     =>      25,
            'c'     =>      $who,
        );
        return json($data);
    }
}
