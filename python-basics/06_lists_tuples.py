# ================================
# Python Lists and Tuples 📚
# ================================

# ======= LISTS ======= #
# A list is an ordered, changeable collection.

fruits = ["apple", "banana", "cherry"]
print("Fruits:", fruits)

# Accessing items
print("First fruit:", fruits[0])

# Modifying a list
fruits[1] = "blueberry"
print("Modified Fruits:", fruits)

# Adding items
fruits.append("orange")
print("After append:", fruits)

# Removing items
fruits.remove("cherry")
print("After remove:", fruits)

# List length
print("Number of fruits:", len(fruits))

# Looping through a list
for fruit in fruits:
    print("Fruit:", fruit)

# ======= TUPLES ======= #
# A tuple is an ordered, unchangeable collection.

coordinates = (10.5, 20.3)
print("Coordinates:", coordinates)

# Accessing tuple items
print("X coordinate:", coordinates[0])

# Tuples are immutable (can't change values)
# coordinates[0] = 15  # ❌ This will cause an error
