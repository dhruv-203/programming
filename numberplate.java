import java.util.Random;
public class numberplate {
        //7. Assume a Vehicle plate number consist of three Uppercase letters followed by four digits writes program to generate a random number
        public static void main(String[] args) {
                int[] number =new int[6];
                int min = 65;
                int max = 91;
                for(int i =0;i<2;i++){
                        number[i]=(int)Math.floor((Math.random()*(max-min+1)+min));
                }
                max=9;
                min=0;
                for(int i=2;i<6;i++){
                        number[i]=(int)Math.floor((Math.random()*(max-min+1)+min));
                }
                System.out.printf("GJ-05-%c%c-%d%d%d%d",number[0],number[1],number[2],number[3],number[4],number[5]);
        }
        
}
