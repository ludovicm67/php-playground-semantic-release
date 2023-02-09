<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ludovicm67\PlaygroundSemanticRelease\Something;

final class SomethingTest extends TestCase {
  public function testHelloEmpty(): void {
    $this->assertEquals('Hello, world!', Something::sayHello());
  }

  public function testHello(): void {
    $this->assertEquals('Hello, foo!', Something::sayHello("foo"));
  }
}
