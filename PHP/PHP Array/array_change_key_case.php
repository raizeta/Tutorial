<?php
function array_change_key_case_unicode($arr, $c = CASE_LOWER) 
{
    $c = ($c == CASE_LOWER) ? MB_CASE_LOWER : MB_CASE_UPPER;
    foreach ($arr as $k => $v) 
    {
        $ret[mb_convert_case($k, $c, "UTF-8")] = $v;
    }
    return $ret;
}

$arr = array("FirSt" => 1, "yağ" => "Oil", "şekER" => "sugar");
print_r(array_change_key_case($arr, CASE_UPPER));
print_r(array_change_key_case_unicode($arr, CASE_UPPER));

#print_r(array_change_key_case($arr, CASE_UPPER));
Array
(
    [FIRST] => 1
    [YAğ] => Oil
    [şEKER] => sugar
)

#print_r(array_change_key_case_unicode($arr, CASE_UPPER));
Array
(
    [FIRST] => 1
    [YAĞ] => Oil
    [ŞEKER] => sugar
)