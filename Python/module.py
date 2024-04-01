# from random import random, randint, randrange
# import random
# import sys
# import Mos3aB
import sys
import termcolor
import pyfiglet
import fibo as fi
from datetime import date
import os
# print(age_test)
# print(dir(random))
# print(random.random())
# print(random.randrange(1, 10, 2))
# print(random.randint(1, 2))
# print(random())
# print(randint(1, 10))
# print(randrange(10, 20, 3))
# print(sys.path)
# print(Mos3aB.sayHello('mos3ab'))
# print(dir(Mos3aB))
# print(Mos3aB.data('mos3ab', 22, 'Egypt'))

# print(dir(pyfiglet))
# print(dir(termcolor))
# print(dir(fibo))
# print(pyfiglet.figlet_format("Mos3aB"))
# print(termcolor.colored("Mos3aB", color='red'))
# print(termcolor.colored(pyfiglet.figlet_format("Mos3aB"), color='red'))
# print(termcolor.colored(pyfiglet.figlet_format("Amira"), color='blue'))
# print(termcolor.colored(pyfiglet.figlet_format("Mos3aB"), color='black'))
# print(pyfiglet.figlet_format("Mos3ab"))
# print(termcolor.colored('amira', color='red'))

# print(termcolor.colored(pyfiglet.figlet_format("Amira"), color='yellow'))

# fibo.fib(1000564500)
# print(fi.__name__)
# now = date.today()
# birthday = date(1999, 6, 1)
# age = now - birthday
# print(age)


# total arguments
n = len(sys.argv)
print("Total arguments passed:", n)

# Arguments passed
print("\nName of Python script:", sys.argv[0])

print("\nArguments passed:", end=" ")
for i in range(1, n):
    print(sys.argv[i], end=" ")

# Addition of numbers
Sum = 0
# Using argparse module
for i in range(1, n):
    Sum += int(sys.argv[i])

sub = 1
for i in range(1, n):
    sub *= int(sys.argv[i])

print("\n\nResult sum:", Sum)
print("\n\nResult sub:", sub)
print(os.write(1, b''))
