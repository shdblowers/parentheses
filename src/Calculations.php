<?php

namespace Steven\Parentheses;
class Calculations
{
    public static function longestBalancedLength(string $str, bool $reversed = false): int
    {
        $opener = $reversed ? ')' : '(';
        $closer = $reversed ? '(' : ')';

        $stack = [];
        $len = -1;
        $start = -1;

        foreach (str_split($str) as $k => $c) {
            if ($c === $opener) {
                if (empty($stack)) {
                    $start = $k;
                }
                array_push($stack, $c);
            }

            if ($c === $closer && count($stack) > 0) {
                array_pop($stack);

                if (empty($stack)) {
                    $len = $k + 1 - $start;
                }
            }
        }

        if ($len === -1) {
            return self::longestBalancedLength(strrev($str), true);
        }

        return $len;
    }
}