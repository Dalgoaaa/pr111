<?php
function func(&$string)
{
    $string .= 'and planes';
}
$str = 'cars ';
func($str);
echo $str;