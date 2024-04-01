import pywhatkit
import pyautogui
import time


# time.sleep(5)
# pywhatkit.sendwhatmsg(
#     '+201090481796', "I'm Happy, because I know You (^-^)", 16,4)

for count in range(10):
    pyautogui.write(f"{count} How Are You")
    pyautogui.press("enter")
