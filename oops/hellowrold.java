package oops;
// creating a custom class 
// Note : There can be only one public class in one program
class Student{
    String Name;
    long Enroll_no;
    String Branch;
    int Curr_Year;
    void display(){
        System.out.println(Name);
        System.out.println(Enroll_no);
        System.out.println(Branch);
        System.out.println(Curr_Year);
    }
}
public class hellowrold {
    public static void main(String[] args) {

    
    Student Dhruv = new Student();
    Dhruv.Name="Dhruv Patel";
    Dhruv.Enroll_no=202103103510445L;
    Dhruv.Branch="Btech CSE";
    Dhruv.Curr_Year=2;
    Dhruv.display();

    Student Bk = new Student();
    Bk.Name="Balkrishna Mehta";
    Bk.Enroll_no=202103103510434L;
    Bk.Branch="Btech CSE";
    Bk.Curr_Year=2;
    Bk.display();
    }
}
