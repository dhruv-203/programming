package oops;
import java.util.Scanner;
class square{
    float length;
    void getSide(float l){
        this.length=l;
    }
    float perimeter(){
        return 4*length; 
    }
    float area(){
        return length*length;
    }
}
class rectangle{
    float length;
    float breadth;
    void getSide(float l,float b){
        this.length=l;
        this.breadth=b;
    }
    float perimeter(){
        return ((2*length)+(2*breadth)); 
    }
    float area(){
        return length*breadth;
    }
}

class circle{
    float radius;
    final float pi=3.14f;
    void getRadius(float radius) {
        this.radius=radius;
    }
    float circumference(){
        return pi*2*radius;
    } 
    float area(){
        return pi*radius*radius;
    }
}
public class shape {
    public static void main(String[] args) {
    
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter the Length: ");
        float length = ask.nextFloat();
        square one = new square();
        one.getSide(length);
        System.out.printf("The Perimeter of Square: %.2f\n",one.perimeter());
        System.out.printf("The Area of Square: %.2f\n",one.area());
        
        rectangle two = new rectangle();
        System.out.print("Enter the breadth: ");
        float breadth = ask.nextFloat();

        two.getSide(length, breadth);
        System.out.printf("The Perimeter of Rectangle: %.2f\n",two.perimeter());
        System.out.printf("The Area of Square: %.2f\n",two.area());
        
        circle three = new circle();
        System.out.print("Enter the Radius: ");
        float radius = ask.nextFloat();
        three.getRadius(radius);
        System.out.printf("The Circumference of Circle: %.2f\n",three.circumference());
        System.out.printf("The Area of Square: %.2f\n",three.area());
        
    }

}
