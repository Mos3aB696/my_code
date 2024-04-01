# ------------[Data Types]-------
# print(type('Mos3aB'))  # string
# print(type("Mos3aB"))  # string
# # print(1)
# # print(2)
# print(type([1, 2, 3, 4, 5]))  # list

# print(type((1, 2, 3, 4, 5)))  # tuple

# print(type({'One': 1, 'Two': 2}))  # dictionary

# print(type(2 == 2))  # boolean
# print(2 == 2)  # false

# print(type(100))  # int
# print(type(100.3))  # float
# print(type(5+6j))


# # Complex

# myComplexNumber = 5+6j

# # print(type(myComplexNumber))

# print("Real Part Is: {}".format(myComplexNumber.real))
# print("Imaginary Part Is: {}".format(myComplexNumber.imag))

# # [1] You Can Convert From Int To Float or Complex
# # [2] You Can Convert From Float To Int or Complex
# # [3] You Cannot Convert Complex To Any Type

# print(100)
# print(float(100))
# print(complex(100))

# print(10.50)
# print(int(10.50))
# print(complex(10.50))

# print(10+9j)
# print(int(10+9j))
# print(float(10+9j))

# -------------[String]---------
# [1] to declare string you can use " " | ' '
# [2] Print " " inside of ' ' =>  One
# [3] Print ' ' inside of " " =>  Two
# [4] if you want print mulipule lines use triple ' or " =>  Three
# [5] triple double or single skip every characters => Four
# -----------------------------


# strOne = "Mos3aB 'Abdelkader'"  # One
# strTwo = 'Mos3aB "Abdelkader"'  # Two

# print(strOne)
# print(strTwo)

# condition ? true : false
# condition ? true : cond2 ? true : cond3 ? ture : else
# name = False
# age = 13
# test = 0
# result = ((name or test) or age)
# print(result)


# strThree = """first @
# second "test" 'test'
# third"""  # Three

# strFour = '''1
# 2 "test" 'test' @ # \ $
# 3'''  # Four

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
# [7] (-) Count From The End
# [8] [Start, End, Steps] => To Full Access
# ---------------------------------
myStr = 'I Love Palestine'
# # print(myStr[:])

# print(myStr[0])  # I
# print(myStr[-1])  # e
# print(myStr[-9:])  # Palestine
# print(myStr[0:6])  # I Love
# print(myStr[:6])  # I Love
# print(myStr[:])  # I Love Palestine [Full String]

# print(myStr[::2])  # ILv aetn
# print(myStr[::3])  # Io lte

# --------------------
# String Method
# --------------------
# strip() rstrip() lstrip()
a = "    I Love Python    "
# print(a.strip())
# print(a.rstrip())
# print(a.lstrip())

# a = "#####I Love Python####"
# print(a.strip("#"))
# print(a.rstrip("#"))
# print(a.lstrip("#"))

# a = "@#@#@#I Love Python@#@#@#"
# print(a.strip("@#"))
# print(a.rstrip("@#"))
# print(a.lstrip("@#"))

# print("_" * 30)

# title()
# b = "I Love 2d Graphics and 3g Technology and python"
# print(b)
# print(b.title())

# print("_" * 30)

# # capitalize() => works with only first word
# b = "i Love 2d Graphics and 3g Technology and python"
# print(b.capitalize())

# print("_" * 30)

# # zfill
# c, d, e, f, g = "1", "11", "111", "1111", "11111"

# print(c)
# print(d)
# print(e)
# print(f)
# print("_" * 30)
# print(c.zfill(5))
# print(d.zfill(5))
# print(e.zfill(5))
# print(f.zfill(5))
# print(g.zfill(5))


# # upper()
# g = "Mos3aB"
# print(g.upper())

# print("_" * 30)

# # lower()
# h = "Mos3aB"
# print(h.lower())

# print("_" * 30)

# split() rsplit()
# a = "I Love Pyt3hon and PHP and MySQL"
# print(a.split())
# print(type(a.split()))

b = "I-Love-Python-and-PHP-and-MySQL"
# print(b.split("-"))

c = "I-Love-Python-and-PHP-and-MySQL"
# print(c.split("-", 3))

# d = "I-Love-Python-and-PHP-and-MySQL"
# print(d.rsplit("-", 3))

# print("_" * 30)
# join()
# myName = ["Mos3aB", "Abdelkader", "Elsayed"]
# print(" ".join(myName))
# print(",".join(myName))
# print("".join(myName))
# print(type("".join(myName)))

