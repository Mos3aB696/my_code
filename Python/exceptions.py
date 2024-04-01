# ----------------[Errors And Exceptions Raising]
# [1] Exceptions is a runtime error reporting mechanism
# [2] Exceptions gives you the message to understad the problem
# [3] Traceback Gives You The Line To Look For The Code in This Line
# [4] Exceptions List https://docs.python.org/3/library/exceptions.html
# [5] raise Keyword Used To Rasise Your Own Exceptions
# [6] Exceptions Have Types (SyntaxError, IndexError, KeyError, Etc..)
# -----------------------------------------------
age = 19

# if age < 20:
#     raise Exception(f"Your age is {age} and must be more than 20")
# else:
#     print(f"Your age is {age} and welcome to our website")

# print("After the condition")

name = "Mos3aB"
age = 18

# if type(name) != str:
#     raise ValueError(
#         f"Your input is {name} and must be a string not {type(name)}")
# elif type(age) != int:
#     raise ValueError(f"Your age must be int, your input is {age}")
# elif age < 20:
#     raise Exception(f"Your age is {age}. Allowed ages starts from 20")
# else:
#     print(f"Welcome {name} to our website. Your age is {age}")


# -------------------[Exceptions Handling]
# -- Try | Except | Else | Finally --
# -----------------------------------
# Try     => Test The Code For Errors
# Except  => Handle The Errors
# -----------------------------------
# Else    => If No Errors
# Finally => Run The Code Whatever Happens

# try:
#     int(input("Print Your Age: "))
# except:
#     print('Bad, your input must be int')
# else:
#     print("Good, Your input is int")
# finally:
#     print("Print From Finally Whatever Happens")


# try:
#     # print(10 / 0)
#     # print(x)
#     print(int("Hello"))
# except ZeroDivisionError:
#     print("Please Enter Your Correct Name! (^-^)")
# except NameError:
#     print("Identifer Not Found")
# except ValueError:
#     print("Please, Enter Integer Value")
# except:
#     print("Error Happens (For Another Errors)")

# Exception if a condition occurs

num = -2
if num < 0:
    raise Exception("Number below zero")

name = 2
if not type(name) is str:
    raise Exception("print error")
