/* Make a program which displays a different message depending on the age given. Here are the possible responses:
age is less than 16, say "You can't drive."
age is less than 18, say "You can't vote."
age is less than 25, say "You can't rent a car."
age is 25 or over, say "You can do anything that's legal." */

import java.util.Scanner;
public class Age {
	public static void main(String[] args) {
		Scanner myObj = new Scanner(System.in);
		int age;
		System.out.println("Enter the age");
		age = myObj.nextInt();
		if(age < 16) {
			System.out.println("You can't drive");
		}
		
		if(age < 18) {
			System.out.println("You can't vote");
		}

		if(age < 25) {
			System.out.println("You can't rent a car");
		}	

		if(age >= 25) {
			System.out.println("You can do anything that's legal");
		}
	}
}
