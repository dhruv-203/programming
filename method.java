public class method {
    void change(int a){
        int x=45;
        a=x;
    }
    void change1(int[] arr){
        int x=87;
        arr[0]=x;
    }
    public static void main(String[] args) {
        // when we pass the primitive arguments in function function like int,float etc then its copy is passed to method 
        // so any change in copy won't reflect in actual variable 
        // but we pass a object like a array then its reference i.e address is passed and hence any change in that will automatically change the original value 
        
        int a=5 ;
        int[] arr={4,5,7,6,5};
        method obj=new method();
        obj.change(a);
        obj.change1(arr);
        System.out.println(a); // value of 'a' remains constant 
        System.out.println(arr[0]); // value of arr[0] changes 

    }
}
