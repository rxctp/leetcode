<?php
/**
 * Created by PhpStorm.
 * User: rongxiang
 * Date: 2017/12/20
 * Time: 下午5:42
 */

/**
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * Given nums = [2, 7, 11, 15], target = 9,
 * Because nums[0] + nums[1] = 2 + 7 = 9,
 * return [0, 1].
 * @param array $array
 * @param array $target
 * @return array
 * @author rongxiang
 */
function twoSum($array, $target)
{
    if (!$array || !$target) {
        return [];
    }
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count; $j++) {
            if ($i == $j) {
                continue;
            }
            if ($target == ($array[$i] + $array[$j])) {
                return [$i, $j];
            }else {
                echo $array[$i] + $array[$j]."\n";
            }
        }
    }
    return [];
}

$num = [2, 7, 11, 15];
$target = 9;
var_dump(twoSum($num,$target));
