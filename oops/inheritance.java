package oops;

class base{
    base(){
        System.out.println("i am the constructor of the base class");
    }
    base(int x){
        System.out.println("i am overloaded contructor with x: "+ x);
    }
}
class derived extends base{
    derived(){
        System.out.println("i am the constructor of the derived class");
    }
    derived(int x, int y){
        super(x); // if we don't use it here then the constructor of base class with no arguments is invoked 
        System.out.println("i am overloaded contructor with y: "+ y);
        ;
    }
}
class ChildOfDerived extends derived{
    ChildOfDerived(){
        System.out.println("i am the constrctor of child of derived class");
    }
    ChildOfDerived(int x, int y, int z){
        super(x,y);
        System.out.println("i am overloaded contructor with z: "+ z);
    }
}
public class inheritance {
    public static void main(String[] args) {
        ChildOfDerived obj = new ChildOfDerived(); // on calling this this it will call the constructor of the base --> derived --> childofderived constructor
        System.out.println("\n\n\n --------\n\n");
        ChildOfDerived obj1 = new ChildOfDerived(2,3,4);
    }
}