# print("_" * 30)

# replace()
# a = "one two three one two one"
# print(a.replace('one', '1'))
# print(a.replace('one', '1', 2))

# print("_" * 30)

# center()
# print(e.center(9))  # Spaces
# print(e.center(9, "#"))  # Hashes
# print(e.center(15, "@"))  # @

# print("_" * 30)

# # ljust()
# print(e.ljust(10, "$"))

# print("_" * 30)

# # rjust()
# print(e.rjust(10, "$"))

# print("_" * 30)

# num = 20
# print(f"Your Age Is: {num}")
# print("Your Age Is: {}".format(num))
# num = 'test'
# print(num)

# e = "Mos3aB"

# txtOne = "My Name Is {:_>10}".format(e)
# txtTwo = "My Age Is {:_<6}".format(2222)
# txtThree = 'The Country Is {:_^9}'.format('Egypt')
# txtFour = 'The Country Is {:.3}'.format('Egypt')
# txtFive = 'The Country Is {:_^10.3}'.format('Egypt')

# print(txtOne)
# print(txtTwo)
# print(txtThree)
# print(txtFour)
# print(txtFive)

# print("_" * 30)

# count()
# f = "I Love Python and PHP Because PHP is Easy"
# print(len(f))
# print(f.count("PHP"))  # 2 PHP Words
# print(f.count("PHP", 0, 35))  # Only One PHP Word

# print("_" * 30)

# swapcase()
# g = "I Love Python"
# h = "i lOVE pYTHON"

# print(g.swapcase())
# print(h.swapcase())

# print("_" * 30)

# startswith()
# i = "I love Love Python"
# print(i.startswith("I"))
# print(i.startswith("S"))
# print(i.startswith('L', 2))
# print(i.startswith('l', 2, 6))
# print("_" * 30)

# # endswith()
# j = "I Love Python"
# print(j.endswith("n"))
# print(j.endswith("S"))
# print(j.endswith("e", 2, 6))

# print("_" * 30)

# -------------[Lists]---------
# [1] List Items Are Enclosed in Square Brackets
# [2] List Are Ordered, To Use Index To Access Item
# [3] List Are Mutable => Add, Delete, Edit
# [4] List Items Is Not Unique
# [5] List Can Have Different Data Types
# -----------------------------

# myAwesomeList = ['One', 'Two', 'One', 1, 100.5, True]

# print(myAwesomeList)  # Whole List
# print(myAwesomeList[1])  # 'Two'
# print(myAwesomeList[-1])  # True
# print(myAwesomeList[-3])  # 1

# print(myAwesomeList[1:4])  # ['Two', 'One', 1]
# print(myAwesomeList[:4])  # ['One', 'Two', 'One', 1]
# print(myAwesomeList[1:])  # ['Two', 'One', 1, 100.5, True]

# print(myAwesomeList[::1])  # ['One', 'Two', 'One', 1, 100.5, True]
# print(myAwesomeList[::2])  # ['One', 'One', 100.5]

# print(myAwesomeList)
# myAwesomeList[1] = 2
# myAwesomeList[-1] = False
# myAwesomeList[0:3] = ['A']
# print(myAwesomeList)

# ------------[lists method]
# append()

myFriends = ['Mos3aB', 'Ali', 'Test']
# myOldFriends = ['Mohammed', 'Samah', 'Ali']

# myFriends.append('Alaa')
# myFriends.append(100)
# myFriends.append(130.200)
# myFriends.append(True)
# myFriends.append(myOldFriends)

# print(myFriends)
# print(myFriends[2])
# print(myFriends[6])
# print(myFriends[7])
# print(myFriends[7][2])

# extend()

a = [1, 2, 3, 4]
b = ['A', 'B', 'C']
c = ['One', 'Two']

# a.extend(b)
# print(a)
# a.extend(c)
# print(a)


# remove()

# x = [1, 2, 3, 4, 5, 'Mos3aB', True, 'Mos3aB', 'Mos3aB']
# x.remove('Mos3aB')
# print(x)

# sort()

# y = [1, 2, 100, 120, -10, 17, 29]
# y.sort(reverse=True)
# print(y)
# y = ['A', 'Z', 'C']
# y.sort(reverse=True)
# print(y)

# reverse()

# z = [10, 1, 9, 80, 100, 'Mos3aB', 100]
# z.reverse()
# print(z)

