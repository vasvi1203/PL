//Write a Java program to calculate sum of two numbers.

import java.util.Scanner;
public class Sum {
  public static void main(String[] args) {
  	Scanner myObj = new Scanner(System.in);
  	float a, b, sum;
  	System.out.println("Enter first number");
  	a = myObj.nextFloat();
  	System.out.println("Enter second number");
	b = myObj.nextFloat();
  	sum = a + b;
    System.out.println("Sum of " + a + " and " + b + " is " + sum);
  }
}

