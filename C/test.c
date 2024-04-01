#include <unistd.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <sys/types.h>
#include <sys/wait.h>
#include <signal.h>
#include <stdbool.h>

// int main(void)
// {
// 	pid_t my_pid_par, my_pid_child;

// 	my_pid_par = getppid();
// 	my_pid_child = getpid();
// 	printf("%u\n", my_pid_par);
// 	printf("%u\n", my_pid_child);
// 	return (0);
// }

// Write a program that prints all the arguments, without using ac.

// int main(int ac, char **av)
// {
// 	int i = 0;
// 	// while (*av)
// 	// {
// 	// 	printf("%s\n", *av);
// 	// 	av++;
// 	// }
// 	for (i; i < ac; i++)
// 	{
// 		printf("%s\n", *av);
// 	}
// 	return (0);
// }

// int main(void)
//{
//	char *userInput = NULL;
//	// used for count of byte
//	size_t len = 0;
//	// Used  for  a count of bytes or an error indication. According to POSIX
//	ssize_t read;

//	printf("$ ");

//	// getline() reads an entire line from stream, storing the address of
//	// the buffer containing the text into *lineptr.  The buffer is null-terminated
//	// and includes the newline character, if one was found.

//	read = getline(&userInput, &len, stdin);
//	if (read != -1)
//		printf("%s", userInput);
//	free(userInput);

//	return (0);
//}
// int main(void)
//{
//	printf("$ ");
//	char *userInput = NULL;
//	userInput = malloc(sizeof(userInput));
//	if (fgets(userInput, sizeof(userInput), stdin) != NULL)
//		printf("%s\n", userInput);
//	free(userInput);
//	return (0);
//}
// int main()
// {
// 	char str[] = "Mos3aB Abdelkader Elsayed Abdelkaway";
// 	char *token = strtok(str, " ");

// 	while (token != NULL)
// 	{
// 		printf("%s\n", token);
// 		token = strtok(NULL, " ");
// 	}
// 	return (0);
// }

// [m, o,s]
// [mos3ab, abdel]

// int main(void)
// {
// 	pid_t my_pid;
// 	pid_t child_pid;

// 	child_pid = fork();

// 	if (child_pid == -1)
// 	{
// 		perror("Error: ");
// 		return (1);
// 	}

// 	my_pid = getpid();
// 	printf("my pid id %u\n", my_pid);

// 	if (child_pid == 0)
// 		printf("(%u) OOOOOOOOOO!\n", my_pid);
// 	else
// 		printf("(%u) %u, I am your father\n", my_pid, child_pid);

// 	return (0);
// }

// int main(void)
// {
// 	if (fork() == 0)
// 		printf("HC: hello from child\n");
// 	else
// 	{
// 		printf("HP: hello from parent\n");
// 		wait(NULL);
// 		printf("CT: child has terminated\n");
// 	}
// 	printf("Bye\n");
// 	return (0);
// }

// int main(void)
// {
// 	pid_t child_pid;
// 	int status;

// 	child_pid = fork();
// 	if (child_pid == -1)
// 	{
// 		perror("Error: ");
// 		return (1);
// 	}
// 	if (child_pid == 0)
// 	{
// 		printf("Wait for me\n");
// 		sleep(3);
// 	}
// 	else
// 	{
// 		wait(&status);
// 		printf("OH, it's all better now");
// 	}
// 	return (0);
// }
// // C program to demonstrate waitpid()
// #include <stdio.h>
// #include <stdlib.h>
// #include <sys/wait.h>
// #include <unistd.h>

// void waitexample()
// {
// 	int i, stat;
// 	pid_t pid[5];
// 	for (i = 0; i < 5; i++)
// 	{
// 		if ((pid[i] = fork()) == 0)
// 		{
// 			sleep(1);
// 			exit(100 + i);
// 		}
// 	}

// 	// Using waitpid() and printing exit status
// 	// of children.
// 	for (i = 0; i < 5; i++)
// 	{
// 		pid_t cpid = waitpid(pid[i], &stat, 0);
// 		if (WIFEXITED(stat))
// 			printf("Child %d terminated with status: %d\n",
// 						 cpid, WEXITSTATUS(stat));
// 	}
// }

// // Driver code
// int main()
// {
// 	waitexample();
// 	return 0;
// }
// int main(void)
// {
// 	int i;
// 	for (i = 0; i < 5; i++)
// 	{
// 		pid_t pid = fork();
// 		if (pid < 0)
// 		{
// 			fprintf(stderr, "Fork failed\n");
// 			return (1);
// 		}
// 		if (pid == 0)
// 		{
// 			char *args[] = {"/bin/ls", "-l", "/tmp", NULL};
// 			execvp(args[0], args);
// 			exit(0);
// 		}
// 		else
// 		{
// 			wait(NULL);
// 		}
// 	}
// 	return (0);
// }

// int main(void)
// {
// 	int parent = fork();
// 	int n, i;

// 	if (parent == 0)
// 		n = 1;
// 	else
// 		n = 6;
// 	if (parent != 0)
// 		wait(NULL);
// 	for (i = n; i < n + 5; i++)
// 	{
// 		printf("%d", i);
// 		fflush(stdout);
// 	}
// 	if (parent != 0)
// 		printf("\n");
// 	return (0);
// }

