#include <stdio.h>
#include <stdlib.h>
#define LIMIT 100 // Specifying the maximum limit of the stack

/** Stack With Array */

/* Global declaration of variables */
int stack[LIMIT]; // Array implementation of stack
int top;		  // To insert and delete the data elements in the stack
int i;			  // To traverse the loop to while displaying the stack
int choice;		  // To choose either of the 3 stack operations
void push();	  // Function used to insert the element into the stack
void pop();		  // Function used to delete the element from the stack
void display();	  // Function used to display all the elements in the stack according to LIFO rule
int main()
{
	printf("Welcome to DataFlair tutorials!\n\n");
	printf("ARRAY IMPLEMENTATION USING STACKS\n\n");
	top = -1; // Initializing top to -1 indicates that it is empty
	do
	{
		printf("1. Insert\n2. Delete\n3. Display\n4. Exit\n\n");
		printf("Enter your choice:");
		scanf("%d", &choice);
		switch (choice)
		{
		case 1:
			push();
			break;
		case 2:
			pop();
			break;
		case 3:
			display();
			break;
		case 4:
			exit(0);
			break;
		default:
			printf("Sorry, invalid choice!\n");
			break;
		}
	} while (choice != 4);
	return 0;
}
void push()
{
	int element;
	if (top == LIMIT - 1)
	{
		printf("Stack underflow\n");
	}
	else
	{
		printf("Enter the element to be inserted:");
		scanf("%d", &element);
		top++;
		stack[top] = element;
	}
}
void pop()
{
	int element;
	if (top == -1)
	{
		printf("Stack underflow\n");
	}
	else
	{
		element = stack[top];
		printf("The deleted item is %d\n", stack[top]);
		top--; // The element below the topmost element is deleted
	}
}
void display()
{
	if (top == -1)
	{
		printf("Stack underflow\n"); // Stack is empty
	}
	else if (top > 0)
	{
		printf("The elements of the stack are:\n");
		for (i = top; i >= 0; i--) // top to bottom traversal
		{
			printf("%d\n", stack[i]);
		}
	}
}

/** Stack With Linked List */

// void push();		// Function used to insert the element into the stack
// void pop();			// Function used to delete the elememt from the stack
// void display(); // Function used to display all the elements in the stack according to LIFO rule

// struct node
// {
// 	int data;
// 	struct node *next;
// };
// struct node *temp;

// int main()
// {

// 	printf("Welcome to DataFlair tutorials!\n\n");

// 	int choice;
// 	printf("LINKED LIST IMPLEMENTATION USING STACKS\n\n");
// 	do
// 	{

// 		printf("1. Insert\n2. Delete\n3. Display\n4. Exit\n\n");
// 		printf("Enter your choice:");
// 		scanf("%d", &choice);

// 		switch (choice)
// 		{
// 		case 1:
// 			push();
// 			break;
// 		case 2:
// 			pop();
// 			break;
// 		case 3:
// 			display();
// 			break;
// 		case 4:
// 			exit(0);
// 			break;
// 		default:
// 			printf("Sorry, invalid choice!\n");
// 			break;
// 		}
// 	} while (choice != 4);
// 	return 0;
// }

// void push()
// {
// 	int data;
// 	struct node *pointer = (struct node *)malloc(sizeof(struct node));
// 	if (pointer == NULL)
// 	{
// 		printf("Stack overflow");
// 	}
// 	else
// 	{
// 		printf("Enter the element to be inserted: ");
// 		scanf("%d", &data);
// 		if (temp == NULL)
// 		{
// 			pointer->data = data;
// 			pointer->next = NULL;
// 			temp = pointer;
// 		}
// 		else
// 		{
// 			pointer->data = data;
// 			pointer->next = temp;
// 			temp = pointer;
// 		}
// 	}
// }

// void pop()
// {
// 	int item;
// 	struct node *pointer;
// 	if (temp == NULL)
// 	{
// 		printf("Stack Underflow\n");
// 	}
// 	else
// 	{
// 		item = temp->data;
// 		pointer = temp;
// 		temp = temp->next;
// 		free(pointer);
// 		printf("The deleted item is %d\n", item);
// 	}
// }
// void display()
// {
// 	int i;
// 	struct node *pointer;
// 	pointer = temp;
// 	if (pointer == NULL)
// 	{
// 		printf("Stack underflow\n");
// 	}
// 	else
// 	{
// 		printf("The elements of the stack are:\n");
// 		while (pointer != NULL)
// 		{
// 			printf("%d\n", pointer->data);
// 			pointer = pointer->next;
// 		}
// 	}
// }

