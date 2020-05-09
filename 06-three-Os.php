<?php

declare(strict_types=1);

function threeOs(string $str): bool
{
    return preg_match("/[Aa]{3,}/", $str) === 1;
}
var_dump(threeOs("Hellaaa")); // bool(true)
