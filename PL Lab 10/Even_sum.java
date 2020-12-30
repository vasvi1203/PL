//Write Java program to compute the sum of the 2+4+6+ ---------+10.

public class Even_sum {
	public static void main(String[] args) {
		int i, sum = 0;
		for(i = 2; i < 12; i += 2) {
			sum += i;
		} 	
		System.out.println("Sum of 2 + 4 + 6 + .... + 10 is : " + sum);
	}
}
