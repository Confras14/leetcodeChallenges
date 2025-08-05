class Solution {
    function triangleType($nums) {
        sort($nums);
        if ($nums[2] >= $nums[0] + $nums[1]){
           return "none";
        }
        elseif ($nums[0] == $nums[1] && $nums[0] == $nums[2]) {
            return "equilateral";
        }
        elseif ($nums[0] == $nums[1] || $nums[0] == $nums[2] || $nums[1] == $nums[2]) {
            return "isosceles";
        }
        else {
            return "scalene";
        }
    }
}
