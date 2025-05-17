# ===============================
# Python Control Flow (If/Else) 🔀
# ===============================

# 1. Simple if statement
age = 18
if age >= 18:
    print("You are an adult.")

# 2. if...else statement
temperature = 25
if temperature > 30:
    print("It's hot outside.")
else:
    print("The weather is nice.")

# 3. if...elif...else chain
marks = 72
if marks >= 90:
    print("Grade: A")
elif marks >= 75:
    print("Grade: B")
elif marks >= 60:
    print("Grade: C")
else:
    print("Grade: D or F")

# 4. Nested if
number = 5
if number > 0:
    if number % 2 == 0:
        print("Positive even number")
    else:
        print("Positive odd number")
else:
    print("Not a positive number")
