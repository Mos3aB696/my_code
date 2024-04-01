#include <stdio.h>
#include <stdlib.h>

int add(int a, int b)
{
	printf("Add is: %d\n", a + b);
}
int sub(int a, int b)
{
	printf("Subtraction is: %d\n", a - b);
}
int multi(int a, int b)
{
	printf("Multiplication is: %d\n", a * b);
}
int dive(int a, int b)
{
	printf("Division is: %d\n", a / b);
}

int main(void)
{
	int (*fun_arr[])(int, int) = {add, sub, multi, dive};
	unsigned int ch;
	int a, b;

	printf("Choose 0 for Add, 1 for Subtraction, 2 for Multiplication, 3 for Division \n");
	scanf("%d", &ch);

	if (ch > 3)
		return (0);

	printf("enter two numberes: a, b \n");
	scanf("%d %d", &a, &b);

	(*fun_arr[ch])(a, b);

	return (0);
}
