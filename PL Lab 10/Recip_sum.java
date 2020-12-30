//Write a java program that computes the sum of the reciprocals : 1/1 + 1/2 + 1/3 + ... + 1/10

public class Recip_sum {
	public static void main(String[] args) {
		int i;
		float sum = 0;
		for(i = 1; i < 11; i++) {
			sum += (float)1 / (float)i;
		} 	
		System.out.println("Sum of 1/1 + 1/2 + 1/3 + ... + 1/10 is : " + sum);
	}
}
