class Single extends Thread{

    public void run(){
        
        for(int i =0;i<25;i++){
            try{
                this.sleep(1000);
            }
            catch(InterruptedException e){}
          System.out.println(i);
        }
    }
}    
// two methods to create a thread in java 
// 1. by extending thread class and overriding the run method and calling start method to execute the thread
// 2. by implementing Runnable interface and overriding run method and then creating a runnable obj and passing it into Thread class constructor
class aSingle implements Runnable{
    public void run(){
        for(int i =0;i<25;i++){
            
            System.out.println("Thread"+i);
            try{
                Thread.sleep(1000);
            }
            catch(InterruptedException e){}
        }
    }
}
public class Threding{
    public static void main(String[] args){
        Single s = new Single();
        Single p = new Single();
        aSingle t = new aSingle();
        Thread ta = new Thread(t);
        s.start();
        p.start();
        // try{
        //     s.join(); // the other threads have to wait for this thread to complete its executions.
        // }
        // catch(InterruptedException e){}
        ta.start();
    }
}