# ================================
# Python Dictionaries and Sets 📖🧺
# ================================

# ======= DICTIONARIES ======= #
# Dictionaries store data in key-value pairs

person = {
    "name": "Alice",
    "age": 25,
    "is_student": True
}
print("Person:", person)

# Accessing values
print("Name:", person["name"])

# Adding a new key-value pair
person["course"] = "Python"
print("Updated person:", person)

# Modifying values
person["age"] = 26

# Loop through dictionary
for key, value in person.items():
    print(f"{key}: {value}")

# Removing a key
del person["is_student"]
print("After deletion:", person)

# ======= SETS ======= #
# Sets store unique values, no duplicates allowed

numbers = {1, 2, 3, 4, 4, 2}
print("Numbers set:", numbers)  # Duplicates removed

# Add an element
numbers.add(5)
print("After adding 5:", numbers)

# Remove an element
numbers.discard(2)
print("After discarding 2:", numbers)

# Set operations
evens = {2, 4, 6}
odds = {1, 3, 5}
print("Union:", evens.union(odds))
print("Intersection:", evens.intersection(numbers))
