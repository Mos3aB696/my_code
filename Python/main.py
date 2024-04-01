import math
# print("I Love Python")
# print("I Love Programming")


# print(str)
# --------------------------------------
# -- Variables --
# ---------------
# Syntax => [Variable Name] [Assignment Operator] [Value]
#
# variables name rules like another languages (js | c)
# Name Convention and Rules
# [1] Can Start With (a-z A-Z) Or Underscore
# [2] You Cannot With Num Or Special Characters
# [3] Can Include (0-9) Or Underscore
# [4] Cannot Include Special Characters
# [5] Name is Not Like name [ Case Sensitive ]
# --------------------------------------
# myName = "Mos3aB"
# print(myName)

# # Dynamically typed language
# x = 10
# print(x)  # 10
# x = "Hello"
# print(x)  # He  llo

# a, b, c, d = 1, 2, 3, 4
# print(a)
# print(b)
# print(c)
# print(d)
# ----------------------------
# Escape Sequences Characters
# \b => Back Space
# \newline => Escape New Line + \
# \\ => Escape Back Slash
# \' => Escape Single Quotes
# \" => Escape Double Quotes
# \n => Line Feed
# \r => Carriage Return
# \t => Horizontal Tab
# \xhh => Character Hex Value
# ----------------------------

# print("123456\xaa")  # carriage return

msg = "I Love"
lang = "Python"

# print(msg +  " "+ lang)
# print(f"{msg} {lang}")
# print("{} {}".format(msg, lang))
# -----------
# can only concatenate string to string
# !string to number => false
# can convert number to string by str() function
# -----------
# num = 2
# print("test %d" % num, type(num))
# print("Hello " + str(1))

# ------------
# to declare string you can use " " | ' '
# Print " " inside of ' ' =>  One
# Print ' ' inside of " " =>  Two
# if you want print mulipule lines use triple ' or " =>  Three
# triple double or single skip every characters => Four
# ------------

# import numpy
strOne = "Mos3aB 'Abdelkader'"  # One
strTwo = 'Mos3aB "Abdelkader"'  # Two

# print(strOne)
# print(strTwo)

# condition ? true : false
# condition ? true : cond2 ? true : cond3 ? ture : else
# name = False
# age = 13
# test = 0
# result = ((name or test) or age)
# print(result)

age = 14

# print("Ok" if age > 15 else "Not Ok")eZ

strThree = """first
second "test" 'test'
third"""  # Three

strFour = '''1
2 "test" 'test' @ # \ $
3'''  # Four

# print(strThree)
# print(strFour)
# ---------------------------------
# Strings Indexing & Slicing
# [1] All Data in Python is Object
# [2] Object Contain Elements
# [3] Every Element Has Its Own Index
# [4] Python Use Zero Based Indexing ( Index Start From Zero )
# [5] Use Square Brackets To Access Element
# [6] Enable Accessing Parts Of Strings, Tuples or Lists
# ---------------------------------
name = "Mos3aB"
age = 22

txtOne = "My Name Is {}, and I am {} Years Old".format(name, age)
txtTwo = "My Name Is {n}, and I am {a} Years Old".format(n=name, a=age)
txtThree = "My Name Is {}, and I am {} Years Old".format('Mos3aB', 22)
txtFour = "My Name Is {2}, and I am {0} Years Old, and Iam From {1}".format(
    22, 'Egypt', 'mos3ab')
txtFive = "My Name Is {:_>10}".format('Mos3aB')
txtSix = "My Age Is {:_>2}".format(222)
txtSeven = 'The Country Is {:_^9}'.format('Egypt')
txtEight = 'The Country Is {:.3}'.format('Egypt')
txtNine = 'The Country Is {:@^10.3}'.format('Egypt')
# print(txtOne)
# print(txtTwo)
# print(txtThree)
# print(txtFour)
# print(txtFive)
# print(txtSix)
# print(txtSeven)
# print(txtEight)
# print(txtNine)


num = '{:d}'.format(55555)
# print(num)
numOne = '{:05d}'.format(33)
# print(numOne)
numTwo = '{:@>5d}'.format(55)
# print(numTwo)
numThree = '{:f}'.format(55.362156165165655)
# print(numThree)
numFour = '{:.2f}'.format(55.362156155)
# print(numFour)
numFive = '{:_>07.3f}'.format(55.362156155)
# print(numFive)

word = 'python'
# print(word[:])
# print(word[:-2])
# print(word[1:3])

testlist = [1, 2, [3, 4, [5, 6]]]
# print(testlist[2][2][1])
a, b = 0, 1

# while a < 200:
#     print(a)
#     a, b = b, a + b

# print(f"{98} Battery street, {'San Francisco'}")

x = 8

# if x < 5:
#     print('less than 5')
# elif x > 5 and x < 10:
#     print('more than 5 and less than 10')
# else:
#     print('more than 10')

words = ['test', 'bcc', 'cd']

# for word in words:
#     print(word, len(word))

users = {'test': 'act', 'bcc': 'nonact', 'cd': 'act'}
for user, status in users.copy().items():
    if status == 'nonact':
        del users[user]

# print(users)

# for i in range(5):
#     print(i)

# for i in range(50, 0, -10):
#     print(i)

# for i in range(-10, -100, -10):
#     print(i)

# a = ['mary', 'had', 'lamp']
# for i in range(len(a)):
#    print(i, a[i])

# print(sum(range(5)))

nums = [0, 1, 2, 3, 4, 5]

for i in nums:
    if i == 3:
        continue
    # print(nums[i])


def check_age(age):
    match age:
        case  _ if 0 < age <= 10:
            return "under age"
        case _ if 10 < age <= 20:
            return "required age"
        case 21 | 22 | 23 | 24 | 25:
            return "prefect age"
        case _:
            return "get out of work"


# age_test = check_age(24)
# print(age_test)

# list_one = [1, 2, 3]
# print(id(list_one))
# print(list_one)
# list_one.append(4)
# print(id(list_one))
# print(list_one)

# str_one = "Hello"
# print(id(str_one))
# print(str_one)
# str_one += " World"
# print(id(str_one))
# print(str_one)
