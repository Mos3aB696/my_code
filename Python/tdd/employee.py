class Employee:
    bonus = 0.04
    unvalidation_names = ['Hell', 'Shit']

    def __init__(self, f_name, l_name, salary):
        self.f_name = f_name
        self.l_name = l_name
        self.salary = salary

    @property
    def f_name_validation(self):
        self.check_validation()
        return self.f_name

    @property
    def l_name_validation(self):
        self.check_validation()
        return self.l_name

    @property
    def email(self):
        self.check_validation()
        return "{}_{}@gmail.com".format(self.f_name, self.l_name)

    @property
    def employee_full_name(self):
        self.check_validation()
        return f"{self.f_name} {self.l_name}"

    @property
    def apply_bonus(self):
        self.salary = int(self.salary * self.bonus)
        return self.salary

    @property
    def display_info(self):
        self.check_validation()
        bonus_amount = self.salary * self.bonus
#         return f"""
# Your Name Is: {self.f_name} {self.l_name}
# Your Email Is: {self.email}
# Your Salary Is: {self.salary}, and Bonus Amount Is {bonus_amount}
# Your Salary After Adding Bonus {self.apply_bonus}
# """
        print(f"Your Name Is: {self.employee_full_name}")
        print(f"Your Email Is: {self.email}")
        print(
            f"Your Salary Is: {self.salary}, and Bouns Amount Is {bonus_amount}")
        print(f"Your Salary After Adding Bouns Is: {self.apply_bonus}")

    def check_validation(self):
        if type(self.f_name) is not str or type(self.l_name) is not str:
            raise TypeError("Your Name Should Be String")
        elif self.f_name in Employee.unvalidation_names:
            raise NameError(
                "You Should Not Use This Name {}".format(self.f_name))
        elif self.l_name in Employee.unvalidation_names:
            raise NameError(
                "You Should Not Use This Name {}".format(self.l_name))


user_one = Employee("ls", "BlaBla", 2300)
user_two = Employee("BlaBla", "BlaBla", 2300)

print(user_one.email)
print("_" * 50)
user_two.display_info
