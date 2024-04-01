from datetime import datetime

# print(dir(datetime))

# Print The Current Date And Time
print(f"Current Date And Time: {datetime.now()}")

# Print The Current Year
print(f"The Current Year: {datetime.now().year}")

# Print The Current Month
print(f"The Current Month: {datetime.now().month}")

# Print The Current Day
print(f"The Current Day: {datetime.now().day}")

# Show All Method Inside now()
# print(dir(datetime.now()))

# Show All Method Inside time()
# print(dir(datetime.now().time()))

# Print The Current Time
print(datetime.now().time())

# Print Only Hour
print(datetime.now().time().hour)

# Print Only Minute
print(datetime.now().time().minute)

# Print Only Second
print(datetime.now().time().second)

# Calc BirthDay
birthDay = datetime(2001, 5, 3)
dateNow = datetime.now()

print(f"My Birthday: {birthDay}")
print(f"Date Now: {dateNow}")

print(f"I Lived {dateNow - birthDay}")
print(f"I Lived {(dateNow - birthDay).days} Days")

# Print The String Format Time
# https://strftime.org/ => To Get More Info
# print(dir(datetime))
print(birthDay.strftime("%B"))
print(birthDay.strftime("%b"))
print(birthDay.strftime("%A"))
print(birthDay.strftime("%a"))
print(birthDay.strftime("%m"))

print("I Bornt On {}".format(birthDay.strftime("%d %b %Y")))
