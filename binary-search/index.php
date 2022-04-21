<?php
$nums = range(1, 2000000);

function binarySearch($arr, $item, $start = 0, $final = null): bool|int
{
    if ($final === null) {
        $final = count($arr) - 1;
    }

    if ($start > $final) {
        return false;
    }

    $half = (int)(($start + $final) / 2);

    if ($arr[$half] !== $item) {
        if ($arr[$half] < $item) {
            $start = $half + 1;
        } else {
            $final = $half - 1;
        }

        return binarySearch($arr, $item, $start, $final);
    }
    return  $half;
}

$start = microtime(true);

var_dump(binarySearch($nums, 1500000));
$time = round(microtime(true) - $start, 4);
echo '<br>Time ' . $time . '<br>';