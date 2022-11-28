class MyException extends Exception{
    public MyException(String str){
    super(str);    
    }
}
public class customException{
    public static void main(String[] args){
        try{
            throw new MyException("Dhruv Patel");
        }
        catch(MyException e){
            System.out.println("Caught");
            System.out.println(e.getMessage());
        }
    }
}