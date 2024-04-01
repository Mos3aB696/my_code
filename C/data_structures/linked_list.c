#include <stdio.h>
#include <stdlib.h>

typedef struct node_ptr
{
	int data;
	node *next;
} node;

node *head;
void insert(int x);
void print();

int main(void)
{
	head = NULL;
	int user_data, i, x;

	printf("How Many Numbers? \n");
	scanf("%d", &user_data);
	for (i = 0; i < user_data; i++)
	{
		printf("Enter The Number \n");
		scanf("%d", &x);
		insert(x);
		print();
	}
}

void insert(int x)
{
	node *temp = (node *)malloc(sizeof(node));
	(*temp).data = x;
}

void print()
{
	node *temp = head;
	printf("List is: ");
	while (temp != NULL)
	{
		printf("%d", (*temp).data);
		temp = (*temp).next;
	}
	printf("\n");
}