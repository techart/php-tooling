<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

/**
 * Просто пример
 */
final class GreeterTest extends TestCase
{    
    /**
     * Сравнение строки со строкой
     *
     * @return void
     */
    public function testGreetsWithName(): void
    {
        $greeting = 'Hello, Alice!';

        $this->assertSame('Hello, Alice!', $greeting);
    }
}