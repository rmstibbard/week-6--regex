<?php

declare(strict_types=1);

function validEmail(string $str): bool
{
    $str = preg_replace("/^\s*/", "", $str);
    $str = preg_replace("/\s*$/", "", $str);
    return $str = filter_var($str, FILTER_VALIDATE_EMAIL) !== false;
}

var_dump(validEmail(" blahf   ")); // bool(false)
var_dump(validEmail(" blah@f")); // bool(false)
var_dump(validEmail("blah@ fish.horse")); // bool(false)
var_dump(validEmail(" blah@fish.horse")); // bool(true)
var_dump(validEmail("blah@fish.horse ")); // bool(true)
var_dump(validEmail(" blah@fish.horse ")); // bool(true)
