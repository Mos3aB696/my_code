import unittest
from employee import Employee


class TestEmployeeValidation(unittest.TestCase):
    def test_first_name_validation(self):
        employeeOne = Employee('mosaab', 'abdelkader', 40000)
        # employeeTwo = Employee('Hell', 'ahmed', 40300)
        # employeeThree = Employee(22, 'ahmed', 40300)

        self.assertEqual(employeeOne.f_name_validation, 'mosaab')
        # self.assertEqual(employeeTwo.f_name_validation, 'Hell')
        # self.assertEqual(employeeThree.f_name_validation, 22)

    def test_last_name_validation(self):
        employeeOne = Employee('mosaab', 'abdelkader', 40000)
        # employeeTwo = Employee('test', 'Hell', 40300)
        # employeeThree = Employee("Ali", 22, 40300)

        self.assertEqual(employeeOne.l_name_validation, 'abdelkader')
        # self.assertEqual(employeeTwo.l_name_validation, 'Hell')
        # self.assertEqual(employeeThree.l_name_validation, 22)

    def test_email(self):
        employeeOne = Employee('mosaab', 'abdelkader', 40000)
        # employeeTwo = Employee('no', 'Hell', 40300)
        # employeeThree = Employee('ali', 22, 40300)
        # employeeFour = Employee(22, 'ali', 40300)

        self.assertEqual(employeeOne.email, "mosaab_abdelkader@gmail.com")
        # self.assertEqual(employeeTwo.email, "no_Hell@gmail.com")
        # self.assertEqual(employeeThree.email)
        # self.assertEqual(employeeFour.email)

    def test_employee_full_name(self):
        employeeOne = Employee('mosaab', 'abdelkader', 40000)
        # employeeTwo = Employee('Hell', 'ali', 40300)
        employeeThree = Employee(22, 'ahmed', 40300)
        
        self.assertEqual(employeeOne.employee_full_name, 'mosaab abdelkader')
        # self.assertEqual(employeeTwo.employee_full_name)
        self.assertEqual(employeeThree.employee_full_name)
