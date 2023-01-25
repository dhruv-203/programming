public class StackFunction {

  // push pop peep change display
  /*
   * algo for push(S,T,N,Y)
   * [1. Overflow?]
   * if T>=N:
   * then return ('Stack is Full")
   * [2. Increment T]
   * T <- T+1
   * [3. push Value in Stack]
   * S[T] = Y
   *
   * Algo for pop(S,T)
   * [1. underflow?]
   * if T==0:
   * then return "Empty Stack unable to perform pop"
   * [2. storing top value]:
   * temp <- S[T]
   * [3. removing Top Value]
   * S[T] <- null
   * [4. return ]
   * Algo for peep
   * */

  public static void main(String[] args) {
    functions stack = new functions(10);
    stack.push(1);
    stack.push(2);
    stack.push(3);
    stack.push(4);
    stack.push(5);
    System.out.println(stack.pop());
    stack.display();
    System.out.println(stack.peep(2));
    stack.Change(3, 12);
    stack.display();
  }
}

class functions {

  int Top = -1;
  Integer size = null;

  public functions(int size) {
    this.size = Integer.valueOf(size);
  }

  Integer[] S = new Integer[this.size];

  Boolean push(Integer value) {
    if (this.Top >= S.length) {
      return false;
    }
    this.Top++;
    S[Top] = value;
    return true;
  }

  Integer pop() {
    if (this.Top == 0) {
      return null;
    }
    Integer temp = this.S[this.Top];
    this.S[this.Top] = null;
    return temp;
  }

  Integer peep(int index) {
    return this.S[this.Top];
  }

  Boolean Change(int index, Integer value) {
    if (this.Top == 0) {
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