# clear()

# a = [1, 2, 3, 4]
# a.clear()
# print(a)

# copy()

# b = [1, 2, 3, 4]
# c = b.copy()

# print(b)  # Main List
# print(c)  # Copied List

# b.append(5)

# print(b)  # Main List
# print(c)  # Copied List

# count()

# d = [1, 2, 3, 4, 3, 9, 10, 1, 2, 1]
# print(d.count(1))

# index()

# e = ['Mos3aB', 'Ali', 'Test', 'Mohammed', 'Ali', 'Mohammed']
# print(e.index('Mohammed'))

# insert()

# f = [1, 2, 3, 4, 5, 'A', 'B']
# f.insert(0, 'Test')
# f.insert(-1, 'Test')

# print(f)

# pop()

# g = [1, 2, 3, 4, 5, 'A', 'B']
# print(g.pop(-3))


# dicts = [{'name': 'John', 'age': 20}, {
# 'name': 'Doe', 'age': 25}, {'name': 'Jane', 'age': 22}]
# dicts.sort(key=lambda x: x['age'])
# print(dicts)
# dicts.sort(key=lambda a: a['name'])
# print(dicts)
# diffList = ['string', 1.23, 34]
# print(diffList.index(34))
# numbers = list(range(10))
# print(numbers)

# theName = 'blabla'
# nameList = list(theName)
# newName = ''
# for i in nameList:
# if i == 'l':
# continue
# newName += i
# print(newName)
# mat = [
# [1, 2, 3],
# [4, 5, 6],
# [7, 8, 9]
# ]


# for i in mat:
# print(' '.join(map(str, i)))

# ------------[Tuple]----------
# [1] Tuple Items Are Enclosed in Parentheses
# [2] You Can Remove The Parentheses If You Want
# [3] Tuple Are Ordered, To Use Index To Access Item
# [4] Tuple Are Immutable => You Cant Add or Delete
# [5] Tuple Items Is Not Unique
# [6] Tuple Can Have Different Data Types
# [7] Operators Used in Strings and Lists Available In Tuples
# -----------------------------

# Tuple Syntax & Type Test

# myAwesomeTupleOne = ('Mos3aB', 'Ali')
# myAwesomeTupleTwo = 'Mos3aB', 'Ali'

# print(myAwesomeTupleOne)
# print(myAwesomeTupleTwo)

# print(type(myAwesomeTupleOne))
# print(type(myAwesomeTupleTwo))

# Tuple Indexing

# myAwesomeTupleThree = (1, 2, 3, 4, 5)
# print(myAwesomeTupleThree[0])
# print(myAwesomeTupleThree[-1])
# print(myAwesomeTupleThree[-3])

# Tuple Assign Values

# myAwesomeTupleFour = (1, 2, 3, 4, 5)
# myAwesomeTupleFour[2] = 'Three'
# print(myAwesomeTupleFour)  # 'tuple' object does not support item assignment

# Tuple Data

# myAwesomeTupleFive = ('Mos3aB', 'Mos3aB', 1, 2, 3, 100.5, True)
# print(myAwesomeTupleFive[1])
# print(myAwesomeTupleFive[-1])

# Tuple With One Element

# myTuple1 = ('Mos3aB',)
# myTuple2 = 'Mos3aB',

# print(myTuple1)
# print(myTuple2)

# print(type(myTuple1))
# print(type(myTuple2))

# print(len(myTuple1))
# print(len(myTuple2))

# Tuple Concatenation

# a = (1, 2, 3, 4)
# b = (5, 6)

# c = a + b
# print(c)
# d = a + ('A', 'B', True) + b

# print(d)

# Tuple, List, String Repeat (*)

myString = 'Mos3aB'
myList = [1, 2]
myTuple = ('A', 'B')

# print("_" * 30)
# print(myString * 6)
# print(myList * 6)
# print(myTuple * 6)
# print("_" * 30)

# Methods => count()

# a = (1, 3, 7, 8, 2, 6, 5, 8)
# print(a.count(8))

# Methods => index()

# b = (1, 3, 7, 8, 2, 6, 5)
# print('The Position of Index Is: ' + b.index(7))  # Error
# print('The Position of Index Is: {:d}'.format(b.index(7)))
# print(f'The Position of Index Is: {b.index(7)}')

# Tuple Destruct

# a = ('A', 'B', 4, 'C')

# x, y, _, z = a

