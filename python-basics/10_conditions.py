# ================================
# Python Conditional Statements 🧠
# ================================

# ===== if, elif, else ===== #
age = 18

if age < 13:
    print("You are a child.")
elif age < 20:
    print("You are a teenager.")
else:
    print("You are an adult.")

# ===== Comparison Operators ===== #
a = 10
b = 20

print("a == b:", a == b)  # False
print("a != b:", a != b)  # True
print("a < b:", a < b)    # True
print("a >= b:", a >= b)  # False

# ===== Logical Operators ===== #
is_student = True
has_id = False

if is_student and has_id:
    print("Entry allowed")
else:
    print("Entry denied")

# Using 'or'
if is_student or has_id:
    print("Partial access granted")

# Using 'not'
if not has_id:
    print("Please bring your ID.")
