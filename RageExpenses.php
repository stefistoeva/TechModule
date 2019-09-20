<?php
$lostGamesCount = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());
$headset = 0;
$mouse = 0;
$keyboard = 0;
$display = 0;
$trashedSecondHeadset = false;
$trashedSecondMouse = false;
$trashedSecondKeyboard = 1;

while ($lostGamesCount > 0) {
        if ($lostGamesCount % 2 == 0) {
            $headset++;
            $trashedSecondHeadset = true;
        }
        if ($lostGamesCount % 3 == 0) {
            $mouse++;
            $trashedSecondMouse = true;
        }
        if ($trashedSecondMouse && $trashedSecondHeadset) {
            $keyboard++;
            if ($trashedSecondKeyboard % 2 == 0) {
                $display++;
            }
            $trashedSecondKeyboard++;
        }
        $trashedSecondMouse = false;
        $trashedSecondHeadset = false;
    $lostGamesCount--;
}

$headsetTrashed = $headset * $headsetPrice;
$mouseTrashed = $mouse * $mousePrice;
$keyboardTrashed = $keyboard * $keyboardPrice;
$displayTrashed = $display * $displayPrice;
$sum = $headsetTrashed + $mouseTrashed + $keyboardTrashed + $displayTrashed;
$sum = sprintf("%.2f", $sum);
echo "Rage expenses: $sum lv.";
