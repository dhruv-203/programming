import java.util.Scanner;
public class Geometry {
    float area(float side){
        return 6*side*side; //cube
    }
    float area(float l,float b,float h){
        return 2*(l*b+b*h+l*h); //cuboid
    }
    float area(float r, float h){
        return  (float) (2.0*3.14*r*(r+h));  //cylinder
    }
    float volume(float side){
        return side*side*side;  //cube
    }
    float volume(float l,float b,float h){
        return l*b*h;   // cuboid
    }
    float volume(float r,float h){
        return (float)(3.14*r*r*h);
    }
    public static void main(String[] args) {
        Scanner ask = new Scanner(System.in);
        System.out.println("Enter Your Choice for shape: ");
        int choice = ask.nextInt();
        System.out.println("Enter the area or volume to get desired calculation: ");
    }
}
