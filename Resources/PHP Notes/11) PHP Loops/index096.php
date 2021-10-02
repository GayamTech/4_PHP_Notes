<!DOCTYPE html>
<html>
<body>

<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>

</body>
</html>





<!-- -->
<!-- -->
<!--

PHP Loops :

for Loop

-->
<!-- -->
<!--

The for loop - Loops through a block of code a specified number of times.



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
<!-- -->
<!-- -->
<!--

The PHP for Loop:


The for loop is used when you know in advance how many times the script should run.



Syntax :


for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}





Parameters:

init counter: Initialize the loop counter value

test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.

increment counter: Increases the loop counter value

-->
<!-- -->
<!-- -->
<!-- -->
<!--

The example below displays the numbers from 0 to 10:

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

Example Explained :

$x = 0; - Initialize the loop counter ($x), and set the start value to 0

$x <= 10; - Continue the loop as long as $x is less than or equal to 10

$x++ - Increase the loop counter value by 1 for each iteration

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
