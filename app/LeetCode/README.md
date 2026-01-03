# LeetCode Categories

This directory contains all LeetCode problem categories with their respective problem classes.

## Available Categories

- **Array** - Array manipulation and traversal problems
- **TwoPointers** - Two-pointer technique problems
- **SlidingWindow** - Sliding window technique problems
- **Stack** - Stack-based problems
- **LinkedList** - Linked list problems
- **BinaryTree** - Binary tree problems
- **Graph** - Graph problems
- **Backtracking** - Backtracking problems
- **DynamicProgramming** - Dynamic programming problems
- **Greedy** - Greedy algorithm problems
- **BinarySearch** - Binary search problems
- **Heap** - Heap/Priority queue problems
- **BitManipulation** - Bit manipulation problems
- **Math** - Mathematical problems
- **Trie** - Trie data structure problems
- **Intervals** - Interval problems
- **Kadane** - Kadane's algorithm problems

## Code Guidelines

1. **Strict Types**: All files must use `declare(strict_types=1)`
2. **Type Hints**: All parameters and return types must be fully typed
3. **Single Responsibility**: One problem per class, one public method named `solve`
4. **Documentation**: Include problem description, number, and complexity analysis
5. **SOLID Principles**: Follow clean code and SOLID design patterns
6. **No Web Layer**: No controllers, routes, views, or APIs

## Problem Class Template

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
