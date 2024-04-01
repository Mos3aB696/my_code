#include <stdio.h>

/*
Time Complexity:

Best Case: In the best case, the key might be present at the first index.
So the best case complexity is O(1)

Worst Case: In the worst case, the key might be present at the last
index i.e., opposite to the end from which the search has started
in the list. So the worst-case complexity is O(N) where N is the size of
the list.

Average Case: O(N)
*/

int linear_search(int arr[], int size, int target)
{
	int i;

	for (i = 0; i < size; i++)
		if (arr[i] == target)
			return (i);
	return (-1);
}

int main(void)
{
	int arr[] = {1, 2, 3, 5, 10, 20, 30, 6};
	int target = 300;
	int size = sizeof(arr) / sizeof(arr[0]);
	int result;

	result = linear_search(arr, size, target);

	if (result == -1)
		printf("Can't found the target element\n");
	else
		printf("Found the target element in index %d \n", result);

	return (0);
}