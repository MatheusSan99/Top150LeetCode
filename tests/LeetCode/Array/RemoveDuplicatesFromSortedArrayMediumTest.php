<?php

namespace Tests\LeetCode\Array;

use App\LeetCode\Array\RemoveDuplicatesFromSortedArrayMedium;
use PHPUnit\Framework\TestCase;

class RemoveDuplicatesFromSortedArrayMediumTest extends TestCase
{
    private RemoveDuplicatesFromSortedArrayMedium $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new RemoveDuplicatesFromSortedArrayMedium();
    }

    public function testExample1(): void
    {
        $params = [
            'nums' => [1, 1, 1, 2, 2, 3],
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals(5, $resolutionResponse->result);
    }

    public function testExample2(): void
    {
        $params = [
            'nums' => [0, 0, 1, 1, 1, 1, 2, 3, 3],
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals(7, $resolutionResponse->result);
    }

    public function testExample3(): void
    {
        $params = [
            'nums' => [1,1,1,2,2,2,3,3],
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals(6, $resolutionResponse->result);
    }
}