# print(x)
# print(y)
# print(z)

# ------------[Set]-------------
# [1] Set Item are Enclosed In Curly Braces
# [2] Not Orderd Not Indexed
# [3] Set Indexing and Slicing Can't Be Done
# [4] Set Has Only Imutable Data Types (Numbers, Strings, Tuples) List and Dict Are Not
# [5] Set Items Is Uniqe (Like JS)
# ------------------------------

# Not Ordered And Not Indexed

# mySetOne = {'Mos3aB', 'Ali', 100}
# print(mySetOne)
# print(mySetOne[0])

# Slicing Cant Be Done

# mySetTwo = {1, 2, 3, 4, 5, 6}
# print(mySetTwo[0:3])

# Has Only Immutable Data Types

# mySetThree = {'Mos3aB', 100, 100.5, True, [1, 2, 3]} # unhashable type: 'list'
# mySetThree = {'Mos3aB', 100, 100.5, True, (1, 2, 3)}

# print(mySetThree)

# Items Is Unique

# mySetFour = {1, 2, 'Mos3aB', 'One', 'Mos3aB', 1}
# print(mySetFour)
# ------------[set method]-------------

# clear()
# a = {1, 2, 3}
# a.clear()
# print(a)

# print('-' * 30)  # Separator

# union()  => update
# b = {'one', 'two', 'three'}
# c = {1, 2, 3}
# d = {'software', 'engineering'}
# test = {1, 2, 3}

# print(b | c | d)
# print(c.union(c, d))

# print('-' * 30)  # Separator

# add()
# e = {1, 2, 3, 4}
# e = {'A', 'B', 'C'}
# e.add(5)
# e.add(6)
# print(e)

# print('-' * 30)  # Separator

# remove()
# g = {1, 2, 3, 4}
# g.remove(1)
# g.remove(7)
# print(g)

# print('-' * 30)  # Separator

# discard()
# h = {1, 2, 3, 4}
# h.discard(1)
# h.discard(7)
# print(h)

# print('=' * 30)  # Separator

# pop()
# i = {'A', True, 1, 2, 3, 4, 5}
# print(i.pop())

# print('-' * 30)  # Separator

# update()  => union
# j = {1, 2, 3}
# k = {1, 'A', 'B', 2}
# j.update(['Html', 'Css'])
# j.update(k)
# print(j)

# print('-' * 30)  # Separator

# difference() => Return the difference of two or more sets as a new set.
# a = {1, 2, 3, 'test'}
# b = {1, 2, 'Mos3aB', 'Ali'}
# print(a)
# print(a.difference(b))  # a - b
# print(a)

# print('-' * 30)  # Separator

# difference_update() => Remove all elements of another set from this set.
# c = {1, 2, 3, 'test'}
# d = {1, 2, 'Mos3aB', 'Ahmed'}
# print(c)
# c.difference_update(d)  # c - d
# print(c)

# print('-' * 30)  # Separator

# intersection() => Return the intersection of two sets as a new set.
# e = {1, 2, 'test', 'Mos3aB'}
# f = {'Mos3aB', 'test', 2}
# print(e)
# print(e.intersection(f))  # e & f
# print(e)

# print('-' * 30)  # Separator

# intersection_update() => Update a set with the intersection of itself and another.
# g = {1, 2, 'test', 'Mos3aB'}
# h = {'Mos3aB', 'test', 2}
# print(g)
# g.intersection_update(h)  # g & h
# print(g)

# print('-' * 30)  # Separator

# symmetric_difference() => Return the symmetric difference of two sets as a new set.
# i = {1, 2, 3, 4, 5, 'test'}
# j = {'Mos3aB', 1, 2, 4}
# print(i)
# print(i.symmetric_difference(j))  # i ^ j
# print(i)

# print('-' * 30)  # Separator

# symmetric_difference_update() => Update a set with the symmetric difference of itself and another.
# k = {1, 2, 3, 4, 5, 'test'}
# l = {'Mos3aB', 'Search', 1, 2, 4}
# print(k)
# k.symmetric_difference_update(l)  # k ^ l
# print(k)

# print('-' * 30)  # Separator

# issuperset() => Report whether this set contains another set.
# a = {1, 2, 3, 4}
# b = {1, 2, 3}
# c = {1, 2, 3, 4, 5}

# print(a.issuperset(b))  # True
# print(a.issuperset(c))  # False

# print('-' * 30)

