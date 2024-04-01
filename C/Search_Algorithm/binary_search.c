#include <stdio.h>

int middle(int low, int high)
{
	int midNum, doubleNum;

	midNum = (low + high) >> 1;
	doubleNum = (low + high) << 1;
	// int mid = ((unsigned int)low + (unsigned int)high) / 2;

	printf("The Middle element => %d\n", midNum);
	printf("The Double element => %d\n", doubleNum);
}

/*
	Time Complexity:
		Best Case: O(1)
		Average Case: O(log N)
		Worst Case: O(log N)

		{1, 5, 7, 10, 30, 50, 70}
*/

int linBinarySearch(int arr[], int left, int right, int target)
{
	int mid;
	while (left <= right)
	{
		mid = (left + right) >> 1;

		if (arr[mid] == target)
			return (mid);

		if (arr[mid] < target)
			left = mid + 1;
		else
			right = mid - 1;
	}
	return (-1);
}

int recBinarySearch(int arr[], int left, int right, int target)
{
	// Don't use while here because we use recursion
	if (left <= right)
	{

		int mid = (left + right) >> 1;

		if (arr[mid] == target)
			return mid;
		// {1, 5, 7, 10, 30, 50, 70}
		if (arr[mid] > target)
			return recBinarySearch(arr, left, mid - 1, target);
		else
			return recBinarySearch(arr, mid + 1, right, target);
	}
	return (-1);
}

int main(void)
{
	int arr[] = {1, 5, 7, 10, 30, 50, 70};
	int size = sizeof(arr) / sizeof(arr[0]);
	int target = 1;
	int result = recBinarySearch(arr, 0, size - 1, target);

	if (result == -1)
		printf("The Target element not found(Out Of Range)\n");
	else
		printf("The Target element found in index => %d \n", result);

	middle(0, 10);

	return (0);
}