public class Practical3 {
  public static void main(String[] args) {
    functions stack = new functions(10);
    stack.push(1);
    stack.push(2);
    stack.push(3);
    stack.push(4);
    stack.push(5);
    System.out.println(stack.pop());
    stack.display();
    System.out.println("Value of 2 element from top: "+stack.peep(2));
    stack.Change(3, 12);
    stack.display();
  }
}
class functions {
  int Top = -1;
  Integer size = null;
  Integer[] S;

  public functions(int size) {
    this.size = Integer.valueOf(size);
    this.S = new Integer[this.size];
  }

  Boolean push(Integer value) {
    if (this.Top >= S.length) {
      return false;
    }
    this.Top++;
    S[Top] = value;
    return true;
  }

  Integer pop() {
    if (this.Top == -1) {
      return null;
    }
    Integer temp = this.S[this.Top];
    this.S[this.Top] = null;
    this.Top--;
    return temp;
  }

  Integer peep(int index) {
    if((index-1)<=(this.Top)&&this.Top-(index-1)>-1){
      return this.S[this.Top-(index-1)];
    }
    else{
      return null;
    }
  }

  Boolean Change(int index, Integer value) {
    if (this.Top == -1) {
      return false;
    }
    if (this.Top < index) {
      return false;
    }
    this.S[index] = value;
    return true;
  }

  void display() {
    System.out.print("[");
    for (Integer i : this.S) {
      System.out.print(i + " ");
    }
    System.out.println("]");
  }
}
