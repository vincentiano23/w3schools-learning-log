# ============================
# Python Functions 🧮
# ============================

# 1. Defining a simple function
def greet():
    print("Hello, welcome to Python!")

greet()  # Call the function

# 2. Function with parameters
def greet_user(name):
    print(f"Hello, {name}!")

greet_user("Alice")

# 3. Function that returns a value
def add(a, b):
    return a + b

result = add(5, 3)
print("Sum:", result)

# 4. Function with default parameter
def greet_language(name="friend", language="Python"):
    print(f"Hello {name}, welcome to {language}!")

greet_language()
greet_language("Bob", "JavaScript")

# 5. Using *args (variable number of arguments)
def total_sum(*numbers):
    return sum(numbers)

print("Total:", total_sum(1, 2, 3, 4))

# 6. Using **kwargs (keyword arguments)
def show_details(**info):
    for key, value in info.items():
        print(f"{key}: {value}")

show_details(name="Alice", age=25, course="Python")
