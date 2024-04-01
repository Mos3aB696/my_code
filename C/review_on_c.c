#include <stdio.h>
#include <stdlib.h>
#include <math.h>

// -----------------[Data type and size]--------------------

/**
 * Data Type
	Size (bytes)  Range  Format Specifier

short int
	2   -32,768 to 32,767   %hd

unsigned short int
	2  0 to 65,535 %hu

unsigned int
	4     0   to 4,294,967,295       %u

int
	4 -2,147,483,648 to 2,147,483,647 %d

long int
	4   -2,147,483,648 to 2,147,483,647   %ld

unsigned long int
	4   0 to 4,294,967,295  %lu

long long int
	8  -(2^63) to (2^63)-1  %lld

unsigned long long int
	8         0 to 18,446,744,073,709,551,615  %llu

signed char
	1  -128 to 127  %c

unsigned char
	1   0 to 255   %c

float
	4  1.2E-38 to 3.4E+38  	%f

double
	8     1.7E-308 to 1.7E+308	      %lf

long double
	16  3.4E-4932 to 1.1E+4932    	%Lf



	Some Notes:

	All C variables must be identified with unique names.

	These unique names are called identifiers.

	Identifiers can be short names (like x and y) or more descriptive names (age, sum, totalVolume).

		Note: It is recommended to use descriptive names in order to create understandable and maintainable code:


	Const =======
*/

// -----------------[conditions]--------------------
/**
 * Use if to specify a block of code to be executed, if a specified condition is true
 * Use else to specify a block of code to be executed, if the same condition is false
 * Use else if to specify a new condition to test, if the first condition is false
 * Use switch to specify many alternative blocks of code to be executed
 *
 * Short hand (tenary operator)
 *
 *  (condition) ? true : false;
 *  (condition) ? expressionTrue : condition2 ? true : condition3 ? true : else;
 */

// int main(void)
//{
//	int time = 15;

// time < 10 ? printf("Good morning.") : printf("good day");

// if (time < 10)
//	printf("Good morning.");
// else if (time < 20)
//	printf("Good day.\n");
// else
//	printf("Good evening.\n");

//(time < 10) ? printf("GM\n") : (time < 20) ? printf("GD\n")
//																					 : printf("GE\n");

// 	int day = 10;

// 	switch (day)
// 	{
// 	case 1:
// 		printf("Monday");
// 		break;
// 	case 2:
// 		printf("Tuesday");
// 		break;
// 	case 3:
// 		printf("Wednesday");
// 		break;
// 	case 4:
// 		printf("Thursday");
// 		break;
// 	case 5:
// 		printf("Friday");
// 		break;
// 	case 6:
// 		printf("Saturday");
// 		break;
// 	case 7:
// 		printf("Sunday");
// 		break;
// 	default:
// 		printf("Unknown day");
// 	}
//}

// -----------------[Loops]--------------------

/**
 * While => The while loop loops through a block of code as long as a specified condition is true:
 *
 * do/while => The do/while loop is a variant of the while loop.
 *  This loop will execute the code block once, before checking if
 *  the condition is true, then it will repeat the loop as long
 * as the condition is true.
 */

// int main(void)
// {
// 	// int i = 0;

// 	// while (i < 5)
// 	// {
// 	// 	printf("%d\n", i);
// 	// 	i++;
// 	// }

// 	int i = 0;

// 	// do
// 	// {
// 	// 	printf("%d\n", i);
// 	// 	i++;
// 	// } while (i < 5);

// 	for (;;)
// 	{
// 		if (i < 5)
// 		{
// 			printf("%d\n", i);
// 			i++;
// 		}
// 	}
// }
// -----------------[Math Function]--------------------

/**
 * #include <math.h>
 * sqrt()
 * ceil()
 * floor()
 * abs(x)
 */

// int main(void)
// {
// 	// printf("%f\n", sqrt(16));

// 	printf("%f\n", ceil(1.1));
// 	printf("%f\n", floor(1.9));
// 	printf("%d\n", abs(-20));
// }

// -----------------[Recursion Function]--------------------
/**
 * Recursion is the technique of making a function call itself.
 *  This technique provides a way to break complicated problems
 *  down into simple problems which are easier to solve.
 *
 * Recursion may be a bit difficult to understand.
 *  The best way to figure out how it works is to
 *  experiment with it.
 */

// int sum(int k);

// int main()
//{
//	int result = sum(10);
//	printf("%d\n", result);
//	return 0;
// }

// int sum(int k)
//{
//	if (k > 0)
//	{
//		return k + sum(k - 1);
//	}
//	else
//	{
//		return 0;
//	}
// }

// -----------------[Memory Address]--------------------
/*
	Memory Address
		* When a variable is created in C, a memory address is assigned to the variable.
		* The memory address is the location of where the variable is stored on the computer.
		* When we assign a value to the variable, it is stored in this memory address.
		* To access it, use the reference operator (&), and the result represents where the variable is stored:

	Why is it useful to know the memory address?
		Pointers are important in C, because they allow us to manipulate the data in the computer's memory -
		this can reduce the code and improve the performance.

		Pointers are one of the things that make C stand out from other programming languages, like Python and Java.
*/

// int main(void)
//{
//	int myAge = 22;

//	printf("%d\n", myAge);
//	printf("%p\n", &myAge);

//	myAge = 25;
//	printf("%d\n", myAge);
//	printf("%p\n", &myAge);
//}

// -----------------[pointers]--------------------
/*
	Pointers
		* variable that stores the memory address of another variable as its value.
		* variable points to a data type (like int) of the same type, and is created with the * operator.
		* The address of the variable you are working with is assigned to the pointer:

	& => reference operator
	* => dereference operator

	But be careful; pointers must be handled with care, since it is
	possible to damage data stored in other memory addresses.
*/

int main(void)
{
	int theYear = 2023, *ptr = &theYear;
	printf("%d\n", *ptr);
	char arr[20];
}
//   https://medium.com/@iiesbangalorebl2/the-importance-of-pointers-in-c-language-programming-36950c341ed4
//   https://www.geeksforgeeks.org/dynamic-memory-allocation-in-c-using-malloc-calloc-free-and-realloc/
/*
	why pointers are important?
		=> Dynamic Memory Allocation
			One of the most important uses of pointers in C programming is dynamic memory allocation.
			Dynamic memory allocation allows you to allocate memory at runtime, which is useful
			when you do not know the size of the data you will be working with in advance.
		[malloc() - calloc() - free() - realloc()]
		* malloc() => memory allocation.
			ptr = (cast-type*) malloc(byte-size)
			ptr = (int*) malloc(5*sizeof(int))
		* calloc() => contiguous allocation.
			ptr (cast-type*) calloc(n, element-size)
			ptr = (int*) calloc(5, sizeof(int))

				calloc() gives you a zero-initialized buffer,
				while malloc() leaves the memory uninitialized.



		* free() => de-allocate the memory.
		* realloc() => re-allocation

		=> Passing Arguments to Functions

		=> Working with Arrays
			How Are Pointers Related to Arrays?
				Ok, so what's the relationship between pointers and arrays? Well,
				in C, the name of an array, is actually a pointer to the first element of the array.

*/
