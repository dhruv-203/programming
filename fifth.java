// casting and constants
public class fifth {
    public static void main(String[] args){
        int price=100;
        double tax=18.28D;
        double finalprice=price+tax; // here the addition of the double+int is getting stored in double variable due to which its legal as double is of 8 byte so added with a integer of 4 byte will return a 8 byte number so as it is getting stored in 8byte variable so no prob but
        System.out.println(finalprice);
        // if we try
        // int finalprice=price+tax is not possible because here the container variable is of 4 byte and the content is of 8 byte
        // to solve this we can do casting
        int fp=price + (int)tax;
        System.out.println(fp);

        // defining constants in java by using final keyword
        final float PI=3.14F;
        // PI=54; // this will return error

    }
}
