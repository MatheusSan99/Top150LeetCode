<?php

namespace Tests\LeetCode\Array;

use App\LeetCode\Array\RemoveDuplicatesFromSortedArray;
use PHPUnit\Framework\TestCase;

class RemoveDuplicatesFromSortedArrayTest extends TestCase
{
    private RemoveDuplicatesFromSortedArray $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new RemoveDuplicatesFromSortedArray();
    }

    public function testExample1(): void
    {
        $params = [
            'nums' => [1, 1, 2],
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals(2, $resolutionResponse->result);
    }

    public function testExample2(): void
    {
        $params = [
            'nums' => [0, 0, 1, 1, 1, 2, 2, 3, 3, 4],
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals(5, $resolutionResponse->result);
    }
}
