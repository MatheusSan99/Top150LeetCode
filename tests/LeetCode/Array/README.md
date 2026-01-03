# Array Problem Tests

This directory contains PHPUnit tests for Array problems.

## Structure

Each test should follow this pattern:

```php
<?php

declare(strict_types=1);

namespace Tests\LeetCode\Array;

use App\LeetCode\Array\<ProblemName>;
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
    }
}
```
