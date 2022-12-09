<?php

use Steven\Parentheses\Calculations;
use PHPUnit\Framework\TestCase;

final class CalculationsTest extends TestCase
{
    public function testSimpleCase(): void
    {
        $this->assertEquals(2, Calculations::longestBalancedLength("()"));
        $this->assertEquals(4, Calculations::longestBalancedLength("(())"));
    }

    public function testMoreComplexStrings(): void
    {
        $this->assertEquals(2, Calculations::longestBalancedLength(')()'));
        $this->assertEquals(6, Calculations::longestBalancedLength(')(()())'));
        $this->assertEquals(2, Calculations::longestBalancedLength('((((()'));
        $this->assertEquals(4, Calculations::longestBalancedLength(')))(())))))'));
    }
}
