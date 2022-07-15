// string methods 
public class string_method {
    public static void main(String[] args){
        // concatenate
        String One= "Hello";
        String Two = "World";
        String Three= One+" and "+ Two;
        System.out.println(Three);

        //charAt() method returns the char at given index we cant use One[2]
        // The type of the expression must be an array type but it resolved to String error 
        System.out.println(One.charAt(1));
        System.out.println(Two.charAt(4));
        // System.out.println(One[2]);

        // length() method returns length returns the length of the string
        System.out.println(Three.length()); 

        // replace("old text","new text") method 
        String text="Tody is nice Weather and I am Dhruv Patel";
        String Text=text.replace("Dhruv","vurhd");
        System.out.println(Text);

        //substring() used for string slicing
        String test="0123456789";        
        System.out.println(test.substring(5,9)); // prints 5-8 excludes 9
        
        // we can re-write the string but we can't update a character on particular index of string 

        // toUpperCase() and toLowerCase()  (names can be remembered by using camel case like myNameIsDhruvPatel)
        System.out.println(One.toUpperCase());
        System.out.println(One.toLowerCase());

        // trim() method removes leading and trailing spaces in string
        Text="    my name is dhruv    ";
        System.out.println(Text);
        System.out.println(Text.trim());

        
    }
}
