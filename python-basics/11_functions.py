# ======================
# Python Functions 🧩
# ======================

# ===== Defining a Function ===== #
def greet():
    print("Hello, world!")

greet()  # Call the function

# ===== Function with Parameters ===== #
def greet_person(name):
    print(f"Hello, {name}!")

greet_person("Alice")
greet_person("Bob")

# ===== Function with Return Value ===== #
def add(a, b):
    return a + b

result = add(5, 3)
print("5 + 3 =", result)

# ===== Default Parameters ===== #
def welcome(name="Guest"):
    print(f"Welcome, {name}!")

welcome()          # Uses default
welcome("Daniel")  # Overrides default

# ===== Keyword Arguments ===== #
def full_name(first, last):
    print(f"{first} {last}")

full_name(last="Doe", first="John")  # Using keyword args

# ===== Function Documentation ===== #
def square(n):
    """Returns the square of a number."""
    return n * n

print("Square of 4:", square(4))
print(square.__doc__)
