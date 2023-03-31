<?php

/*
// Brute force with hashmap.
class StockSpanner {
    private array $spanMap = array();

    function next($price) {
        $targetKey = sizeof($this->spanMap) - 1;
        while ($targetKey >= 0 && $this->spanMap[$targetKey]['price'] <= $price) {
            $targetKey -= $this->spanMap[$targetKey]['span'];
        }
        $span = sizeof($this->spanMap) - $targetKey;
        $this->spanMap[] = ['price' => $price, 'span' => $span];
        return $span;
    }
}
*/

// Monotonic stack
class StockSpanner {
    private array $stack = array();

    function next($price) {
        $span = 1;
        while (sizeof($this->stack) > 0 && end($this->stack)['price'] <= $price) {
            $span += array_pop($this->stack)['span'];
        }
        $this->stack[] = ['price' => $price, 'span' => $span];
        return $span;
    }
}

$stockSpanner = new StockSpanner();
$inputPrices = [100,80,60,70,60,75,85];
foreach ($inputPrices as $price) {
    echo $stockSpanner->next($price) . PHP_EOL;
}