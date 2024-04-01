#include "main.h"

/**
 * *_memset - function that fills memory with a constant byte.
 * @s: pointer to destension
 * @b: character to set
 * @n: number of bytes to be set to th value
 *
 * Return: s
 */

char *_memset(char *s, char b, unsigned int n)
{
	unsigned int i;

	for (i = 0; i < n; i++)
	{
		s[i] = b;
	}
	return (s);
}
