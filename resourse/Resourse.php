<?php

namespace app\resourse;

 class Resourse
{
    public static function getCity($reg){

        if($reg=='dp')return 'Днепр';
        if($reg=='ky')return 'Киев';
        if($reg=='kh')return 'Харьков';
        if($reg=='vn')return 'Винница';
        if($reg=='kv')return 'Кропивницкий';
        if($reg=='km')return 'Кременчуг';
        if($reg=='iz')return 'Измаил';
        if($reg=='od')return 'Одесса';
        if($reg=='bc')return 'Белая Церковь';
        if($reg=='sl')return 'Славянск';
    }
}