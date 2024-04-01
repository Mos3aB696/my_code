import getpass
from fabric import Connection, Config

# password = getpass.getpass('Enter your root password: ')

# config = Config(overrides={'sudo': {'password': password}})

conn = Connection("52.3.244.199", user="ubuntu")  # , config=config)


conn.run("ls -la", hide=True)

conn.run("pwd")

with conn.cd("/mnt"):
    conn.run("sudo touch test.txt task.py")
    conn.run("pwd")

# conn.sudo("apt update")
# conn.sudo("apt upgrade -y")
# conn.sudo("apt install neofetch -y")

conn.run("neofetch")
# conn.sudo("apt install net-tools ")
conn.run("ifconfig")
