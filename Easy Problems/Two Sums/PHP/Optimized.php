<?

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        $arrayLength = count($nums);
        for($i = 0; $i < $arrayLength; $i++)
        {
            $item = $target - $nums[$i];

            if(isset($map[$item]))
            {
                return [$map[$item], $i];
            }

            $map[$nums[$i]] = $i;
        }

        return [];
    }
}