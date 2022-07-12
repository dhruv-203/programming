public class scope{
    static String nam="Patel";
    public String method(){
        String nam="dhruv";
        return nam;
    }
    public static void main(String[] args) {
        scope obj = new scope();
        String nam="i am instance variable";
        System.out.println(scope.nam);
        System.out.println(obj.method());
        System.out.println(nam);

    }
}