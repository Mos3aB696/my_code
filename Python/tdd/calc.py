def add(a, b):
    """Add Function"""
    return a + b


def sub(a, b):
    """Substation Function"""
    return a - b


def testing(name):
    """Function test"""
    print(f"your name is {name}")


testing("Mos3aB")


def div(a, b):
    """Division Function"""
    if b == 0:
        raise ZeroDivisionError("Can't Pass 0 As Second Arg")
    return a / b


def mul(a, b):
    """Multiplication Function"""
    return a * b


def mod(a, b):
    """Mod Function"""
    return a % b
