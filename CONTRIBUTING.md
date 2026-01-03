# Contributing Guide

Thank you for contributing to the Top 150 LeetCode Solutions repository! This guide will help you add new problems following the project's structure and conventions.

## Project Standards

### Project Standards

### Code Requirements

1. **PHP 8.3**: All code must be compatible with PHP 8.3+
2. **Strict Types**: Every problem class must start with `declare(strict_types=1);`
3. **Interface Implementation**: All problem classes must implement `BaseSolvedProblemsInterface`
4. **Method Signature**: The public method must be `solve(array &$params): ResolutionResponse`
5. **Response Wrapping**: Return results wrapped in a `ResolutionResponse` object using `new ResolutionResponse(result: $value)`
6. **Helper Methods**: Create private helper methods for the actual algorithm implementation with proper type hints
7. **Documentation**: Include problem number, description, and complexity analysis in docblocks
8. **SOLID Principles**: Follow clean code and SOLID design patterns
9. **No Web Layer**: This is a pure algorithm repository - no controllers, routes, views, or APIs

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

use App\LeetCode\BaseSolvedProblemsInterface;
use App\LeetCode\ResolutionResponse;

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
class <ProblemName> implements BaseSolvedProblemsInterface
{
    public function solve(array &$params): ResolutionResponse
    {
        return new ResolutionResponse(
            result: $this->solveProblem($params['param1'], $params['param2'])
        );
    }

    /**
     * @param <type> $param1
     * @param <type> $param2
     * @return <type>
     */
    private function solveProblem($param1, $param2)
    {
        // Your implementation here
    }
}
```

**Naming Convention:**
- Use PascalCase for class names
- Be descriptive: `ValidPalindrome`, `MergeSortedArray`, `MaximumSubarray`

**Parameter Pattern:**
- The `solve()` method receives an associative array of parameters
- Extract parameters and call a private helper method with proper types
- Return the result wrapped in a `ResolutionResponse`

### Step 3: Create the Test Class

Create a file in `tests/LeetCode/<Category>/<ProblemName>Test.php`:

```php
<?php

namespace Tests\LeetCode\<Category>;

use App\LeetCode\<Category>\<ProblemName>;
use PHPUnit\Framework\TestCase;

class <ProblemName>Test extends TestCase
{
    private <ProblemName> $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new <ProblemName>();
    }

    public function testExample1(): void
    {
        $params = [
            'param1' => $value1,
            'param2' => $value2,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals($expected, $resolutionResponse->result);
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
- Pass parameters as an associative array to `solve()`
- Access the result via `$resolutionResponse->result`
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
- [ ] Uses `declare(strict_types=1)` at the top of problem classes
- [ ] Implements `BaseSolvedProblemsInterface`
- [ ] Has the correct `solve(array &$params): ResolutionResponse` signature
- [ ] Returns results wrapped in `ResolutionResponse`
- [ ] Uses private helper methods with proper type hints
- [ ] Includes complete PHPDoc for complex types in helper methods
- [ ] Has problem description and complexity analysis in docblocks
- [ ] Has comprehensive test coverage using the params array pattern
- [ ] Passes all tests
- [ ] Follows PHP PSR-12 coding standards
- [ ] Has no unnecessary comments (code should be self-documenting)

## Example: Two Sum Problem

### Problem Class (app/LeetCode/Array/TwoSum.php)

```php
<?php

declare(strict_types=1);

namespace App\LeetCode\Array;

use App\LeetCode\BaseSolvedProblemsInterface;
use App\LeetCode\ResolutionResponse;

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
class TwoSum implements BaseSolvedProblemsInterface
{
    public function solve(array &$params): ResolutionResponse
    {
        return new ResolutionResponse(
            result: $this->twoSum($params['nums'], $params['target'])
        );
    }

    /**
     * @param array<int> $nums
     * @param int $target
     * @return array<int>
     */
    private function twoSum(array $nums, int $target): array
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

namespace Tests\LeetCode\Array;

use App\LeetCode\Array\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    private TwoSum $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new TwoSum();
    }

    public function testExample1(): void
    {
        $params = [
            'nums' => [2, 7, 11, 15],
            'target' => 9,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([0, 1], $resolutionResponse->result);
    }

    public function testExample2(): void
    {
        $params = [
            'nums' => [3, 2, 4],
            'target' => 6,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([1, 2], $resolutionResponse->result);
    }

    public function testExample3(): void
    {
        $params = [
            'nums' => [3, 3],
            'target' => 6,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([0, 1], $resolutionResponse->result);
    }

    public function testNegativeNumbers(): void
    {
        $params = [
            'nums' => [-1, -2, -3, -4, -5],
            'target' => -8,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([2, 4], $resolutionResponse->result);
    }

    public function testZeroTarget(): void
    {
        $params = [
            'nums' => [-3, 0, 3, 90],
            'target' => 0,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([0, 2], $resolutionResponse->result);
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
   - [ ] Code uses `declare(strict_types=1)`
   - [ ] Class implements `BaseSolvedProblemsInterface`
   - [ ] Method signature is `solve(array &$params): ResolutionResponse`
   - [ ] Result is wrapped in `ResolutionResponse`
   - [ ] Helper methods have proper type hints
   - [ ] Problem documentation is complete
   - [ ] All tests pass
   - [ ] Tests use the params array pattern
   - [ ] Edge cases are tested
   - [ ] Code follows SOLID principles

## Continuous Integration (CI/CD)

### Automated Testing

This repository uses GitHub Actions to automatically run all tests on every pull request to the `main` branch. The CI workflow:

1. **Triggers on**: Pull requests and pushes to `main`
2. **Sets up**: PHP 8.3 environment with required extensions
3. **Validates**: `composer.json` and `composer.lock` files
4. **Installs**: All dependencies via Composer
5. **Runs**: Complete PHPUnit test suite

The workflow is defined in `.github/workflows/tests.yml`.

### Branch Protection (Repository Maintainers)

To enforce that tests must pass before merging, enable branch protection rules:

1. Go to **Settings** → **Branches** in the GitHub repository
2. Add a branch protection rule for `main`
3. Enable the following settings:
   - ✅ **Require status checks to pass before merging**
   - ✅ **Require branches to be up to date before merging**
   - Select the **Run PHPUnit Tests** check as required
   - ✅ **Do not allow bypassing the above settings** (recommended)

With these settings enabled:
- Pull requests cannot be merged if tests fail
- All contributors must ensure their code passes tests
- The main branch always contains working, tested code

### What This Means for Contributors

- **Before submitting a PR**: Run `composer test` locally to ensure all tests pass
- **After submitting a PR**: Wait for the CI checks to complete
- **If tests fail**: Review the CI logs, fix the issues, and push new commits
- **When tests pass**: Your PR is ready for review and can be merged (after approval)

## Questions?

If you have questions or need clarification:
- Check existing problems in the same category for reference
- Review the README files in each category directory
- Open an issue for discussion

Thank you for contributing! 🚀
