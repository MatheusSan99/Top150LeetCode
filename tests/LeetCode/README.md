# LeetCode Tests

This directory contains PHPUnit tests for all LeetCode problems.

## Test Structure

Each category has its own subdirectory containing tests for problems in that category.

## Test Class Template

```php
<?php

declare(strict_types=1);

namespace Tests\LeetCode\<Category>;

use App\LeetCode\<Category>\<ProblemName>;
use PHPUnit\Framework\TestCase;

class <ProblemName>Test extends TestCase
{
    private <ProblemName> $solution;

    protected function setUp(): void
    {
        $this->solution = new <ProblemName>();
    }

    public function testExample1(): void
    {
        // Test implementation
        $this->assertEquals($expected, $this->solution->solve($input));
    }

    public function testExample2(): void
    {
        // Test implementation
        $this->assertEquals($expected, $this->solution->solve($input));
    }

    public function testEdgeCase(): void
    {
        // Test edge cases
        $this->assertEquals($expected, $this->solution->solve($input));
    }
}
```

## Running Tests

Run all tests:
```bash
composer test
```

Run tests for a specific category:
```bash
vendor/bin/phpunit tests/LeetCode/Array
```

Run a specific test file:
```bash
vendor/bin/phpunit tests/LeetCode/Array/MergeSortedArrayTest.php
```
