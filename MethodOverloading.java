public class MethodOverloading {
    void foo(){
        System.out.println("hello world");
    }
    void foo(String name){ // name is parameter
        System.out.println("hello "+name); // method overloading can be achieved by giving parameters
    }
    void foo(int name){
        System.out.println("number: "+ name);
    }
    // int foo(int a){
    //     System.out.println("this is not possible by changing the return type we can't achieve method overloading");
    // }
    int foo(int a, int b){
        return a+b;  // this is valid so the java differ methods on the basis of parameters in overloading
    }    
    public static void main(String[] args) {
        MethodOverloading obj = new MethodOverloading();
        obj.foo();
        obj.foo("Dhruv"); // dhruv is argument
        System.out.println("the sum is "+obj.foo(400, 500));
        obj.foo(45);
        // parameters are the variable which takes the values
        // arguments are the actual values that are provided 
    }
}
