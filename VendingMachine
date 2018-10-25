<?php
$sum = 0;
while ($coins !== "Start") {
    $coins = readline();
    if ($coins == "Start") {
        break;
    }
    if ($coins == 0.1 || $coins == 0.2 || $coins == 0.5 || $coins == 1 || $coins == 2){
        $sum += $coins;
    } else {
        echo "Cannot accept $coins" . PHP_EOL;
    }
}
 $newSum = 0;
do {
    $product = readline();
    if ($product == "End") {
        break;
    }
    switch ($product) {
        case "Nuts": $newSum = round($sum - 2.0);
            if ($newSum >= 0) {
                $sum -= 2.0;
                echo "Purchased nuts" . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
                $newSum = $sum + 2.0;
            } break;
        case "Water": $newSum = round($sum - 0.7);
            if ($newSum >= 0) {
                $sum -= 0.7;
                echo "Purchased water" . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
                $newSum = $sum + 0.7;
            } break;
        case "Crisps": $newSum = round($sum - 1.5);
            if ($newSum >= 0) {
                $sum -= 1.5;
                echo "Purchased crisps" . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
                $newSum = $sum + 1.5;
            } break;
        case "Soda": $newSum = round($sum - 0.8);
            if ($newSum >= 0) {
                $sum -= 0.8;
                echo "Purchased soda" . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
                $newSum = $sum + 0.8;
            } break;
        case "Coke": $newSum = round($sum - 1.0);
            if ($newSum >= 0) {
                $sum -= 1.0;
                echo "Purchased coke" . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
                $newSum = $sum + 1.0;
            } break;
        case ($product != "Nuts" || $product != "Water" || $product != "Crisps" || $product != "Soda" || $product != "Coke" || $product != "End"): echo "Invalid product" . PHP_EOL; break;
        default; break;
    }
} while ($product !== "End");
printf("Change: %.2f", abs($sum));