/** Queue With Array */

/* Global declaration of variables */

// int queue[LIMIT]; // Array implementation of queue
// int front, rear;	// To insert and delete the data elements in the queue respectively
// int i;						// To traverse the loop to while displaying the stack
// int choice;				// To choose either of the 3 stack operations

// void insert();	// Function used to insert the element into the queue
// void delet();		// Function used to delete the elememt from the queue
// void display(); // Function used to display all the elements in the queue according to FIFO rule

// int main()
// {

// 	printf("Welcome to DataFlair tutorials!\n\n");

// 	printf("ARRAY IMPLEMENTATION OF QUEUES\n\n");
// 	front = rear = -1; // Initialzing front and rear to -1 indicates that it is empty
// 	do
// 	{

// 		printf("1. Insert\n2. Delete\n3. Display\n4. Exit\n\n");
// 		printf("Enter your choice:");
// 		scanf("%d", &choice);

// 		switch (choice)
// 		{
// 		case 1:
// 			insert();
// 			break;
// 		case 2:
// 			delet();
// 			break;
// 		case 3:
// 			display();
// 			break;
// 		case 4:
// 			exit(0);
// 			break;
// 		default:
// 			printf("Sorry, invalid choice!\n");
// 			break;
// 		}
// 	} while (choice != 4);
// 	return 0;
// }

// void insert()
// {
// 	int element;
// 	if (rear == LIMIT - 1)
// 		printf("Queue Overflow\n");
// 	else
// 	{
// 		if (front == -1)
// 			front = 0;
// 		printf("Enter the element to be inserted in the queue: ");
// 		scanf("%d", &element);
// 		rear++;
// 		queue[rear] = element;
// 	}
// }

// void delet()
// {
// 	if (front == -1 || front > rear)
// 	{
// 		printf("Queue Underflow \n");
// 	}
// 	else
// 	{
// 		printf("The deleted element in the queue is: %d\n", queue[front]);
// 		front++;
// 	}
// }

// void display()
// {
// 	int i;
// 	if (front == -1)
// 	{
// 		printf("Queue underflow\n");
// 	}
// 	else
// 	{
// 		printf("The elements of the queue are:\n");
// 		for (i = front; i <= rear; i++)
// 			printf("%d\n", queue[i]);
// 	}
// }

/** Queue With Linked List */

// struct node
// {
// 	int data;
// 	struct node *link;
// } *front, *rear;

// void insert();	// Function used to insert the element into the queue
// void delet();		// Function used to delete the elememt from the queue
// void display(); // Function used to display all the elements in the queue according to FIFO rule

// int main()
// {

// 	printf("Welcome to DataFlair tutorials!\n\n");

// 	int choice;
// 	printf("LINKED LIST IMPLEMENTATION OF QUEUES\n\n");
// 	do
// 	{

// 		printf("1. Insert\n2. Delete\n3. Display\n4. Exit\n\n");
// 		printf("Enter your choice:");
// 		scanf("%d", &choice);

// 		switch (choice)
// 		{
// 		case 1:
// 			insert();
// 			break;
// 		case 2:
// 			delet();
// 			break;
// 		case 3:
// 			display();
// 			break;
// 		case 4:
// 			exit(0);
// 			break;
// 		default:
// 			printf("Sorry, invalid choice!\n");
// 			break;
// 		}
// 	} while (choice != 4);
// 	return 0;
// }

// void insert()
// {
// 	struct node *temp;

// 	temp = (struct node *)malloc(sizeof(struct node));
// 	printf("Enter the element to be inserted in the queue: ");
// 	scanf("%d", &temp->data);
// 	temp->link = NULL;
// 	if (rear == NULL)
// 	{
// 		front = rear = temp;
// 	}
// 	else
// 	{
// 		rear->link = temp;
// 		rear = temp;
// 	}
// }

// void delet()
// {
// 	struct node *temp;
// 	temp = front;
// 	if (front == NULL)
// 	{
// 		printf("Queue underflow\n");
// 		front = rear = NULL;
// 	}
// 	else
// 	{
// 		printf("The deleted element from the queue is: %d\n", front->data);
// 		front = front->link;
// 		free(temp);
// 	}
// }

// void display()
// {
// 	struct node *temp;
// 	temp = front;
// 	int cnt = 0;
// 	if (front == NULL)
// 	{
// 		printf("Queue underflow\n");
// 	}
// 	else
// 	{
// 		printf("The elements of the stack are:\n");
// 		while (temp)
// 		{
// 			printf("%d\n", temp->data);
// 			temp = temp->link;
// 			cnt++;
// 		}
// 	}
// }
