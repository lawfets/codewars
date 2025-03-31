<?php

function hello($name = '' ): string {
    // empty name or no name, both are false
    if ($name === '')
        return "Hello, World!";
    // make sure all letters are lowercase before making the first letter uppercase
    // concatenate to form the required string.
    else
        return "Hello, ". ucfirst(strtolower($name)). "!";
}