// int main(int argc, char **argv)
//{
//	if (isatty(STDIN_FILENO))
//	{
//		char cwd[1024];
//		getcwd(cwd, sizeof(cwd));
//		char *username = getlogin();
//		char hostname[1024];
//		gethostname(hostname, sizeof(hostname));
//		printf("%s@%s:%s$\n", username, hostname, cwd);
//	}
// }

// int main(void)
//{
//	char *str = "mrr";

//	char *new = strdup(str);
//	new = "mr";
//	printf("%s\t %s\n", str, new);
//}
// void handle_sigint(int sig)
//{
//	printf("Caught signal %d\n", sig);
//}
// int main()
//{
//	signal(SIGINT, handle_sigint);
//	while (1)
//	{
//		printf("hello world\n");
//		sleep(1);
//	}
//	return (0);
//}
// char *_strdup(const char *src)
//{
//	char *str, *new;
//	int len = 0;

//	while (src[len])
//		len++;
//	str = malloc(len + 1);
//	new = str;
//	while (*src)
//		*new ++ = *src++;
//	*new = '\0';
//	return (str);
//}

// int _strlen(char *str)
//{
//	int i = 0;
//	while (str[i] != '\0')
//		i++;
//	return (i);
// }

// char *_strcpy(char *dest, char *src)
//{
//	int i = 0;

//	if (dest != 0 || src != 0)
//	{
//		while (src[i])
//		{
//			dest[i] = src[i];
//			i++;
//		}
//		dest[i] = '\0';
//	}
//	return (dest);
//}
// char *_strstart(char *haystack, char *needle)
//{
//	while (*needle)
//	{
//		if (*needle++ != *haystack++)
//			return (NULL);
//	}
//	return ((char *)haystack);
//}
// int main(void)
//{
//	char str[] = "amira";
//	char src[10];
//	int len = _strlen(str);
//	char *newstr = _strcpy(src, str);
//	char *startstr = _strstart(str, "a");

//	// printf("%s\t %d\n", str, len);
//	// printf("%s\n", newstr);
//	printf("%p\n", startstr);

//	return 0;
//}

// int _atoi(char *str)
//{
//	int res = 0;	// Initialize result
//	int sign = 1; // Initialize sign as positive
//	int i = 0;		// Initialize index of first digit

//	// If number is negative, then update sign
//	if (str[0] == '-')
//	{
//		sign = -1;
//		i++; // Also update index of first digit
//	}

//	// Iterate through all digits and update the result
//	for (; str[i] != '\0'; ++i)
//	{
//		if (str[i] < '0' || str[i] > '9')
//		{ // If the character is not a number, break the loop
//			break;
//		}
//		res = res * 10 + str[i] - '0';
//	}

//	// Return result with sign
//	return sign * res;
//}

// int _atoi(char *str)
//{
//	int result = 0;
//	int sign = 1;

//	// Skip non-digit characters and handle sign characters
//	while (*str)
//	{
//		if (*str == '-')
//		{
//			sign *= -1;
//		}
//		else if (*str >= '0' && *str <= '9')
//		{
//			break;
//		}
//		str++;
//	}

//	// Convert number
//	while (*str >= '0' && *str <= '9')
//	{
//		result = result * 10 + (*str - '0');
//		str++;
//	}

//	// Apply sign
//	result *= sign;

//	return result;
//}
// int main(void)
//{
//	int nb;

//	nb = _atoi("98");
//	printf("%d\n", nb);
//	nb = _atoi("-402");
//	printf("%d\n", nb);
//	nb = _atoi("          ------++++++-----+++++--98");
//	printf("%d\n", nb);
//	nb = _atoi("214748364");
//	printf("%d\n", nb);
//	nb = _atoi("0");
//	printf("%d\n", nb);
//	nb = _atoi("Suite 402");
//	printf("%d\n", nb);
//	nb = _atoi("         +      +    -    -98 Battery Street; San Francisco, CA 94111 - USA             ");
//	printf("%d\n", nb);
//	nb = _atoi("---++++ -++ Sui - te -   402 #cisfun :)");
//	printf("%d\n", nb);
//	return (0);
//}

// int main(void)
// {
// 	int a[] = {1, 2, 3, 4};
// 	int b[4];
// 	memcpy(b, a, sizeof(a));
// 	a[2] = 10;
// 	printf("Contents of a: ");
// 	for (int i = 0; i < sizeof(a) / sizeof(int); i++)
// 		printf("%d ", a[i]);
// 	printf("\nContents of b: ");
// 	for (int i = 0; i < sizeof(b) / sizeof(int); i++)
// 		printf("%d ", b[i]);
// 	printf("\n");
// }
// struct point
// {
// 	int x;
// 	int y;
// };
// struct point my_point = {3, 7};
// struct point *p = &my_point;

// int main(void)
// {
// 	// my_point.y = 88;
// 	p->y = 808;
// 	printf("%d\n", my_point.y);
// }

int main(void)
{
	printf("%d \n", 20);
}
