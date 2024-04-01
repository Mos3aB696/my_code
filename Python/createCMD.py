import cmd

# print(dir(cmd.Cmd))


class MyClass(cmd.Cmd):
    prompt = "(theCMD) > "

    def do_quit(self, arg):
        """This Is For Quiting The Terminal"""
        print("See You Next Time (^-^)")
        return True

    def do_great(self, arg):
        """Print The Greating To The User"""
        if arg:
            print("Hello {}".format(arg))
        else:
            print("Hello")

    # aliasing
    do_exit = do_quit

    def do_EOF(self, arg):
        """End Of File Enabling When User Press (CTRL + D) Or (CTRL + C) Depending On User Enviroment"""
        return True

if __name__ == "__main__":
    MyClass().cmdloop(intro='Write Your Command Here')
# print(dir(cmd.Cmd))
