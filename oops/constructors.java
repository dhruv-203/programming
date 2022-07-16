package oops;
class spare{
    int num1,num2,num3;
    spare(int ...arh){
        this.num1=arh[0];
        this.num2=arh[1];
        this.num3=arh[2];
        System.out.println("i was czlled");
        }
    spare(int a,int b, int c){  // this is called constructor and it doesn't have any return type also we can perform method overloading 
        this.num1=a;
        this.num2=b;
        this.num3=c;
}
    spare(int a,int b){
        this.num1=a;
        this.num2=b;
    }
    spare(int a){
        this.num2=a;
    }
    
    void add(){
        System.out.println(this.num1+this.num2+this.num3);
    }
}
public class constructors {
    public static void main(String[] args) {
        int a=5,b=7,c=87,d=8;
    spare obj = new spare(a, b, c,d);
    spare obj3 = new spare(a, b, c);
    spare obj1 = new spare(a, b);
    spare obj2 = new spare(a);
    obj.add();// prints a+b+c+d only calls this when the arguments exceed by 3 as three wala hai toh three wala pakade gaa
    obj3.add();// prints a+b+c
    obj1.add(); // prints a+b
    obj2.add(); //prints a
    }
}
