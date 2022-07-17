package oops;
import java.util.Scanner;

import java.util.Random;
class letsplay{
    int computerChoice;
    letsplay(){
        System.out.println("This is a Game of ROCK PAPER SCISSORS it has 3 rounds the more wins at the end wins the game\n\nLets Begin....\n\n");
        try {
            Thread.sleep(4*1000);
        } catch (InterruptedException e) {
            e.printStackTrace();
        }
    }
    void setComputerChoice() {
        Random generate = new Random();
        int choice = generate.nextInt(4);
        if (choice==0||choice>3) {
            setComputerChoice();
        }
        else{
            this.computerChoice=choice;
        }
    }
    boolean judge(){
        int choice = takeUserInput();
        if(computerChoice==choice){
            System.out.println("\n\nThat's a Tie....\n\n");
            try {
                Thread.sleep(500);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
            return judge();

        }
        else if(choice==1){
          if(computerChoice==2){
              System.out.println("Its PAPER hehe....\nAH...SHIT... We Lose....");
              return false;
          }  
          else{
              System.out.println("Its Scissors YEAH!!\nHurray We have WON!!!!");
              return true;
          }

        }
        else if(choice==2){
            if(computerChoice==3){
                System.out.println("Its SCISSORS hehe....\nAH...SHIT... We Lose....");
                return false;
            }
            else{
                System.out.println("Its ROCK YEAH!!\nHurray We have WON!!!!");
                return true;
            }
        }
        else{
            if(computerChoice==1){
                System.out.println("Its ROCK hehe....\nAH...SHIT... We Lose....");
                return false;
            }
            else{
                System.out.println("Its PAPER YEAH!!\nHurray We have WON!!!!");
                return true;
            }
        }

    }
    int takeUserInput(){
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter 1 For Rock\nEnter 2 for Paper\nEnter 3 for Scissors\nEnter Your Choice: ");
        int userChoice= ask.nextInt();
        if(userChoice<1||userChoice>3){
            System.out.println("\n\nPlease Enter a Valid Number...");
            return takeUserInput();
        }
        else{
            return userChoice;
        }
    }
}
public class RockPaperScissors {
    public static void main(String[] args) {
       letsplay game = new letsplay();
       int round = 1;
       int teamComputer=0;
       int teamUSER=0;
       boolean result ;
       while(round<4){
           round++;
           game.setComputerChoice();
           boolean decider=game.judge();
           if(decider){
               teamUSER++;
           } 
           else{
               teamComputer++;
           }
           try {
            Thread.sleep(3*1000);
        } catch (InterruptedException e) {
            e.printStackTrace();
        }
       }
       if(teamComputer<teamUSER){
           System.out.println("Hurray you Have Won the Whole Round....... bravo....");
       }
       else{
           System.out.println("You Lose the Round Better Luck Next Time!!!!!");
       }
       
    }
}
