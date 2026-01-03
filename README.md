# Top 150 LeetCode Solutions

A PHP 8.3 + Docker + Laravel repository for solving the LeetCode Top 150 Interview Questions.

## 🎯 Project Structure

This project follows clean code principles and SOLID design patterns. Each LeetCode problem is implemented as a class that implements `BaseSolvedProblemsInterface` with a public `solve(array &$params): ResolutionResponse` method.

```
app/LeetCode/
├── Array/               # Array manipulation problems (active)
├── TwoPointers/         # Two-pointer technique problems (planned)
├── BaseSolvedProblemsInterface.php  # Interface for all problems
└── ResolutionResponse.php           # Response wrapper class

tests/LeetCode/
└── Array/               # Array problem tests
```

**Note**: Additional categories will be added as problems are implemented. Planned categories include: SlidingWindow, Stack, LinkedList, BinaryTree, Graph, Backtracking, DynamicProgramming, Greedy, BinarySearch, Heap, BitManipulation, Math, Trie, Intervals, and Kadane.

## 🚀 Getting Started

### Prerequisites

- Docker
- Docker Compose

### Installation

1. Clone the repository:
```bash
git clone https://github.com/MatheusSan99/Top150LeetCode.git
cd Top150LeetCode
```

2. Build and start the Docker containers:
```bash
docker-compose up -d --build
```

3. Install dependencies (already done, vendor directory is included):
```bash
docker-compose exec app composer install
```

### Running Tests

Run all tests:
```bash
docker-compose exec app composer test
```

Or directly with PHPUnit:
```bash
docker-compose exec app vendor/bin/phpunit
```

Run specific test suite:
```bash
docker-compose exec app vendor/bin/phpunit tests/LeetCode/Array
```

Run a specific test:
```bash
docker-compose exec app vendor/bin/phpunit tests/LeetCode/Array/MergeSortedArrayTest.php
```

## 🔄 Continuous Integration

This repository uses GitHub Actions to automatically run all tests on pull requests to the `main` branch. This ensures:

- ✅ All code is tested before merging
- ✅ The main branch always contains working code
- ✅ No broken tests can be merged

**For contributors**: Make sure to run `composer test` locally before submitting pull requests. The CI will automatically run when you open a PR.

See [CONTRIBUTING.md](CONTRIBUTING.md) for more details on the CI/CD setup and branch protection rules.

## 📝 Problem Structure

Each problem follows this structure:

### Problem Class (app/LeetCode/<Category>/<ProblemName>.php)

```php
<?php

declare(strict_types=1);

namespace App\LeetCode\<Category>;

use App\LeetCode\BaseSolvedProblemsInterface;
use App\LeetCode\ResolutionResponse;

/**
 * LeetCode Problem <Number>: <Title>
 * 
 * <Problem Description>
 * 
 * Time Complexity: O(?)
 * Space Complexity: O(?)
 */
class <ProblemName> implements BaseSolvedProblemsInterface
{
    public function solve(array &$params): ResolutionResponse
    {
        return new ResolutionResponse(result: $this->solveProblem($params['param1'], $params['param2']));
    }

    /**
     * @param <type> $param1
     * @param <type> $param2
     * @return <type>
     */
    private function solveProblem($param1, $param2)
    {
        // Implementation
    }
}
```

### Test Class (tests/LeetCode/<Category>/<ProblemName>Test.php)

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
}
```

## 📂 Categories

- **Array**: Array manipulation and traversal problems
- **TwoPointers**: Two-pointer technique problems
- **SlidingWindow**: Sliding window technique problems
- **LinkedList**: Linked list problems
- **Stack**: Stack-based problems
- **BinaryTree**: Binary tree problems
- **Graph**: Graph problems
- **DynamicProgramming**: Dynamic programming problems
- **Backtracking**: Backtracking problems
- **Greedy**: Greedy algorithm problems
- **BinarySearch**: Binary search problems
- **Heap**: Heap/Priority queue problems
- **BitManipulation**: Bit manipulation problems
- **Math**: Mathematical problems
- **Trie**: Trie data structure problems
- **Intervals**: Interval problems
- **Kadane**: Kadane's algorithm problems

## 🎓 Code Guidelines

1. **Strict Types**: All problem classes must use `declare(strict_types=1)`
2. **Interface Implementation**: All problem classes must implement `BaseSolvedProblemsInterface`
3. **Method Signature**: The public `solve(array &$params): ResolutionResponse` method receives parameters as an associative array
4. **Response Wrapping**: Return results wrapped in a `ResolutionResponse` object
5. **Helper Methods**: Use private helper methods for the actual algorithm implementation with proper type hints
6. **Documentation**: Include problem description, number, and complexity analysis in docblocks
7. **Testing**: One PHPUnit test class per problem with comprehensive test cases using the params array pattern
8. **SOLID Principles**: Follow clean code and SOLID design patterns
9. **No Web Layer**: No controllers, routes, views, or APIs

## 🔧 Development

### Adding a New Problem

1. Create the problem class in `app/LeetCode/<Category>/<ProblemName>.php`
   - Implement `BaseSolvedProblemsInterface`
   - Use `declare(strict_types=1)` at the top
   - Implement `solve(array &$params): ResolutionResponse` method
2. Create the test class in `tests/LeetCode/<Category>/<ProblemName>Test.php`
   - Pass parameters as an associative array to `solve()`
   - Assert against `$resolutionResponse->result`
3. Run tests to verify implementation
4. Commit with a descriptive message

### Local Development Without Docker

If you prefer to run without Docker:

```bash
# Install dependencies
composer install

# Run tests
composer test
# or
vendor/bin/phpunit
```

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
