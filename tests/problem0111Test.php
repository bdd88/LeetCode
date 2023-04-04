<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
final class problem0111Test extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require './Easy/0111.MinimumDepthofBinaryTree.php';
    }

    public static function provideTreeData(): array
    {
        return [
            'Case 1' => [[3,9,20,null,null,15,7], 2],
            'Case 2' => [[2,null,3,null,4,null,5,null,6], 5],
            'Case 3' => [[5,67,null,9], 3],
            'Case 4' => [[null], 0],
        ];
    }

    #[Test]
    #[DataProvider('provideTreeData')]
    public function solution(array $values, int $expected): void
    {
        $tree = createBinaryTree($values);
        $solution = new Solution();
        $answer = $solution->minDepth($tree);

        $this->assertSame($expected, $answer, 'Solution Incorrect');
    }

}