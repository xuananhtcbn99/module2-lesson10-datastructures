<?php

function check($string)
{
    $stack = new SplStack();
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === "(") {
            $stack->push("(");
        } elseif ($string[$i] === ")") {
            if ($stack->isEmpty()) {
                return false;
            }
            $stack->pop();
        }
    }
    if ($stack->isEmpty()) {
        return true;
    } else {
        return false;
    }
}

function printResult($string)
{
    if (check($string)) {
        echo 'True';
    } else {
        echo "False";
    }
}

$string = "(– b + (b^2 – 4*a*c)^0.5/ 2*a))";
printResult($string);