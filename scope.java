public class scope{
    static String nam="Patel"; // static variable
    public String method(){
        String nam="dhruv";// local variable
        return nam;
    }
    String name="i am instance variable"; // instance variable
    public static void main(String[] args) {
        scope obj = new scope();
        System.out.println(scope.nam);
        System.out.println(obj.method());
        System.out.println(obj.name);

    }
}
// Following are the types of variables

// A variable declared inside the body of the method is called local variable 
// a local variable cannot be defined with static keyword 

// A variable declared inside the class but outside the body of the method is called instance variable 
// it is not declared with static keyword 
// it is called instance variable because it is instance specific and is not shared among instances 

// A variable declared with static keyword is called a static variable. ot cannot be local it can be shared among all the instances of the class .
// memory allocation for static variables happens only once when the class is loaded