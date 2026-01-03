# Contributing Guide

Thank you for contributing to the Top 150 LeetCode Solutions repository! This guide will help you add new problems following the project's structure and conventions.

## Project Standards

### Code Requirements

1. **PHP 8.3**: All code must be compatible with PHP 8.3+
2. **Strict Types**: Every PHP file must start with `declare(strict_types=1);`
3. **Full Type Hints**: All parameters and return types must be fully typed
4. **Single Method**: Each problem class has exactly one public method named `solve`
5. **Documentation**: Include problem number, description, and complexity analysis
6. **SOLID Principles**: Follow clean code and SOLID design patterns
7. **No Web Layer**: This is a pure algorithm repository - no controllers, routes, views, or APIs

## Adding a New Problem

### Step 1: Choose the Right Category

Place your problem in the appropriate category:

- `Array` - Array manipulation and traversal
- `TwoPointers` - Two-pointer technique
- `SlidingWindow` - Sliding window technique
- `Stack` - Stack-based problems
- `LinkedList` - Linked list problems
- `BinaryTree` - Binary tree problems
- `Graph` - Graph problems
- `Backtracking` - Backtracking problems
- `DynamicProgramming` - Dynamic programming
- `Greedy` - Greedy algorithms
- `BinarySearch` - Binary search
- `Heap` - Heap/Priority queue
- `BitManipulation` - Bit manipulation
- `Math` - Mathematical problems
- `Trie` - Trie data structure
- `Intervals` - Interval problems
- `Kadane` - Kadane's algorithm

### Step 2: Create the Problem Class

Create a file in `app/LeetCode/<Category>/<ProblemName>.php`:

```php
<?php

declare(strict_types=1);

namespace App\LeetCode\<Category>;

/**
 * LeetCode Problem <Number>: <Title>
 * 
 * <Full problem description from LeetCode>
 * 
 * Example 1:
 * Input: <example input>
 * Output: <example output>
 * Explanation: <explanation>
 * 
 * Constraints:
 * - <constraint 1>
 * - <constraint 2>
 * 
 * Time Complexity: O(?) - <explanation>
 * Space Complexity: O(?) - <explanation>
 */
class <ProblemName>
{
    /**
     * @param <type> $param
     * @return <type>
     */
    public function solve(<fully typed parameters>): <return type>
    {
        // Your implementation here
    }
}
```

**Naming Convention:**
- Use PascalCase for class names
- Be descriptive: `ValidPalindrome`, `MergeSortedArray`, `MaximumSubarray`

**Type Hints:**
```php
// Good examples
public function solve(int $target, array $nums): int
public function solve(string $s): bool
public function solve(array $nums): array

// Use PHPDoc for complex array types
/**
 * @param array<int> $nums
 * @param array<string> $words
 * @return array<int, string>
 */
```

### Step 3: Create the Test Class

Create a file in `tests/LeetCode/<Category>/<ProblemName>Test.php`:

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
        // Test the first example from LeetCode
        $input = ...; // Set up input
        $expected = ...; // Expected output
        
        $result = $this->solution->solve($input);
        
        $this->assertEquals($expected, $result);
    }

    public function testExample2(): void
    {
        // Test the second example
    }

    public function testEdgeCaseEmpty(): void
    {
        // Test edge case: empty input
    }

    public function testEdgeCaseSingleElement(): void
    {
        // Test edge case: single element
    }

    public function testEdgeCaseMaxConstraints(): void
    {
        // Test edge case: maximum constraints
    }
}
```

**Test Guidelines:**
- Test all examples provided in the LeetCode problem
- Test edge cases (empty, single element, maximum constraints, etc.)
- Test boundary conditions
- Use descriptive test method names
- Each test should be independent

### Step 4: Run Tests

```bash
# Run all tests
composer test

# Run tests for specific category
vendor/bin/phpunit tests/LeetCode/<Category>

