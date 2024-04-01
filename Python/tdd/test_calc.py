import calc
import unittest


class TestCalc(unittest.TestCase):
    def test_add(self):
        self.assertEqual(calc.add(4, 2), 6)
        self.assertNotEqual(calc.add(5, 3), 7)
        self.assertEqual(calc.add(-39, 2), -37)
        self.assertEqual(calc.add(-39, -2), -41)

    def test_sub(self):
        self.assertEqual(calc.sub(4, 2), 2)
        self.assertEqual(calc.sub(-1, 2), -3)
        self.assertEqual(calc.sub(-39, -2), -37)

    def test_div(self):
        self.assertEqual(calc.div(4, 2), 2)
        self.assertEqual(calc.div(-50, 2), -25)
        self.assertEqual(calc.div(40, 2), 20)
        self.assertEqual(calc.div(5, 2), 2.5)
        self.assertEqual(calc.div(0, 5), 0)
        # self.assertEqual(calc.div(5, 0), 0)
        self.assertRaises(ZeroDivisionError, calc.div, 10, 0)

    def test_mul(self):
        self.assertEqual(calc.mul(4, 2), 8)
        self.assertEqual(calc.mul(-1, 2), -2)
        self.assertEqual(calc.mul(-2, -2), 4)
        self.assertNotEqual(calc.mul(2, 2), 3)

    def test_mod(self):
        self.assertEqual(calc.mod(2, 2), 0)
        self.assertEqual(calc.mod(5, 2), 1)
        self.assertEqual(calc.mod(10, 2), 0)
        self.assertNotEqual(calc.mod(10, 2), 1)
