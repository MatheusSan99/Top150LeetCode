# Problem Templates

Use these templates when creating new LeetCode problems.

## Problem Class Template

```php
<?php

declare(strict_types=1);

namespace App\LeetCode\[CATEGORY];

use App\LeetCode\BaseSolvedProblemsInterface;
use App\LeetCode\ResolutionResponse;

/**
 * LeetCode Problem [NUMBER]: [TITLE]
 * 
 * [FULL PROBLEM DESCRIPTION]
 * 
 * Example 1:
 * Input: [INPUT]
 * Output: [OUTPUT]
 * Explanation: [EXPLANATION]
 * 
 * Example 2:
 * Input: [INPUT]
 * Output: [OUTPUT]
 * Explanation: [EXPLANATION]
 * 
 * Constraints:
 * - [CONSTRAINT 1]
 * - [CONSTRAINT 2]
 * 
 * Time Complexity: O(?) - [EXPLANATION]
 * Space Complexity: O(?) - [EXPLANATION]
 */
class [PROBLEM_NAME] implements BaseSolvedProblemsInterface
{
    public function solve(array &$params): ResolutionResponse
    {
        return new ResolutionResponse(
            result: $this->solveProblem($params['param1'], $params['param2'])
        );
    }

    /**
     * @param [TYPE] $param1
     * @param [TYPE] $param2
     * @return [TYPE]
     */
    private function solveProblem($param1, $param2)
    {
        // Implementation
    }
}
```

## Test Class Template

```php
<?php

namespace Tests\LeetCode\[CATEGORY];

use App\LeetCode\[CATEGORY]\[PROBLEM_NAME];
use PHPUnit\Framework\TestCase;

class [PROBLEM_NAME]Test extends TestCase
{
    private [PROBLEM_NAME] $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new [PROBLEM_NAME]();
    }

    public function testExample1(): void
    {
        $params = [
            'param1' => [VALUE1],
            'param2' => [VALUE2],
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([EXPECTED], $resolutionResponse->result);
    }

    public function testExample2(): void
    {
        // Test second example
    }
}
```

## Common Type Hints

### Basic Types (for helper methods)
```php
private function helperMethod(int $n): int
private function helperMethod(float $x): float
private function helperMethod(string $s): string
private function helperMethod(bool $flag): bool
```

### Arrays (for helper methods)
```php
// Integer array
/**
 * @param array<int> $nums
 * @return array<int>
 */
private function helperMethod(array $nums): array

// String array
/**
 * @param array<string> $words
 * @return array<string>
 */
private function helperMethod(array $words): array

// Mixed array
/**
 * @param array<int|string> $items
 * @return array<int, mixed>
 */
private function helperMethod(array $items): array

// 2D array
/**
 * @param array<array<int>> $matrix
 * @return array<array<int>>
 */
private function helperMethod(array $matrix): array
```

### Multiple Parameters (for helper methods)
```php
/**
 * @param array<int> $nums
 * @param int $target
 * @return array<int>
 */
private function helperMethod(array $nums, int $target): array
```

### Reference Parameters (for in-place modifications)
```php
/**
 * @param array<int> $nums
 * @return array<int>
 */
private function helperMethod(array &$nums): array
```

## Common Complexity Patterns

### Time Complexity
- O(1) - Constant time
- O(log n) - Logarithmic (binary search, balanced tree)
- O(n) - Linear (single pass)
- O(n log n) - Linearithmic (efficient sorting)
- O(n²) - Quadratic (nested loops)
- O(2ⁿ) - Exponential (recursive subsets)
- O(n!) - Factorial (permutations)

### Space Complexity
- O(1) - Constant space (only variables)
- O(log n) - Logarithmic space (recursion depth)
- O(n) - Linear space (array/hash map of input size)
- O(n²) - Quadratic space (2D array)

## File Naming Conventions

### Problem Class Files
- Use PascalCase
- Be descriptive
- Examples:
  - `TwoSum.php`
  - `ValidPalindrome.php`
  - `MergeSortedArray.php`
  - `LongestSubstringWithoutRepeating.php`

### Test Class Files
- Problem name + "Test"
- Examples:
  - `TwoSumTest.php`
  - `ValidPalindromeTest.php`
  - `MergeSortedArrayTest.php`

## Category Mapping

| Category | LeetCode Tags |
|----------|---------------|
| Array | Array, Matrix |
| TwoPointers | Two Pointers |
| SlidingWindow | Sliding Window |
| Stack | Stack, Monotonic Stack |
| LinkedList | Linked List |
| BinaryTree | Binary Tree, Binary Search Tree |
| Graph | Graph, BFS, DFS |
| Backtracking | Backtracking |
| DynamicProgramming | Dynamic Programming, DP |
| Greedy | Greedy |
| BinarySearch | Binary Search |
| Heap | Heap, Priority Queue |
| BitManipulation | Bit Manipulation |
| Math | Math, Geometry |
| Trie | Trie |
| Intervals | Intervals |
| Kadane | Maximum Subarray, Kadane |

## Quick Reference

### 1. Create Problem Class
```bash
# Path: app/LeetCode/[Category]/[ProblemName].php
```

### 2. Create Test Class
```bash
# Path: tests/LeetCode/[Category]/[ProblemName]Test.php
```

### 3. Run Tests
```bash
composer test
# or
vendor/bin/phpunit tests/LeetCode/[Category]/[ProblemName]Test.php
```

### 4. Verify with Docker
```bash
docker-compose exec app composer test
```
