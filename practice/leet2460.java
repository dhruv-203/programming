//https://leetcode.com/problems/apply-operations-to-an-array/
public class leet2460 {

  public static void main(String[] args) {
    leet2460 obj = new leet2460();

    for (int x : obj.applyOperations(
      new int[] {
        847,
        847,
        0,
        0,
        0,
        399,
        416,
        416,
        879,
        879,
        206,
        206,
        206,
        272,
      }
    )) {
      System.out.println(x);
    }
  }

  public int[] applyOperations(int[] nums) {
    for (int i = 0; i < nums.length - 1; i++) {
      if (nums[i] == nums[i + 1]) {
        nums[i] *= 2;
        nums[i + 1] = 0;
      } else {
        continue;
      }
    }
    for (int k = 0; k < nums.length/2; k++) {
        for (int i = 0; i < nums.length - 1; i++) {
            if (nums[i] == 0 && nums[i + 1] != 0) {
              int tmp = nums[i];
              nums[i] = nums[i + 1];
              nums[i + 1] = tmp;
            }
          }
    }
    return nums;
  }
}
