public class scope{
    static String nam="Patel";
    public String method(){
        String nam="dhruv";
        return nam;
    }
    String name="i am instance variable";
    public static void main(String[] args) {
        scope obj = new scope();
        System.out.println(scope.nam);
        System.out.println(obj.method());
        System.out.println(obj.name);

    }
}