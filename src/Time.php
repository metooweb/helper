<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/12
 * Time: 13:26
 */

namespace metooweb\helper;


class Time
{

    static public function mkdate($month,$day,$year){

        return mktime(0,0,0,$month,$day,$year);
    }

    static public function date(?int $time=null){

        $time === null && $time = time();

        return strtotime( date('Y-m-d' , $time) );
    }


}