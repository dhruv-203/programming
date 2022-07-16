public class VarArgs {
    // just as in python we have *var_name where using * makes it arbitrary argument and it takes values and pack it in list 
    // ...var_name behaves same and packs all the arguments into a array 
    int sum(int ...arh){
        int res=0;
        for(int a:arh){
            res+=a;
        }
        return res; 
    }
    // syntax:
    /*
     * return_type function_name(data_type ...array_name){
     * //body
     * }
     */
    public static void main(String[] args) {
        VarArgs obj = new VarArgs();
        System.out.println("the sum of 0,1,2: "+obj.sum(0,1,2));
        System.out.println("the sum of 0,5,1,2: "+obj.sum(0,5,1,2));
        System.out.println("the sum of 0,5,8,9,1,2: "+obj.sum(0,5,8,9,1,2));
        

        
    }
}
