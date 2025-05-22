# =====================
# Python Loops 🔁
# =====================

# ===== FOR LOOP ===== #
# Used to iterate over a sequence (like a list, tuple, string)

print("For loop over a list:")
fruits = ["apple", "banana", "cherry"]
for fruit in fruits:
    print(fruit)

print("\nFor loop with range():")
for i in range(5):  # 0 to 4
    print("Number:", i)

print("\nNested for loop:")
for i in range(1, 4):
    for j in range(1, 4):
        print(f"{i} x {j} = {i * j}")

# ===== WHILE LOOP ===== #
# Repeats as long as a condition is True

print("\nWhile loop:")
count = 0
while count < 3:
    print("Count:", count)
    count += 1

# ===== BREAK and CONTINUE ===== #
print("\nUsing break and continue:")
for i in range(5):
    if i == 3:
        break  # Exit loop when i == 3
    if i == 1:
        continue  # Skip the rest of the loop when i == 1
    print("Value:", i)
