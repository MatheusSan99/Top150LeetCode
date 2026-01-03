<?php

namespace Tests\LeetCode\Array;

use App\LeetCode\Array\RemoveElement;
use PHPUnit\Framework\TestCase;

class RemoveElementTest extends TestCase
{
    private RemoveElement $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new RemoveElement();
    }

    public function testExample1(): void
    {
        $params = [
            'nums' => [3, 2, 2, 3],
            'val' => 3,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals(2, $resolutionResponse->result);
    }

    public function testExample2(): void
    {
        $params = [
            'nums' => [0, 1, 2, 2, 3, 0, 4, 2],
            'val' => 2,
        ];

        $resolutionResponse = $this->solution->solve($params);

        $this->assertEquals(5, $resolutionResponse->result);
    }
}
