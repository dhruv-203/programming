package oops;
class phone{
    void call(){
        System.out.println("Calling .........");
    }
    void snakeLadder(){
        System.out.println("Starting the Game......");
    }
}
class smartphone extends phone{
    @Override
    void call(){
        System.out.println("Ringing........");
    }
    void pubg(){
        System.out.println("Searching for Players.......");
    }
}

public class DynamicMethodDispatch {
public static void main(String[] args) {
    // we know how to define the objects of a class
    /*
     *  classname objname = new classname();
     * but following is also possible 
     * superclass obj = new subclass();
     * this means obj is of type super but as objects are defined on runtime so this will get overridden changes of subclass  
     */
    phone nokia3310 = new smartphone();
    nokia3310.call(); // this will invoke the overridden method of smartphone class as obj is defined for smartphone on runtime
    nokia3310.snakeLadder(); // this is allowed as the obj is of phone type
    // nokia3310.pubg(); // this is not allowed even the obj is defined for subclass but it has type parent class due to which it can't access the methods which are not defined in parent class
    // subclass obj = new superclass(); this is not valid
    // smartphone samsung = new phone(); as phone is not subclass that is it doesn't contains the properties of smartphone 
}
}
