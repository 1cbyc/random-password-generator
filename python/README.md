# Custom Python Password Generator

In the python/index.html code, I wrote a button that calls the generatePassword() function when clicked. The function sends an AJAX request to a PHP script I named generate_password.php to generate a password using the Python script.

Since I have used an AJAX request to a PHP script, I made sure in the PHP script I used the escapeshellcmd() function to escape any special characters in the command string that could be used for malicious purposes. I went ahead to use the shell_exec() function to execute the generate_password.py script I wrote for the password generator itself with the specific password detail I require, including the length of the password as a command-line argument. Finally, I made sure the script is outputting the generated password to the web page.

This won't run if I did not fix it all in the same directory. I think i have explained how this work the best way I can. Everything here should output a random password that has minimum of a capital letter, lowercase letter, numeric character and a symbol.

<hr>

If you ever decide to use my code, you can adjust the length argument to generate passwords of different lengths to customize it.
