import mysql.connector

conn = mysql.connector.connect(
    host='localhost',
    user='Mos3aB',
    password='No One 8899..',
    db='main_db'
)

cursor = conn.cursor()

print('-' * 30)
cursor.execute('SHOW DATABASES')
show_db = cursor.fetchall()
print("__| DataBases |__")
for data in show_db:
    print(data)

print('-' * 30)

cursor.execute("SHOW TABLES")
show_tb = cursor.fetchall()
print("__| Tables In main_db |__")
for table in show_tb:
    print(table)

print('-' * 30)
cursor.execute("""
    SELECT * FROM emp_table
    """)
emp_tb = cursor.fetchall()
print("__| Show emp_table |__")
for user in emp_tb:
    print(user)
print('-' * 30)

# ----------------------------------------
# [1] Insert Into Existing Table
# ----------------------------------------
# cursor.execute("INSERT INTO emp_table  VALUES(11, 'Mohamed', 40, 'IT')")

# ----------------------------------------
# [2] Create Table And Insert Into It
# ----------------------------------------

# {1} Create The Table If Not Exists
cursor.execute("""
    CREATE TABLE IF NOT EXISTS mos3ab_team (
        id INT NOT NULL AUTO_INCREMENT ,
        user_name VARCHAR(60) NOT NULL UNIQUE,
        country VARCHAR(3),
        job_title VARCHAR(25),
        age INT,
        salary INT,
        position VARCHAR(25),
        team VARCHAR(25),
        PRIMARY KEY(id)
    )
""")
# {2} Make It Starting Count From 100

cursor.execute("ALTER TABLE mos3ab_team AUTO_INCREMENT=1000")

# {3} Insert Into Table

cursor.execute("""
    INSERT IGNORE INTO 
    mos3ab_team(user_name, country, job_title, age, salary, position, team) VALUES
    ('Mos3aB', 'EGY', 'Software Engineer', 22, 6000, 'Team Leader(SE)', 'head'),
    ('Amira', 'EGY', 'Software Engineer', 24, 4000, 'Team Leader(FE)', 'Mos3aB Team'),
    ('Ahmed', 'KSA', 'Software Engineer', 26, 4000, 'Team Leader(BE)', 'Mos3aB Team'),
    ('Mona', 'UA', 'Front End Developer', 20, 2000, 'Senior FE', 'Amira Team'),
    ('Ali', 'KSA', 'Front End Developer', 23, 1500, 'Junior FE', 'Amira Team'),
    ('Adel', 'US', 'Back End Developer', 29, 2000, 'Senior BE', 'Ahmed Team'),
    ('Sara', 'EGY', 'Back End Developer', 24, 1500, 'Junior BE', 'Ahmed Team')
""")

# {4} Show New Table Team
cursor.execute("SELECT * FROM mos3ab_team")
show_M_tb = cursor.fetchall()
print('__| Mos3aB Team |__')
for eng in show_M_tb:
    print(eng)
print('-' * 30)

conn.commit()
print('Every Things Done (^_^)')
