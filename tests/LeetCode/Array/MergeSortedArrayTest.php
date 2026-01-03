<?php

namespace Tests\LeetCode\Array;

use App\LeetCode\Array\MergeSortedArray;
use PHPUnit\Framework\TestCase;

class MergeSortedArrayTest extends TestCase
{
    private MergeSortedArray $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new MergeSortedArray();
    }

    public function testExample1(): void 
    {
        $params = [
            'nums1' => [1,2,3,0,0,0],
            'm' => 3,

            'nums2' => [2,5,6],
            'n' => 3
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([1,2,2,3,5,6], $resolutionResponse->result);
    }

    public function testExample2(): void 
    {
        $params = [
            'nums1' => [1],
            'm' => 1,
            'nums2' => [],
            'n' => 0
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([1], $resolutionResponse->result);
    }

    public function testExample3(): void 
    {
        $params = [
            'nums1' => [0],
            'm' => 0,
            'nums2' => [1],
            'n' => 1
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals([1], $resolutionResponse->result);
    }
}
