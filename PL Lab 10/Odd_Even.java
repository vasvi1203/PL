//Write a java program to prints the count of odd and even no’s entered.

import java.util.Scanner;
public class Odd_Even {
	public static void main(String[] args) {
		Scanner myObj = new Scanner(System.in);
		int number;
		int n, i, odd = 0, even = 0;
		System.out.println("Enter the number of numbers you want to enter");
		n = myObj.nextInt();
		for(i = 0; i < n; i++) {
			number = myObj.nextInt();
			if(number % 2 == 0) {
				even++;
			}
			else {
				odd++;
			}
		} 	
		
		System.out.println("Number of odd numbers entered are : " + odd);
		System.out.println("Number of even numbers entered are : " + even);	
	}
}
