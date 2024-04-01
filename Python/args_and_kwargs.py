# ----------------------
# --- Args && Kwargs ---
# ----------------------
# *args  => Allows You To Pass Multiple Non-Key Arguments  => Type Is Tuple
# **Kwargs  => Allows You To Pass Multiple Key-Arguments => Type Is dictionary


def add(*args):
    # print(type(args))
    total = 0
    for arg in args:
        total += arg
    return total


# print(add(1, 2, 3, 4, 5, 5, 6))
# print(add(1))
# print(add(1, -2))


def display_name(*args):
    for arg in args:
        print(arg, end=' ')
    print('')


# display_name("Mos3aB", "Abdelkader", "Elsayed")


def print_address(**kwargs):
    print(type(kwargs))
    # for val in kwargs.values():
    #     print(val)
    # for key in kwargs.keys():
    #     print(key)
    for key, val in kwargs.items():
        print(f"{key}: {val}")


# print_address(street="BlaBla",
#               city="Cairo",
#               apt="100",
#               status="BlaBlaBla",
#               zip="54321")


def all_info(*args, **kwargs):
    print(type(args), type(kwargs))
    for arg in args:
        print(arg, end=' ')
    print()
    # for val in kwargs.values():
    #     print(val, end=" ")
    # print()
    # for key, val in kwargs.items():
    #     print(f"{key}: {val}")
    if 'zip' in kwargs:
        print(f"{kwargs.get('city')}, {kwargs.get('zip')}")
    else:
        print(f"{kwargs.get('city')}")
    if 'phone' in kwargs:
        print(f"{kwargs.get('job_title')}, {kwargs.get('phone')}")
    else:
        print(f"{kwargs.get('job_title')}")


all_info("Eng:", "Mos3aB", "Abdelkader", "Elsayed",
         city="Cairo",
         zip="54321",
         job_title="Software Engineer",
         phone='01061972067',
         test='test'
         )
