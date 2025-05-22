# ==============================
# Python Strings 🧵
# ==============================

# Creating a string
name = "Alice"
greeting = "Hello"

# String concatenation
message = greeting + ", " + name + "!"
print("Message:", message)

# f-strings (formatted strings)
age = 25
print(f"{name} is {age} years old.")

# String methods
text = "  Python Programming  "
print("Original:", text)
print("Lowercase:", text.lower())
print("Uppercase:", text.upper())
print("Stripped:", text.strip())  # removes whitespace
print("Replaced:", text.replace("Python", "Java"))
print("Split:", text.split())     # splits by spaces

# Indexing and slicing
word = "Programming"
print("First letter:", word[0])
print("Last letter:", word[-1])
print("First 6 letters:", word[:6])
print("From 6 to end:", word[6:])

# Checking substrings
print("gram" in word)    # True
print("java" in word)    # False