# issubset() => Report whether another set contains this set.
# d = {1, 2, 3, 4}
# e = {1, 2, 3}
# f = {1, 2, 3, 4, 5}

# print(d.issubset(e))  # False
# print(d.issubset(f))  # True

# print('-' * 30)

# isdisjoint() => Return True if two sets have a null intersection.
# g = {1, 2, 3, 4}
# h = {1, 2, 3}
# i = {10, 11, 12}

# print(g.isdisjoint(h))  # False
# print(g.isdisjoint(i))  # True

# print('-' * 30)

# ------------[Dictionary]----
# [1] Dict Items Are Enclosed in Curly Braces
# [2] Dict Items Are Contains Key : Value
# [3] Dict Key Need To Be Immutable => (Number, String, Tuple) List Not Allowed
# [4] Dict Value Can Have Any Data Types
# [5] Dict Key Need To Be Unique
# [6] Dict Is Not Ordered You Access Its Element With Key
# ----------------------------
# user = {
#     'name': 'Mos3aB',
#     'age': 22,
#     'country': 'Egypt',
#     'skills': ['Html', 'Css', 'JS', 'C', 'Python'],
#     'rating': 10.5
# }
# print(user)
# user['name'] = 'ali'
# print(user['country'])
# print(user.get('age'))
# print(user.keys())
# print(user.values())

# # Two-Dimensional Dictionary

# languages = {
#     'One': {
#         'name': 'Html',
#         'progress': '80%'
#     },
#     'Two': {
#         'name': 'Css',
#         'progress': '90%'
#     },
#     'Three': {
#         'name': 'Js',
#         'progress': '90%'
#     }
# }

# print(languages)
# print(languages['One'])
# print(languages['Three']['name'])

# # Dictionary Length

# print(len(languages))
# print(len(languages['Two']))

# # Create Dictionary From Variables

# frameworkOne = {
#     'name': 'Vuejs',
#     'progress': '80%'
# }

# frameworkTwo = {
#     'name': 'ReactJs',
#     'progress': '80%'
# }

# frameworkThree = {
#     'name': 'Angular',
#     'progress': '80%'
# }

# allFramework = {
#     'one': frameworkOne,
#     'two': frameworkTwo,
#     'three': frameworkThree
# }

# print(allFramework)


# # clear()
# user = {
#     'name': 'Mos3aB'
# }
# print(user)
# user.clear()
# print(user)

# print('=' * 30)

# # update()
# member = {
#     'name': 'Mos3aB'
# }
# print(member)
# member['age'] = 22
# print(member)
# member.update({'country': 'Egypt'})
# print(member)

# print('=' * 30)

# # copy()
# main = {
#     'name': 'Mos3aB'
# }

# b = main.copy()
# print(b)
# main.update({'skills': 'Fighting'})
# print(main)
# print(b)

# # keys() + values()
# print(main.keys())
# print(main.values())
# print('=' * 30)

# theUser = {
#     'name': 'ali',
#     'country': 'Egypt'
# }

# # setdefault() => If it not exist it modify it
# print(theUser)
# print(theUser.setdefault('age', 25))
# print(theUser)

# print('=' * 30)

# # popitem() => Return last value modified
# print(theUser.popitem())

# print('=' * 30)

# # items() =>  set-like object providing a view on D's items
# allItems = theUser.items()
# theUser['skills'] = ['html', 'css']
# print(allItems)

# print('=' * 30)

# # fromKeys() => Create a new dictionary with keys from iterable and values set to value.
# keysTuple = ('one', 'two', 'three')
# keysValue = 'test'
# print(dict.fromkeys(keysTuple, keysValue))

# print('=' * 30)


# -------------
# -- Boolean --
# -------------
# [1] In Programming You Need to Known Your If Your Code Output is True Or False
# [2] Boolean Values Are The Two Constant Objects False + True.
# ---------------------------------------------------------------

name = " "
# print(name.isspace())

# print("=" * 50)

# print(100 > 200)
# print(100 > 100)
# print(100 > 90)

# print("=" * 50)

# # True Values

# print(bool("Osama"))
# print(bool(100))
# print(bool(100.95))
# print(bool(True))
# print(bool([1, 2, 3, 4, 5]))

# print("=" * 50)

# False Values

# print(bool(0))
# print(bool(""))
# print(bool(''))
# print(bool([]))
# print(bool(False))
# print(bool(()))
# print(bool({}))
# print(bool(None))
