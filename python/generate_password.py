import random
import string

def generate_password(length):
    lowercase_letters = string.ascii_lowercase
    uppercase_letters = string.ascii_uppercase
    digits = string.digits
    symbols = string.punctuation.replace("'", "").replace('"', '')
    # remove single and double quotes since they can cause issues with SQL injections, etc.
    
    # ensure the password has at least one lowercase letter, one uppercase letter, one digit, and one symbol
    password = [random.choice(lowercase_letters),
                random.choice(uppercase_letters),
                random.choice(digits),
                random.choice(symbols)]
    
    # fill the rest of the password with random characters
    for i in range(length - 4):
        password.append(random.choice(lowercase_letters + uppercase_letters + digits + symbols))
    
    # shuffle the password characters to make it more random
    random.shuffle(password)
    
    # convert the password characters to a string and return it
    return ''.join(password)
