class Solution:
        def twoSum(self, nums: List[int], target: int) -> List[int]:
            num_map = {}
        
            for i, num in enumerate(nums):
                item = target - num
                if item in num_map:
                    return [num_map[item], i]
                num_map[num] = i

            return []