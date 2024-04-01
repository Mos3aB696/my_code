// #include <stdio.h>
// #include <unistd.h>

// int main(int argc, char *argv[])
// {
// 	printf("Hello, here is prog1\n");
// 	printf("The PID: %d\n", getpid());
// 	char *args[] = {"Hello", "Mos3aB", NULL};
// 	execv("./prog2", args);
// 	printf("end of prog1");
// }
// Use fork way to back to prog1 and continue printing.

#include <sys/types.h>
#include <sys/wait.h>
#include <unistd.h>
#include <stdio.h>

int main(void)
{
	printf("Hello, here is prog1. The PID: %d\n", getpid());
	// char *args[] = {"Hello", "Mos3aB", NULL};

	pid_t pid = fork();

	if (pid == 0)
	{
		// This block will be executed by the child process
		char *args[] = {"ls", "-l", "-a", NULL};
		execve("/bin/ls", args, NULL);
	}
	else if (pid > 0)
	{
		// This block will be executed by the parent process
		wait(NULL); // Wait for the child process to finish
		printf("Back to prog1\n");
	}
	else
	{
		// Fork failed
		printf("fork() failed!\n");
		return (1);
	}

	return (0);
}
