<!DOCTYPE html>
<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>












<!-- -->
<!-- -->
<!--

PHP Global Variables - Superglobals:

PHP Superglobal - $_GET


-->
<!-- -->
<!-- -->
<!-- -->
<!--

Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Global Variables - Superglobals:


Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.





The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP $_GET :



PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".



$_GET can also collect data sent in the URL.




Assume we have an HTML page that contains a hyperlink with parameters:

<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>




When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.

The example below shows the code in "test_get.php":


-->
<!-- -->
<!-- -->
<!-- -->
<!--

Tip: You will learn more about $_GET in the PHP Forms chapter.

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
