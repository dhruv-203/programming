package oops;
class A{
    int a=45;
    void method(){
        System.out.println("hello world");
    }
    void method1(){
        System.out.println("a+b="+45);
    }

}
class B extends A{
    int a = 87; // this is attribute overriding 
    // @Override //this will give error 
    void method(int A){
        System.out.println("a="+a);
        System.out.println(A+" value of A");
    }  // this is not overriding as parent class method doesn't have any parameter
    @Override  // this makes sure that override is happening any changes due to which overriding disturbs it prevents from happening that and displays an error 
    //The method method1() of type B must override or implement a supertype method eeror msg 
    void method1(){
        System.out.println("a+b="+34);
    }  // this is overriding
}
public class MethodOverriding {
    public static void main(String[] args) {
     A obja= new A();
     B objb = new B();
     objb.method();
     objb.method(78);
     obja.method1();
     objb.method1();

     System.out.println("\n\n a value in A class"+obja.a);
     System.out.println("\n\n a value in B class"+objb.a);
    }
}
