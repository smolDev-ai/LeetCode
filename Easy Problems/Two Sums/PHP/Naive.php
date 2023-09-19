<?
class Solution {
   /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[] 
    */

    function twoSum($nums, $target) {
        $result = [];
        $arrayLength = count($nums);
        for($i = 0; $i < $arrayLength; $i++)
        {
            for($j = $i+1; $j < $arrayLength; $j++)
            {
                if($nums[$i] + $nums[$j] == $target)
                {
                    array_push($result, $i, $j);
                }
            }
        }

        return $result;
    }

}