<?php

namespace msng\StringHelper\Tests;

use msng\StringHelper\StringHelper;
use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    private $lowerCamel = 'stringHelperTest';
    private $UpperCamel = 'StringHelperTest';
    private $lower_snake = 'string_helper_test';
    private $UPPER_SNAKE = 'STRING_HELPER_TEST';

    // Camel to snake

    public function testFromLowerCamelToLowerSnake()
    {
        $lower_snake = StringHelper::fromCamel($this->lowerCamel)->to_lower_snake();

        $this->assertSame($this->lower_snake, $lower_snake);
    }

    public function testFromLowerCamelToUpperSnake()
    {
        $UPPER_SNAKE = StringHelper::fromCamel($this->lowerCamel)->TO_UPPER_SNAKE();

        $this->assertSame($this->UPPER_SNAKE, $UPPER_SNAKE);
    }

    public function testFromUpperCamelToLowerSnake()
    {
        $lower_snake = StringHelper::fromCamel($this->UpperCamel)->to_lower_snake();

        $this->assertSame($this->lower_snake, $lower_snake);
    }

    public function testFromUpperCamelToUpperSnake()
    {
        $UPPER_SNAKE = StringHelper::fromCamel($this->UpperCamel)->TO_UPPER_SNAKE();

        $this->assertSame($this->UPPER_SNAKE, $UPPER_SNAKE);
    }

    // Snake to camel

    public function testFromLowerSnakeToLowerCamel()
    {
        $lowerCamel = StringHelper::from_snake($this->lower_snake)->toLowerCamel();

        $this->assertSame($this->lowerCamel, $lowerCamel);
    }

    public function testFromLowerSnakeToUpperCamel()
    {
        $UpperCamel = StringHelper::from_snake($this->lower_snake)->ToUpperCamel();

        $this->assertSame($this->UpperCamel, $UpperCamel);
    }

    public function testFromUpperSnakeToLowerCamel()
    {
        $lowerCamel = StringHelper::from_snake($this->UPPER_SNAKE)->toLowerCamel();

        $this->assertSame($this->lowerCamel, $lowerCamel);
    }

    public function testFromUpperSnakeToUpperCamel()
    {
        $UpperCamel = StringHelper::from_snake($this->UPPER_SNAKE)->ToUpperCamel();

        $this->assertSame($this->UpperCamel, $UpperCamel);
    }
}
