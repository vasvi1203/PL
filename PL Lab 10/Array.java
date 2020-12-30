//Write a program that creates and initializes a four-element int array. Calculate and display the average of its values.

import java.util.Scanner;
public class Array {
	public static void main(String[] args) {
		Scanner myObj = new Scanner(System.in);
		int number[], i, sum = 0;
		float avg;
		number = new int[4];
		for(i = 0; i < 4; i++) {
			number[i] = myObj.nextInt();
			sum += number[i];
		} 	
		avg = (float)sum / (float)4;
		System.out.println("Average of the values of the array is : " + avg);
	}
}
