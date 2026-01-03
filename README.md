# Top 150 LeetCode Solutions

A PHP 8.3 + Docker + Laravel repository for solving the LeetCode Top 150 Interview Questions.

## 🎯 Project Structure

This project follows clean code principles and SOLID design patterns. Each LeetCode problem should be implemented as a single class with one public `solve` method, fully typed with `declare(strict_types=1)`.

```
app/LeetCode/
├── Array/
├── TwoPointers/
├── SlidingWindow/
├── Stack/
├── LinkedList/
├── BinaryTree/
├── Graph/
├── Backtracking/
├── DynamicProgramming/
├── Greedy/
├── BinarySearch/
├── Heap/
├── BitManipulation/
├── Math/
├── Trie/
├── Intervals/
└── Kadane/

tests/LeetCode/
├── Array/
├── TwoPointers/
├── SlidingWindow/
├── Stack/
├── LinkedList/
├── BinaryTree/
├── Graph/
├── Backtracking/
├── DynamicProgramming/
├── Greedy/
├── BinarySearch/
├── Heap/
├── BitManipulation/
├── Math/
├── Trie/
├── Intervals/
└── Kadane/
```

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

## 📝 Problem Structure

Each problem follows this structure:

### Problem Class (app/LeetCode/<Category>/<ProblemName>.php)

```php
<?php

declare(strict_types=1);

namespace App\LeetCode\<Category>;

/**
 * LeetCode Problem <Number>: <Title>
 * 
 * <Problem Description>
 * 
 * Time Complexity: O(?)
 * Space Complexity: O(?)
 */
class <ProblemName>
{
    public function solve(<typed parameters>): <return type>
    {
        // Implementation
    }
}
```

### Test Class (tests/LeetCode/<Category>/<ProblemName>Test.php)

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

1. **Strict Types**: All files must use `declare(strict_types=1)`
2. **Type Hints**: All parameters and return types must be fully typed
3. **Single Responsibility**: One problem per class, one public method named `solve`
4. **Documentation**: Include problem description, number, and complexity analysis
5. **Testing**: One PHPUnit test class per problem with comprehensive test cases
6. **SOLID Principles**: Follow clean code and SOLID design patterns
7. **No Web Layer**: No controllers, routes, views, or APIs

## 🔧 Development

### Adding a New Problem

1. Create the problem class in `app/LeetCode/<Category>/<ProblemName>.php`
2. Create the test class in `tests/LeetCode/<Category>/<ProblemName>Test.php`
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
