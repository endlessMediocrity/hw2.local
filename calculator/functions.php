<?php

function calc($first_num, $second_num, $sign) {
    switch ($sign) {
        case "+":
            return $first_num + $second_num;
        case "-":
            return $first_num - $second_num;
        case "*":
            return $first_num * $second_num;
        case ":":
            return $first_num / $second_num;
    }
    return false;
}