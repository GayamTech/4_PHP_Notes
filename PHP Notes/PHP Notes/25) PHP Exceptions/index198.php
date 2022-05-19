<!DOCTYPE html>
<html>
<body>

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide.";
}
?>

</body>
</html>







<!-- -->
<!-- -->
<!-- -->
<!--

PHP Exceptions :

-->
<!-- -->
<!-- -->
<!-- -->
<!--



The try...catch Statement :



To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.








Syntax :

try {
  code that can throw exceptions
} catch(Exception $e) {
  code that runs when an exception is caught
}



-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

Example


Show a message when an exception is thrown:


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

The catch block indicates what type of exception should be caught and the name of the variable which can be used to access the exception. In the example above, the type of exception is Exception and the variable name is $e.


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--


Throwing an Exception
The throw statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed.

If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message.

Lets try to throw an exception without catching it:


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
