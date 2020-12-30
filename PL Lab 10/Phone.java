/*Write a Java program that prompts for and accepts a telephone number of the form xx-xxx-xxxx where each x is a digit (e.g. 02-123-9999), and prints it
out in the following form: x-xxxx-xxxx (e.g. 0-2123-9999).*/

import java.util.Scanner;
public class Phone {
	public static void main(String[] args) {
		Scanner myObj = new Scanner(System.in);
		String number_in;
		char[] number_out; 
		char swap;
		int i, len;
		
		System.out.println("Enter the telephone number");
		
		number_in = myObj.nextLine();
	 	number_out = number_in.toCharArray();
	 	len = number_out.length;
		swap = number_out[1];
		number_out[1] = number_out[2];
		number_out[2] = swap;
		
		System.out.println("The telephone number is : ");
		for(i = 0; i < len; i++) {
			System.out.print(number_out[i]);
		}	
		System.out.println("");
	}
}
