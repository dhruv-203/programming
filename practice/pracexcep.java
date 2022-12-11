import java.util.Scanner;
public class pracexcep{
    private static void oprint(String s){
        try{
                for(int i=0;i<12;i++){
                System.out.println(s.charAt(i));
                }
            }
            catch(NullPointerException e){
                System.out.println(e.getClass());
            }
            catch( StringIndexOutOfBoundsException e){
                System.out.println(e.getClass());
            }
            System.out.println("End0");
        }
    
    public static void main(String[] args){
        Scanner ask = new Scanner(System.in);
        String var = ask.nextLine();
        pracexcep.oprint(null);
        pracexcep.oprint(var);

        }
}