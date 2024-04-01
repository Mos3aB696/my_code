#include <stdio.h>
#include <unistd.h>
#include <string.h>

int main(void)
{
	printf("Hello from prog2\n");
	printf("The PID: %d\n", getpid());
	printf("Bye Bye prog2\n");
	return (0);
}
