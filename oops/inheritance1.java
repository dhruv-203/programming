package oops;



class employee{
    String emp_name;
    int emp_age;
    String emp_city;
    void setData(String name,int age,String city){
        this.emp_age=age;
        this.emp_city=city;
        this.emp_name=name;
    }
}
    class emp_derived {
        emp_derived(employee obj){
            System.out.println("Name: "+obj.emp_name);
            System.out.println("Age: "+obj.emp_age);
            System.out.println("City: "+obj.emp_city);
        }
    }
public class inheritance1 {
public static void main(String[] args) {
    employee obj = new employee();
    obj.setData("dhruv",19,"Surat");
    emp_derived obj1 = new emp_derived(obj);
}
}
