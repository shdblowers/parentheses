<?php

namespace Steven\Parentheses\Tests;

use Steven\Parentheses\Calculations;
use PHPUnit\Framework\TestCase;

final class CalculationsTest extends TestCase
{
    public function testSimpleCase()
    {
        $this->assertEquals(2, Calculations::longestBalancedLength("()"));
        $this->assertEquals(4, Calculations::longestBalancedLength("(())"));
    }

    public function testMoreComplexStrings()
    {
        $this->assertEquals(2, Calculations::longestBalancedLength(')()'));
        $this->assertEquals(6, Calculations::longestBalancedLength(')(()())'));
        $this->assertEquals(2, Calculations::longestBalancedLength('((((()'));
        $this->assertEquals(4, Calculations::longestBalancedLength(')))(())))))'));
    }
}
