#include <stdio.h>
#include <stdbool.h>

/*
Advantages of Bubble Sort:
		Bubble sort is easy to understand and implement.
		It does not require any additional memory space.
		It is a stable sorting algorithm,
			meaning that elements with the same key value maintain their relative order in the sorted output.

Disadvantages of Bubble Sort:
		Bubble sort has a time complexity of O(N^2) which makes it very slow for large data sets.
		Bubble sort is a comparison-based sorting algorithm,
			which means that it requires a comparison operator to determine the relative order of elements in the input data set.
				It can limit the efficiency of the algorithm in certain cases.

	Big O => O(N2)
	Big Ω => Ω(N)
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

void bubleSort(int arr[], int n)
{
	int i, j;
	bool swapped;

	for (i = 0; i < n - 1; i++)
	{
		swapped = false;
		for (j = 0; j < n - i - 1; j++)
		{
			if (arr[j] > arr[j + 1])
			{
				swap(&arr[j], &arr[j + 1]);
				swapped = true;
			}
		}
		if (swapped == false)
			break;
	}
}

void printArr(int arr[], int n)
{
	int i;

	for (i = 0; i < n; i++)
		printf("%d ", arr[i]);
	printf("\n");
}

int main(void)
{
	int arr[] = {12, 2, 53, 1, 54, 93, 34, 1334, 430985, 0};
	int n = sizeof(arr) / sizeof(arr[0]);

	bubleSort(arr, n);
	printf("Sorted Array By Bubble Sort: \n");
	printArr(arr, n);
	return (0);
}
