package oops;
import java.util.Random;
import java.util.Scanner;
class game{
    int CorrectNumber;
    static int noOfGuess=0;
    game(int num){
        this.CorrectNumber=num;
        System.out.println("In this Game You are supposed to Guess a Number and You will win once you have guessed the correct number and your score will be your Number of Guesses lower the Guesses more The pro you are\n\nLets Begin......\n\n");
        isCorrectNumber();
    }
    void isCorrectNumber(){
        int guessNumber= takeUserInput();
        setNoOfGuess(noOfGuess);
        if(CorrectNumber==guessNumber){
            System.out.println("Wooohoo!!! You Have Won.....");
            System.out.println("You have Completed this game in "+getNoOfGuess());
        }
        else if(guessNumber<CorrectNumber){
            System.out.println("Opps thats A Wrong Guess Try Again...");
            System.out.println("Try aiming Higher this time..\n\n");
            isCorrectNumber();
        }
        else if(guessNumber>CorrectNumber){
            System.out.println("Opps thats A Wrong Guess Try Again...");
            System.out.println("Try aiming lower this time..\n\n");
            isCorrectNumber();
        }

    }
    public void setNoOfGuess(int Guess) {
        noOfGuess = ++Guess;
    }
    public int getNoOfGuess() {
        return noOfGuess;
    }
    int takeUserInput(){
        Scanner ask = new Scanner(System.in);
        System.out.print("Guess A Number: ");
        int Guess = ask.nextInt();
        return Guess;  
    }

}

public class NumberGuess {
    /*
    * Create a class game which allows user to play "Guess the Number" game once game should have the following methods:
    * 1. Constructors to generate the random number
    * 2. takeUserInput() method to take the user input
     * 3. isCorrectNumber() to detect whether the number is true or not 
     * 4. getter and setter for noOfGuesses 
     */
    public static void main(String[] args) {
        Random genrate = new Random();
        int CorrectNumber= genrate.nextInt(200);
        game play = new game(CorrectNumber);
        // System.out.println(CorrectNumber);
    }
}
