# ----------------------------------------------------------
# -- Object Oriented Programming => Class Syntax and Info --
# ----------------------------------------------------------
# [01] Class is The Blueprint Or Construtor Of The Object
# [02] Class Instantiate Means Create Instance of A Class
# [03] Instance => Object Created From Class And Have Their Methods and Attributes
# [04] Class Defined With Keyword class
# [05] Class Name Written With PascalCase [UpperCamelCase] Style
# [06] Class May Contains Methods and Attributes
# [07] When Creating Object Python Look For The Built In __init__ Method
# [08] __init__ Method Called Every Time You Create Object From Class
# [09] __init__ Method Is Initialize The Data For The Object
# [10] Any Method With Two Underscore in The Start and End Called Dunder or Magic Method
# [11] self Refer To The Current Instance Created From The Class And Must Be First Param
# [12] self Can Be Named Anything
# [13] In Python You Dont Need To Call new() Keyword To Create Object
# -------------------------------------------------------------------

# Syntax
# class Name:
#     Constructor => Do Instantiation [ Create Instance From A Class ]
#     Each Instance Is Separate Object
#     def __init__(self, other_data)
#         Body Of Function


# --------------------------------------------------------------------
# -- Object Oriented Programming => Instance Attributes and Methods --
# --------------------------------------------------------------------
# Self: Point To Instance Created From Class
# Instance Attributes: Instance Attributes Defined Inside The Constructor
# -----------------------------------------------------------------------
# Instance Methods: Take Self Parameter Which Point To Instance Created From Class
# Instance Methods Can Have More Than One Parameter Like Any Function
# Instance Methods Can Freely Access Attributes And Methods On The Same Object
# Instance Methods Can Access The Class Itself
# -----------------------------------------------------------

# -------------------------------------------------------------------
# -- Object Oriented Programming => Class Methods & Static Methods --
# -------------------------------------------------------------------
# Class Methods:
# - Marked With @classmethod Decorator To Flag It As Class Method
# - It Take Cls Parameter Not Self To Point To The Class not The Instance
# - It Doesn't Require Creation of a Class Instance
# - Used When You Want To Do Something With The Class Itself
# Static Methods:
# - It Takes No Parameters
# - Its Bound To The Class Not Instance
# - Used When Doing Something Doesnt Have Access To Object Or Class But Related To Class
# -----------------------------------------------------------

class Member:
    not_allowed_names = ["Hell", "Shit"]
    users_num = 0

    @classmethod
    def show_users_count(cls):
        return f"We Have {cls.users_num} In Our System (^-^)"

    @staticmethod
    def print_class_msg():
        return f'Hello To Our System (^-^)'

    def __init__(self, f_name, l_name, age, country, gender, job_title):
        self.f_name = f_name
        self.l_name = l_name
        self.age = age
        self.country = country
        self.gender = gender
        self.job_title = job_title
        Member.users_num += 1

    def full_name(self):
        if self.f_name in Member.not_allowed_names:
            raise ValueError(f"{self.f_name} Not Allowed Name")
        if self.l_name in Member.not_allowed_names:
            raise ValueError(f"{self.l_name} Not Allowed Name")
        else:
            return f"{self.f_name} {self.l_name}"

    def f_name_with_title(self):
        if self.gender == "Male":
            return f"Hello Mr {self.f_name}"
        elif self.gender == "Female":
            return f"Hello Miss {self.f_name}"

    def full_user_info(self):
        return f"{self.f_name_with_title()}, Your Full Name Is: {self.full_name()}, And Your Age Is: {self.age}, And You Work As {self.job_title}"

    def delete_user(self):
        Member.users_num -= 1
        return f"{self.f_name} Is Deleted."


print(Member.users_num)
member_one = Member("Mos3aB", "Abdelkawy", 22, "Egypt",
                    "Male", "Software Engineer")
member_two = Member("Sara", "Mohammed", 30, 'Egypt',
                    "Female", "Software Engineer")
member_three = Member('Hell', "Shit", 33, 'zeft', 'ds', 'sf')
member_four = Member("Mohammed", "Ahmed", 25, "US", "Male", "Graphic Designer")

print(Member.users_num)

