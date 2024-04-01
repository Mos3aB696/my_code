#include "main.h"

/**
 * *_strchr -  function that locates a character in a string.
 * @s: String
 * @c: Character
 *
 * Return: 0
*/

char *_strchr(char *s, char c)
{
	while (*s)
	{
		if (*s == c)
			return (s);
		s++;
	}
	if (c == '\0')
		return (s);
	return (0);
}
