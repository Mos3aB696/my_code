#include "main.h"

/**
 * *_strncpy - function that copies a string
 * @dest: String One
 * @src: String Two
 * @n: Numbers Of Element
 *
 * Return: dest
 */

char *_strncpy(char *dest, char *src, int n)
{
	int i;

	for (i = 0; src[i] != '\0' && i < n; i++)
		dest[i] = src[i];

	while (i < n)
		dest[i++] = '\0';

	return (dest);
}
