public class WaitNotifyTest {
    private static final long SLEEP_INTERVAL = 5000;
    private boolean running = true;
    private Thread thread;
    public void start() {
       print("Inside start() method");
       thread = new Thread(new Runnable() {
          @Override
          public void run() {
             print("Inside run() method");
             try {
                Thread.sleep(SLEEP_INTERVAL);
             } catch(InterruptedException e) {
                Thread.currentThread().interrupt();
             }
             synchronized(WaitNotifyTest.this) {
                running = false;
                WaitNotifyTest.this.notify();
             }
          }
       });
       thread.start();
    }
    public void join() throws InterruptedException {
       synchronized(this) {
          print("Inside join() method");
          while(running) {
            //  Thread.sleep(1000);
             print("Waiting for the peer thread to finish.");
             wait(); //waiting, not running
             //wait(3000); waits only for three seconds and the runs the loop again then again wait for 3 secs but before that the sleep is executed
          }
          print("Peer thread finished.");
       }
    }
    private void print(String s) {
       System.out.println(s);
    }
    public static void main(String[] args) throws InterruptedException {
       WaitNotifyTest test = new WaitNotifyTest();
       test.start();
       test.join();
    }
 }