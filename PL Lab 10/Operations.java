//Write a java program for finding the sum, difference, product, quotient, minimum and maximum of any two integers.

import java.util.Scanner;
public class Operations {
	public static void main(String[] args) {
		Scanner myObj = new Scanner(System.in);
		  int a, b, sum, diff, prod;
		  float quot;
		  System.out.println("Enter first number");
			a = myObj.nextInt();
  			System.out.println("Enter second number");
			b = myObj.nextInt();
  			sum = a + b;
  			diff = a - b;
  			prod = a * b;
  			quot = (float)a / (float)b;
  			System.out.println("Sum of " + a + " and " + b + " is " + sum);
  			System.out.println("Difference of " + a + " and " + b + " is " + diff);
  			System.out.println("Product of " + a + " and " + b + " is " + prod);
  			System.out.println("Quotient of " + a + " and " + b + " is " + quot);
  			System.out.println("Minimum of " + a + " and " + b + " is " + Math.min(a, b));
  			System.out.println("Maximum of " + a + " and " + b + " is " + Math.max(a, b));
  	}
}
