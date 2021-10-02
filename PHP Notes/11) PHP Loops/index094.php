<!DOCTYPE html>
<html>
<body>

<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

</body>
</html>





<!-- -->
<!-- -->
<!--

PHP Loops :

do while Loop

-->
<!-- -->
<!--

The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

-->
<!-- -->
<!--

PHP Loops:

Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

Loops are used to execute the same block of code again and again, as long as a certain condition is true.








In PHP, we have the following loop types:


while - loops through a block of code as long as the specified condition is true

do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true

for - loops through a block of code a specified number of times

foreach - loops through a block of code for each element in an array






The following chapters will explain and give examples of each loop type.

-->
<!-- -->
<!-- -->
<!-- -->
<!--

The PHP do...while Loop :

The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.






Syntax :


do {
  code to be executed;
} while (condition is true);

-->
<!-- -->
<!-- -->
<!-- -->
<!--

Examples
The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:

-->
<!-- -->
<!-- -->
<!-- -->
<!--

Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
