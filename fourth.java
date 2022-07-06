// Arrays and array methods
import java.util.Arrays;
public class fourth {
    public static void main(String[] args){
        int[] marks = new int[6]; // defined a integer type array of 5 members
        marks[0]=45;
        marks[1]=4;
        marks[2]=5;
        marks[3]=450;
        marks[4]=475;
        System.out.println(marks[0]);
        System.out.println(marks[1]);
        System.out.println(marks[2]);
        System.out.println(marks[3]);
        System.out.println(marks[4]);
        System.out.println(marks[5]); // if we dont give any value to a integer-type-array member it takes by-default 0 value
        // not given value:
        boolean[] po = new boolean[5];
        String[] op = new String[5];
        System.out.println(po[1]); // false if not defined 
        System.out.println(op[0]); // returns null

        // getting length of an array 
        System.out.println(marks.length); // in array length is property of array not a function thats why we didnt put a parenthesis here
        // sorting an Array by importing  package Array and using sort method of that package
        System.out.println(marks[0]);
        Arrays.sort(marks);
        System.out.println(marks[0]); // returns 0 because of the one undefined last index

        // statically defining array
        String[] names={"dhruv","ayush","bk"};
        System.out.println(names[1]);
    }
}
