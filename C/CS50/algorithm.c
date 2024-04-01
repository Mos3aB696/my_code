#include <stdio.h>
#include <string.h>

// int main(void)
// {
// 	int numbers[] = {1, 2, 4, 5, 6, 3, 0};
// 	int i = 0;
// 	int length = sizeof(numbers) / sizeof(numbers[0]);

// 	for (i; i < length; i++)
// 	{
// 		if (numbers[i] == 0)
// 		{
// 			printf("Found in %i Steps \n", i + 1);
// 			return (0);
// 		}
// 	}
// 	// printf("%lu\n", sizeof(numbers) / sizeof(numbers[0]));
// 	printf("Not Found \n");
// 	return (1);
// }

// int main(void)
// {
// 	char *names[] = {"Ahmed", "Ali", "Sama", "Ibrahim", "Rahma", "Mona"};
// 	int length = sizeof(names) / sizeof(names[0]);
// 	int i = 0;
// 	printf("%d\n", length);
// 	/*
// 	in C programming, both %i and %d are used as format specifiers in printf and scanf
// 			functions to deal with integers.

// 	The difference between them is very subtle and is related to how they interpret input data in scanf:

// 	%d interprets the number as a decimal number.
// 	%i decides the base (decimal, hexadecimal, or octal) depending on the format of the input data.
// 	However, in the context of printf, both %i and %d behave exactly
// 			the same way and there is no difference between them. They both print an integer in decimal format.
// 	*/
// 	for (i; i < length; i++)
// 	{
// 		if (strcmp(names[i], "Mona") == 0)
// 		{
// 			printf("Found In %i Steps \n", i + 1);
// 			return (0);
// 		}
// 	}

// 	printf("Not Found");
// 	return (1);
// }

// typedef struct
// {
// 	char *name;
// 	char *num;
// 	int age;
// } phone_nm;

// int main(void)
// {
// 	phone_nm people_numbers[5];
// 	int i, j = 0;

// 	// Way One (Not Best Way)
// 	// people_numbers[0].name = "Mosaab";
// 	// people_numbers[0].num = "01061972967";
// 	// people_numbers[0].age = 22;

// 	// Way Two (Best Way [Algorithm])
// 	char *names[] = {"Mos3aB", "Ahmed", "Esraa", "Mai", "Ali"};
// 	char *num[] = {"01061972067", "123", "342", "53333", "234535"};
// 	int age[] = {22, 34, 20, 21, 24};

// 	// Loop To Assign Values In people_numbers
// 	for (i; i < 5; i++)
// 	{
// 		people_numbers[i].name = names[i];
// 		people_numbers[i].num = num[i];
// 		people_numbers[i].age = age[i];
// 	}

// 	// Search Loop
// 	for (j; j < 5; j++)
// 	{
// 		if (strcmp(people_numbers[j].name, "Ali") == 0)
// 		{
// 			printf("%s Found, Age: %d, Number Is: %s\n", people_numbers[j].name,
// 						 people_numbers[j].age, people_numbers[j].num);
// 			return (0);
// 		}
// 	}
// 	printf("User Not Found\n");
// 	return (1);
// }

// int recursion(int n);
// int main(void)
// {
// 	printf("%d\n", recursion(10));
// }

// int recursion(int n)
// {
// 	if (n == 0)
// 		return (0);

// 	return n + recursion(n - 1);
// }

void draw_rectangle(int n);

int main(void)
{
	int number;
	printf("Enter Your Height: ");
	scanf("%d", &number);
	draw_rectangle(number);
}

void draw_rectangle(int n)
{
	int i;
	// int j;

	// for (i = 0; i < n; i++)
	// {
	// 	for (j = 0; j < i + 1; j++)
	// 		printf("#");
	// 	printf("\n");
	// }

	if (n == 0)
		return;

	draw_rectangle(n - 1);

	for (i = 0; i < n; i++)
	{
		printf("#");
	}
	printf("\n");
}
