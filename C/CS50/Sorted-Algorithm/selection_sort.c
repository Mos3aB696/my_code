#include <stdio.h>
#include <string.h>

/*
Advantages of Selection Sort Algorithm

		Simple and easy to understand.
		Works well with small datasets.

Disadvantages of the Selection Sort Algorithm

		Selection sort has a time complexity of O(n^2) in the worst and average case.
		Does not work well on large datasets.
		Does not preserve the relative order of items with equal keys which means it is not stable.

Complexity Analysis of Selection Sort

Time Complexity: The time complexity of Selection Sort is O(N2) as there are two nested loops:

		One loop to select an element of Array one by one = O(N)
		Another loop to compare that element with every other Array element = O(N)
		Therefore overall complexity = O(N) * O(N) = O(N*N) = O(N2)

	Big O => O(N2)
	Big Ω => Ω(N2)
*/

/**
 * swap - Swap Fucntion
 * @xp: The X Position
 * @yp: The Y Position
 *
 * Return: void
 */
void swap(int *xp, int *yp)
{
	int tmp = *xp;
	*xp = *yp;
	*yp = tmp;
}

/**
 * sectionSort - This Is Implementation Of Sorted Function
 * @arr: The Array To Sorted
 * @n: The Lenght Of An Array
 *
 * Return: void
 */

void sectionSort(int arr[], int n)
{
	int i, j, minIDX;

	for (i = 0; i < n - 1; i++)
	{
		minIDX = i;

		for (j = i + 1; j < n; j++)
		{
			if (arr[j] < arr[minIDX])
				minIDX = j;
		}
		if (minIDX != i)
			swap(&arr[minIDX], &arr[i]);
	}
}

/**
 * printArray - Function To Print Sorted Array
 * @arr: Array To Print
 * @n: The Lenght Of An Array
 *
 * Return: void
 */

void printArray(int arr[], int n)
{
	int i;

	for (i = 0; i < n; i++)
		printf("%d ", arr[i]);
	printf("\n");
}

/**
 * main - Main Function
 *
 * Return: 0
 */

int main(void)
{
	int arr[] = {12, 2, 53, 1, 54, 93, 34, 1334, 430985, 0};
	int n = sizeof(arr) / sizeof(arr[0]);

	sectionSort(arr, n);
	printf("Sorted Array By Selection Sort: \n");
	printArray(arr, n);
	return (0);
}
