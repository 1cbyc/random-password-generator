function generate_password($length) {
    $lowercase_letters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
    $symbols = '~!@#$%^&*()_+-={}[]|\:;"<>,.?/';
    // you can add or remove symbols as per your requirements
    
    // ensure the password has at least one lowercase letter, one uppercase letter, one digit, and one symbol
    $password = $lowercase_letters[rand(0, 25)] . $uppercase_letters[rand(0, 25)] . $digits[rand(0, 9)] . $symbols[rand(0, 30)];
    
    // fill the rest of the password with random characters
    for ($i = 0; $i < $length - 4; $i++) {
        $password .= $lowercase_letters[rand(0, 25)] . $uppercase_letters[rand(0, 25)] . $digits[rand(0, 9)] . $symbols[rand(0, 30)];
    }
    
    // shuffle the password characters to make it more random
    $password = str_shuffle($password);
    
    return $password;
}
$password = generate_password(12);
echo $password;
