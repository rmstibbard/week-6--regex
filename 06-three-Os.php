<?php

declare(strict_types=1);

function threeOs(string $str): bool
{
    return preg_match("/o{3}/i", $str) === 1;
}
var_dump(threeOs("Hello")); // bool(false)
var_dump(threeOs("Helloo")); // bool(false)
var_dump(threeOs("Hellooo")); // bool(true)
var_dump(threeOs("HelloOoOo")); // bool(true)
