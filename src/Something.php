<?php

declare(strict_types=1);

namespace ludovicm67\PlaygroundSemanticRelease;

class Something {
  static function sayHello(string $name = "world"): string {
    return "Hello, $name!";
  }
}
