package oops;
// super is reference variable used to refer immediate parent class object
// can be used to refer immediate parent class instance variable 
// cab be used to refer methods of parent class 
// can be used to invoke parent class custom constructor (as by-default the constructor with no arguments is called)
//Implicit super constructor OneClass() is undefined for default constructor. Must define an explicit constructor this error is shown
class OneClass{
    void print(){
        System.out.println("hello i am a method: of OneClass");
    }
    OneClass(int a){
        System.out.println("i am a custom constructor with one parameter");
    }
}
class TwoClass extends OneClass{
TwoClass(){
    super(45); // compulsory it explicit invoke of parent constructor as there is no constructor defined who has no parameters
    System.out.println("i am child class constructor ");
}
void Show(){
    System.out.println("i am method of class two");
}
}
class ThreeClass extends TwoClass{
// idhar muje explicitly constructor main super se parent k constructor ko invoke nai kr na pada becoz TwoClass mai already bina parameters wala constructor hai so it good
void see(){
    super.Show();
    super.print();
}
}
public class super_class {
    public static void main(String[] args) {
     ThreeClass obj = new ThreeClass();
     obj.see();   
    }
}
