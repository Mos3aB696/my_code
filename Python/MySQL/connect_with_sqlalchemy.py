from sqlalchemy import create_engine, Column, String, Integer, CHAR
from sqlalchemy.orm import sessionmaker, declarative_base
from sqlalchemy.exc import IntegrityError

Base = declarative_base()


class Person(Base):
    __tablename__ = "people"

    id = Column("id", Integer, primary_key=True, autoincrement=True)
    user_name = Column("user_name", String(25), unique=True)
    age = Column("age", Integer)
    job_title = Column("job_title", String(25))
    gender = Column("gender", CHAR)

    def __init__(self, user_name, age, job_title, gender):
        self.user_name = user_name
        self.age = age
        self.job_title = job_title
        self.gender = gender

    def __repr__(self):
        return f"""Your ID:{self.id}, User_Name: {self.user_name},Your Age: {self.age}, Job_Title: {self.job_title}, Gender: {self.gender}"""


engine = create_engine(
    "mysql+pymysql://root:Mos3aB_root@localhost/main_db", echo=True)
# engine = create_engine(
#     "sqlite:///mydb.db", echo=True)

Base.metadata.create_all(bind=engine)

Session = sessionmaker(bind=engine)
session = Session()


p1 = Person("Mos3aB", 22, "Software Engineer", "M")
p2 = Person("Amira", 24, "Software Engineer", "F")
p3 = Person("Ali", 26, "Front End", "M")
p4 = Person("Systemctl", 24, "Back End", "F")
p5 = Person("Shahd", 22, "IT", "M")
p6 = Person("Fayz", 24, "Designer", "F")
p7 = Person("Abdullah", 26, "Doctor", "M")
p8 = Person("Systemctl", 24, "Translator", "F")
p9 = Person("Mohamed", 24, "Translator", "M")

# {1} To Make
persons = [p1, p2, p3, p4, p5, p6, p7, p8, p9]


try:
    # session.add(p1)
    # session.add(p2)
    # session.add(p3)
    # session.add(p4)
    # session.add(p5)
    # session.add(p6)
    # session.add(p7)
    # session.add(p8)
    for person in persons:
        ex_person = session.query(Person).filter_by(
            user_name=person.user_name).first()
        if ex_person is None:
            session.add(person)
    session.commit()
except IntegrityError:
    session.rollback()
finally:
    session.close()


res = session.query(Person).filter(Person.age < 25)
for r in res:
    print(r)
