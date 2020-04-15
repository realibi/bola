<?php
$product1 = [ "vitamine", 5000, "1.jpg"];
$product2 = [ "protein strawberry", 7000, "2.jpg"];

$products = [$product1, $product2];

$itemsCount = 0;

while($itemsCount < sizeof($products)){
    $itemsCount++;
}

echo "<h1>Items: " . $itemsCount . "</h1>";

?>