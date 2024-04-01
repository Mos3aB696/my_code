# -- Function => lambda ---------
# -- Anonymous Function ---------
# [1] It Has No Name
# [2] You Can Call It Inline Without Defining It
# [3] You Can Use It In Return Data From Another Function
# [4] Lambda Used For Simple Functions and Def Handle The Large Tasks
# [5] Lambda is One Single Expression not Block Of Code
# [6] Lambda Type is Function
# -------------------------------

def say_hello(name, age):
    return f"Hello {name} your Age Is: {age}"


def hello(name, age): return f"Hello {name} your Age Is: {age}"


print(say_hello("Mos3aB", 22))
print(hello("Mos3aB", 22))

print(say_hello.__name__)
print(hello.__name__)

print(type(hello))