# Run specific test file
vendor/bin/phpunit tests/LeetCode/<Category>/<ProblemName>Test.php
```

### Step 5: Verify Code Quality

Ensure your code:
- [ ] Uses `declare(strict_types=1)` at the top
- [ ] Has all parameters and return types fully typed
- [ ] Includes complete PHPDoc for complex types
- [ ] Has problem description and complexity analysis
- [ ] Has comprehensive test coverage
- [ ] Passes all tests
- [ ] Follows PHP PSR-12 coding standards
- [ ] Has no unnecessary comments (code should be self-documenting)

## Example: Two Sum Problem

### Problem Class (app/LeetCode/Array/TwoSum.php)

```php
<?php

declare(strict_types=1);

namespace App\LeetCode\Array;

/**
 * LeetCode Problem 1: Two Sum
 * 
 * Given an array of integers nums and an integer target, return indices 
 * of the two numbers such that they add up to target.
 * 
 * You may assume that each input would have exactly one solution, 
 * and you may not use the same element twice.
 * 
 * Example 1:
 * Input: nums = [2,7,11,15], target = 9
 * Output: [0,1]
 * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
 * 
 * Time Complexity: O(n) - Single pass through the array
 * Space Complexity: O(n) - Hash map to store seen numbers
 */
class TwoSum
{
    /**
     * @param array<int> $nums
     * @param int $target
     * @return array<int>
     */
    public function solve(array $nums, int $target): array
    {
        $map = [];
        
        foreach ($nums as $index => $num) {
            $complement = $target - $num;
            
            if (isset($map[$complement])) {
                return [$map[$complement], $index];
            }
            
            $map[$num] = $index;
        }
        
        return [];
    }
}
```

### Test Class (tests/LeetCode/Array/TwoSumTest.php)

```php
<?php

declare(strict_types=1);

namespace Tests\LeetCode\Array;

use App\LeetCode\Array\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    private TwoSum $solution;

    protected function setUp(): void
    {
        $this->solution = new TwoSum();
    }

    public function testExample1(): void
    {
        $nums = [2, 7, 11, 15];
        $target = 9;
        $expected = [0, 1];

        $result = $this->solution->solve($nums, $target);

        $this->assertEquals($expected, $result);
    }

    public function testExample2(): void
    {
        $nums = [3, 2, 4];
        $target = 6;
        $expected = [1, 2];

        $result = $this->solution->solve($nums, $target);

        $this->assertEquals($expected, $result);
    }

    public function testExample3(): void
    {
        $nums = [3, 3];
        $target = 6;
        $expected = [0, 1];

        $result = $this->solution->solve($nums, $target);

        $this->assertEquals($expected, $result);
    }

    public function testNegativeNumbers(): void
    {
        $nums = [-1, -2, -3, -4, -5];
        $target = -8;
        $expected = [2, 4];

        $result = $this->solution->solve($nums, $target);

        $this->assertEquals($expected, $result);
    }

    public function testZeroTarget(): void
    {
        $nums = [-3, 0, 3, 90];
        $target = 0;
        $expected = [0, 2];

        $result = $this->solution->solve($nums, $target);

        $this->assertEquals($expected, $result);
    }
}
```

## Pull Request Guidelines

When submitting a pull request:

1. **Title**: Use format "Add: [Problem Number] - [Problem Name]"
   - Example: "Add: 1 - Two Sum"

2. **Description**: Include:
   - Problem number and name
   - LeetCode problem link
   - Category
   - Brief explanation of your approach
   - Complexity analysis

3. **Checklist**:
   - [ ] Code uses strict types
   - [ ] All types are fully hinted
   - [ ] Problem documentation is complete
   - [ ] All tests pass
   - [ ] Edge cases are tested
   - [ ] Code follows SOLID principles

## Questions?

If you have questions or need clarification:
- Check existing problems in the same category for reference
- Review the README files in each category directory
- Open an issue for discussion

Thank you for contributing! 🚀
