# =======================
# Python Modules 📦
# =======================

# A module is a file containing Python code (functions, variables, classes)
# You can import built-in modules or your own custom ones

# ===== Importing a built-in module ===== #
import math

print("Square root of 16:", math.sqrt(16))
print("Pi value:", math.pi)

# ===== Importing specific functions ===== #
from datetime import datetime

now = datetime.now()
print("Current date and time:", now)

# ===== Creating and importing your own module ===== #
# Let's say you have a file called `mymodule.py`:
# def say_hello(name):
#     return f"Hello, {name}!"

# You can import and use it like this:
# import mymodule
# print(mymodule.say_hello("Alice"))

# ===== Using alias for modules ===== #
import random as rnd

print("Random number between 1 and 10:", rnd.randint(1, 10))