print(member_one.f_name, member_one.l_name, member_one.age, member_one.country)
print(member_two.f_name, member_two.l_name, member_two.age, member_two.country)
# print(dir(member_one))
print(member_one.full_name())
print(member_one.f_name_with_title())
print(member_two.f_name_with_title())
print(member_one.full_user_info())
print(member_two.full_user_info())
print(member_four.full_user_info())

# print(dir(Member))
# print(member_three.full_user_info())
print(member_three.delete_user())

print(Member.users_num)

print(Member.show_users_count())
print(Member.print_class_msg())

print(Member.full_name(member_one))  # It's Equal To =>
print(member_one.full_name())


# --------------------------------------------------
# -- Object Oriented Programming => Magic Methods --
# --------------------------------------------------
# Everything in Python is An Object
# __init__       Called Automatically When Instantiating Class
# self.__class__ The class to which a class instance belongs
# __str__        Gives a Human-Readable Output of the Object
# __len__        Returns the Length of the Container
#                Called When We Use the Built-in len() Function on the Object
# __del__        Instance method called when an instance is deleted
# __doc__        Prints the documentation of an object
# ------------------------------------------------------

class Skill:
    """This Is Skills Class"""

    def __init__(self):
        self.my_skills = ["Html", "Css", "Js"]

    def __str__(self):
        return f"This Is My Skills => {self.my_skills}"

    def __len__(self):
        return len(self.my_skills)

    def __del__(self):
        print("Instance Is Deleted")


profile = Skill()
print(profile)
print(len(profile))

profile.my_skills.append("C")
profile.my_skills.append("Python")

print(profile)
print(len(profile))

print(Skill.__doc__)
print(profile.__doc__)

del profile


# my_string = "Mos3aB"
# print(my_string.__class__)
# # print(dir(str))
# print(my_string.upper())
# print(str.upper(my_string))


# --------------------------------------
# ----------[Getter And Setter]
# -------------------------------------

class User:
    def __init__(self, name):
        self.__name = name  # Privite

    def get_name(self):  # getter
        return self.__name

    def set_name(self, new_name):  # setter
        self.__name = new_name


user_one = User("Mos3aB")

print(user_one.get_name())
# print(user_one._User__name)

user_one.set_name("Elazazi")
print(user_one.get_name())


class Rectangle:
    """Representation of a rectangle"""


# ------------------------------------------------
# -- Object Oriented Programming => Inheritance --
# ------------------------------------------------


class Food:
    def __init__(self, food_name, price):
        self.food_name = food_name
        self.price = price
        print(f"{self.food_name} From The Main Class, And The Price Is {self.price}")

    def eat(self):
        print("This Is Eat From Main Class")


class Apple(Food):
    def __init__(self, food_name, drink, price):

        # Food.__init__(self, food_name)
        super().__init__(food_name, price)
        self.drink = drink
        print(
            f"Your Order Is {self.food_name}, And Your Drink Is {self.drink}, Total Price Is {self.price}")

    def juice(self, drink):
        self.drink = drink
        print(f"{self.drink}, This Is Your Drink")

    def eat(self):  # This Make Override Of The Main Method
        print("This Is Eat From Child Class")


food_one = Food("Pizza", 100)
food_two = Apple("Pasta", "Lemon", 250)

food_two.eat()
food_two.juice("Blue Berry")

# ---------------------------------------------------------
# -- Object Oriented Programming => Multiple Inheritance --
# ---------------------------------------------------------


class BaseOne:
    def __init__(self):
        print("Base One")

    def func_one(self):
        print("One")


class BaseTwo:
    def __init__(self):
        print("Base Two")

    def func_two(self):
        print("Two")


class Derived(BaseOne, BaseTwo):
    pass


testOne = Derived()
print(testOne.func_one)
print(testOne.func_two)
testOne.func_one()
testOne.func_two()
print(Derived.mro())  # Return a type's method resolution order.


class Base:
    def __init__(self):
        print("This Is Base")

    def func_from_base(self):
        print("You Can Access All Methods On The Base Class")


class DerivedOne(Base):
    pass


class DerivedTwo(DerivedOne):
    pass


baseTest = DerivedTwo()
baseTest.func_from_base()
