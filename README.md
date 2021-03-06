# Fizz_Buzz_PHP
LEARN PHP
FizzBuzz
FizzBuzz is one of the most commonly used interview questions for applicants to programming positions. Each interviewer has their own variant, but the prompt is usually something like:

Write code that prints the numbers from 1 to 100 (inclusive), except for these cases:
- If a number is a multiple of 3, write "Fizz".
- If a number is a multiple of 5, write "Buzz".
- If a number is a multiple of both 3 and 5, write "FizzBuzz".
Tasks
13/13 Complete
Mark the tasks as complete by checking them off
Use a while loop
1.
There are many ways to solve this problem using PHP. Let’s start by using a while loop to count from 1 to 100.

For now, create a $counter variable to keep track of the number and print it to the screen on each iteration.

Make sure to put a newline before the end of each iteration.

You’ll also need to increment your $counter variable within the code block.


Stuck? Get a hint
2.
Within the loop, establish some if, elseif, else statements to determine what to print at each iteration.

Despite the order that the interviewer introduces the various conditions, you actually need to check for numbers divisible by 15 first. If you check first for divisible by 3, you will print "Fizz" and skip past the elseif check for 15.

Remember to use the modulo operator (%) to check if a number is divisible by another. The modulus is 0 when two numbers are divisible.


Stuck? Get a hint
3.
Move the echo $counter; line inside the correct conditional statement. Remember, we only print the number if none of the other conditions are met.


Stuck? Get a hint
4.
Place statements within the other three conditionals for "FizzBuzz", "Fizz", and "Buzz".

Your code should now print the complete output for FizzBuzz!


Stuck? Get a hint
Use a for and foreach loop
5.
Let’s implement the solution again, but this time we will make use of a for and a foreach loop.

Instead of printing the statements at each step, we will queue them up into an array and print them all out at the end.

Begin by creating an empty array $output to store the statements in.


Stuck? Get a hint
6.
Add a for loop that counts from 1 to 100. Use $i as your loop counter variable.


Stuck? Get a hint
7.
Add conditions within your for loop to determine what to add to the output at each iteration. These should be the same as before, using the modulus (%) operator.


Stuck? Get a hint
8.
Instead of adding echo statements inside each conditional, push the appropriate statement onto the $output array.

You can use the built in function array_push for this.


Stuck? Get a hint
9.
You now have an $output array with the correct print statements, but it’s not formatted very nice. Let’s use a foreach loop to iterate through it and print out the statements.

Create a foreach loop that iterates through $output. Use $value for the variable at each position in the array.


Stuck? Get a hint
10.
Print the $value at each loop iteration followed by a newline.

This should match the output from the while loop implementation.


Stuck? Get a hint
Break and continue
11.
Having the output stored in an array is nice since we can re-print the same output but add new conditions.

Create a copy of the previous foreach loop that iterates over $output.


Stuck? Get a hint
12.
The interviewer has asked that now you avoid printing anything when a number is divisible by 3 ("Fizz").

Add an if and a continue statement to avoid printing anything when the $value is "Fizz".

When you scroll to the bottom, your last output should only have numbers, "Buzz", and "FizzBuzz".


Stuck? Get a hint
13.
As a final step, the interviewer has asked that now you stop printing values after the first "FizzBuzz".

Add an elseif statement to your conditional. Within it, it should print the $value and exit from the loop.
