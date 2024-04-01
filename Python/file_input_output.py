# -------------------
# -- File Handling --
# -------------------
# "a" Append  Open File For Appending Values, Create File If Not Exists
# "r" Read    [Default Value] Open File For Read and Give Error If File is Not Exists
# "w" Write   Open File For Writing, Create File If Not Exists
# "x" Create  Create File, Give Error If File Exists
# --------------------------------------------------

import os

# Current Working Directory [Depending On Which Directory You In (Current Path In Terminal)]
# print(os.getcwd())

# Return an absolute path. (For This File)
# print(os.path.abspath(__file__))

# Returns the directory component of a pathname
# print(os.path.dirname(os.path.abspath(__file__)))


# -------------------------------
# -- File Handling => Read File--
# -------------------------------

# file = open("text.txt", "r")
# # print(file)
# print(file.read())
# print(file.read(5))
# print(file.readline(10))
# print(file.readline())
# print(file.readline())
# print(file.readlines())
# print(type(file.readlines()))
# for line in file:
#     print(line)

#     if line.startswith("With"):
#         break

# file.close()


# -------------------------------------------
# -- File Handling => Write And Append File--
# -------------------------------------------

# If File Not Exist "W" Will Create It And Make Override On It
fileOne = open("textOne.txt", "w")
fileOne.write("Hello World\n")
fileOne.write("Js And Python Are Awesome\n")
fileOne.write("I Love Programming")


fileTwo = open("fun.txt", "w")
fileTwo.write("Mos3aB Elazazi\n" * 18)

fileOne.writelines(["\nMos3aB\n", "Ali\n", "Ibrahim\n"])

# # If File Not Exist "a" Will Create It And Don't Make Override On It But Append The New Elements
# fileThree = open("textTwo.txt", "a")
# fileThree.write("I'm Here (^-^)\n")
# print(fileThree.tell())

myFile = open("test.txt", "a")
myFile.write("Hello World")
myFile.truncate(5)

myFile = open("test.txt", "a")
print(myFile.tell())

myFile = open("test.txt", "r")
myFile.seek(2)
print(myFile.read())

os.remove("test.txt")
