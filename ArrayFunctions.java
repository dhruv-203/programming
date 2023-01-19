import java.util.ArrayList;
import java.util.Scanner;

public class ArrayFunctions {

  public static int getCount(Integer[] arr) {
    int count = 0;
    for (Integer integer : arr) {
      if (integer != null) {
        count++;
      } else {
        break;
      }
    }
    return count;
  }

  public static void insert(Integer[] arr, int index, Integer value) {
    int count = getCount(arr);
    Integer temp;
    if (index < count) {
      for (int i = index; i <= count; i++) {
        temp = arr[i];
        arr[i] = value;
        value = temp;
      }
    } else if (index == count) {
      insert(arr, value);
    } else {
      System.out.println(
        "Error Can't Enter Value as Previous Locations are still null"
      );
    }
  }

  public static void insert(Integer[] arr, int value) {
    int count = getCount(arr);
    if (count < arr.length) {
      arr[count] = value; // yahan -1 nai kia becoz hume null value ko override krna hai
    } else {
      System.out.println("ArrayOutOfBoundIndex");
    }
  }

  public static Integer pop(Integer[] arr, int index) {
    int count = getCount(arr);
    if (count == 0) {
      return -1;
    } else {
      // ArrayList<Integer> temp = new ArrayList<Integer>();
      Integer popItem = arr[index];
      // for (int i = 0; i < arr.length; i++) {
      //   if (i != index) {
      //     temp.add(arr[i]);
      //   }
      // }
      // arr = temp.toArray(arr);
      // // System.out.println(arr.length);
      // return popItem;
      for(int i = index; i<count;i++){
        if(i==(count-1)){
          arr[i]=null;
          continue;
        }
        arr[i]= arr[i+1];
      }
      return popItem;
    }
  }

  public static Integer pop(Integer[] arr) {
    int count = getCount(arr);
    // System.out.println(count);
    if (count == 0) {
      return -1;
    } else {
      return pop(arr, count - 1); // count-1 becoz pop krna hai existing elem ko
    }
  }

  //update
  public static void update(Integer[] arr, int index, int value) {
    int count = getCount(arr);
    if (index >= arr.length) {
      System.out.println("index goes beyond array size");
    } else if (index >= count) {
      System.out.println("No Element exists at that index");
    } else {
      arr[index] = value;
    }
  }

  public static int search(Integer[] arr, int value) {
    int index = -1;
    int count = getCount(arr);
    for (int i = 0; i < count; i++) {
      if (value == arr[i]) {
        return i;
      } else {
        continue;
      }
    }
    return index;
  }

  public static void display(Integer[] array) {
    for (Integer integer : array) {
      System.out.print(integer + " ");
    }
  }

  public static void main(String[] args) {
    // taking dimension of array
    Scanner ask = new Scanner(System.in);
    System.out.print("Enter the Size of Array: ");
    int size = ask.nextInt();
    Integer[] array = new Integer[size];
    insert(array, 45);
    insert(array, 54);
    insert(array, 64);
    insert(array, 97);
    System.out.println(pop(array,1));
    display(array);
    }
}
