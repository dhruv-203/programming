import java.util.Random;
import java.util.ArrayList;
public class progr7 {
        //7. Assume a Vehicle plate number consist of three Uppercase letters followed by four digits writes program to generate a random number
        public static void main(String[] args) {
                String[] aplha = new String[3];
                Random generate = new Random();
                int[] number =new int[7];
                int min = 65;
                int max = 91;
                for(int i =0;i<3;i++){
                        number[i]=(int)Math.floor((Math.random()*(max-min+1)+min));
                }
                max=9;
                min=0;
                for(int i=3;i<7;i++){
                        number[i]=(int)Math.floor((Math.random()*(max-min+1)+min));
                }
                System.out.printf("%c%c%c%d%d%d%d",number[0],number[1],number[2],number[3],number[4],number[5],number[6]);
        }
        
}
