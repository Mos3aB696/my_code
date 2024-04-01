#include <stdio.h>
// ----------------------[Recursion]-------------------

/*
	Recursion is the technique of making a function call itself. This technique
	provides a way to break complicated problems down into simple problems which are
	easier to solve.

	Recursion may be a bit difficult to understand. The best way to figure out how it
	works is to experiment with it.

	Recursive functions are very useful to solve many mathematical problems,
	such as calculating the factorial of a number, generating Fibonacci series, etc.

	note:
		The developer should be very careful with recursion as it can be quite easy
		to slip into writing a function which never terminates, or one that uses
		excess amounts of memory or processor power. However, when written
		correctly recursion can be a very efficient and mathematically-elegant
		approach to programming.
*/
int sum(int k)
{
	if (k > 0)
	{
		return k + sum(k - 1);
	}
	else
	{
		return 0;
	}
}
int main()
{
	int result = sum(10);
	printf("%d", result);
	return 0;
}
// ----------------------[Recursion]-------------------
