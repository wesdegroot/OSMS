<?php

function xyzz()
{
    return ($fix = func_num_args());
}

function _parse()
{
    $arg_list = func_get_args();
    for ($i = 0; $i < ($fix = func_num_args()); $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
    }
}

xyzz(1,2,3,4,5,6,7,8,9,10);

echo "<"."h"."r".">";

_parse(1,2,3,4,5,6,7,8,9,10);

?>