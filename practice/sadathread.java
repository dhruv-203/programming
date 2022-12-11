class sada extends Thread{
    public void run(){
        for(int i =0; i<5;i++){
            System.out.println("hi"+ this.getName());
            try{
                    Thread.sleep(1000);
            }
            catch(InterruptedException e){
                System.out.println(e.getClass());
            }
        }
    }
}
public class sadathread{
  
    public static void main(String[] args) {
        sada obj = new sada();
        Thread obj1 = new Thread(new Runnable(){
            @Override
            public void run(){
                for(int i =0;i<5;i++){
                    System.out.println("hi");
                try{
                    Thread.sleep(2000);
                }
                catch(InterruptedException e){
                    System.out.println(e.getMessage());
                }
                }
            }
        });
        
        obj.start();
        obj1.start();
    }
}