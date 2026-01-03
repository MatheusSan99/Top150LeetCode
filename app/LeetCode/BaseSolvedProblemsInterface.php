<?php

namespace App\LeetCode;

use App\LeetCode\ResolutionResponse;

interface BaseSolvedProblemsInterface
{
    public function solve(array &$params): ResolutionResponse;
}