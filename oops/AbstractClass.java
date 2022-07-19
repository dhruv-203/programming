package oops;
// abstract means anything which is not in reality and its existence is only in mind
//abstract class contains abstract methods any normal class if it even have one abstract method then it has to be declared as a abstract class 
// and abstract classes can't be instantiated it only be inherited into other classes and there's one more catch 
// if a abstract class contains several abstract methods then in the subclass of a abstract class each and every method has to be provided with the implementation details or it will throw error 
// class parent{ // this will throw error becoz this parent class has one abstract method so this class has to be an abstract class
//     abstract void greet();
//     void info(){System.out.println("Hello World!!!")}    
// } 



abstract class parent{
    abstract void greet();
    abstract void add(int a , int b); 
    void divide(float a, float b){
        System.out.println("a/b="+(a/b));
    }
}  
// class child extends parent{
//     void dep(){
//         System.out.println("i will show error as there are two compulsory methods greet and add which needed to be implemented or it will show error");
//     }
// }
class child extends parent{
    
    void greet(){
    System.out.println("hello dhruv your system is getting ready.......");
    }
    void add(int a, int b){
        System.out.println("A+B="+(a+b));
    }
    void mul(){
        System.out.println(7*8);
    }
    // note only abstract method are need to be implemented compulsory in subclass class
}
public class AbstractClass {
    public static void main(String[] args) {
        // parent obj = new parent(); // this is not possible
        child obj = new child();
        obj.greet();
        parent obj1 = new child(); // this is allowed as this is instantiation of child class
        obj1.greet();
        // obj1.mul(); // this is not allowed
        obj.mul(); // this is allowed
        obj.add(4,5); 
        obj.divide(54.0f,65.0f); // this is not abstract method  
    }
}
