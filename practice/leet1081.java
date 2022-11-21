//https://leetcode.com/problems/smallest-subsequence-of-distinct-characters/
// half solved the lexicological ordering is remaining rest is done 

import java.util.ArrayList;
import java.util.Arrays;
public class leet1081{
    public static void main(String[] args){
        leet1081 obj = new leet1081();
        System.out.println(obj.smallestSubsequence("cbacdcbc"));;
    }
    public String smallestSubsequence(String s){
        Integer[] arr = new Integer[s.length()];
        // arr[0]=Integer.valueOf(s.charAt(0));
        // System.out.println(arr[0]);
        // return "d";
        for(int i=0;i<s.length();i++){
            arr[i]=Integer.valueOf(s.charAt(i));
        }
        Arrays.sort(arr);
        // System.out.println(arr[0]);
        ArrayList<Integer> finals = new ArrayList<Integer>();
        for(int i =0;i<arr.length;i++){
            if(i==0){
                finals.add(arr[i]);
                continue;
            }
            if(!finals.contains(arr[i])) {finals.add(arr[i]);}
            else{continue;}
        }
        String[] arr1 = new String[finals.size()];
        for (int i = 0; i < finals.size(); i++){
            arr1[i]=Character.toString(Integer.valueOf(finals.get(i)));
        }
       for (int i = 0; i < arr1.length-1; i++) {
        for (int j = 0; j < arr1.length; j++) {
            if(arr1[i].compareTo(arr1[j])>0){
                String tmp = arr1[i];
                arr1[i]=arr1[j];
                arr1[j]=tmp;
            }
        }
       } 
       String res =  "";
       for (String string : arr1) {
        res+=string;
       }
       
    return res;
    }}
