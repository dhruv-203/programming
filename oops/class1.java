package oops;
class Employee{
    int Salary;
    int getSalary() {
        return Salary;
    }
    String name;
    String getName() {
        return name;        // this is getters
    }
    void setName(String name) {
        this.name=name;        // this is setters
    }

}
public class class1 {
    public static void main(String[] args) {
        Employee dhruv = new Employee();
        Employee bk = new Employee();
        dhruv.Salary=45000;
        bk.Salary=54000;
        dhruv.setName("Dhruv Patel");
        bk.setName("Balkrishna Mehta");
        System.out.println(dhruv.getSalary());
        System.out.println(dhruv.getName());
        System.out.println(bk.getSalary());
        System.out.println(bk.getName());


    }
}
