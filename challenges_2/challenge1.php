<?php

declare(strict_types=1);

function interp (string $firstWord, string $secondWord) : string {
    return "{$firstWord} {$secondWord}";
};

var_dump(interp("fish", "sticks")); // string(11) "fish sticks"
var_dump(interp("hello", "world")); // string(11) "hello world"