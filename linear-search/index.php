<?php
$nums = range(1, 1000000);

/**
 * @param $arr
 * @param $item
 * @return int|null
 */
function linearSearch(array $arr, int $item): ?int
{
    foreach ($arr as $key => $value) {
        if ($value == $item) {
            return $key;
        }
    }
    return false;
}

$start = microtime(true);
//var_dump(linearSearch($nums, 1000000));
var_dump(array_search(1000000, $nums));
$time = round(microtime(true) - $start, 4);
echo '<br>Time ' . $time . '<br>';