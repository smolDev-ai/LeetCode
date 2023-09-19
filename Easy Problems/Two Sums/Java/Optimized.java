import java.util.HashMap;
import java.util.Map;

class Solution {
    public int[] twoSum(int[] nums, int target) {
        Map<Integer, Integer> numMap = new HashMap<>();

        for(int i = 0; i < nums.length; i++)
        {
            int item = target - nums[i];
            if(numMap.containsKey(item))
            {
                return new int[] {numMap.get(item), i};
            }

            numMap.put(nums[i], i);
        }

        return new int[0];
    }
}
