<?php

declare(strict_types=1);

function words(string $str): array
{
    return preg_split("/\s+,*/", $str);
}

var_dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
var_dump(words("Hello, my name is Dolemite"));  // ["Hello", "my", "name", "is", "Dolemite"]
                                                // NOT QUITE RIGHT. RETURNS EMPTY ARRAY ITEM AFTER "Hello"
