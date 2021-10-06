<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name;
?>
 
</body>
</html>






<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP - What is OOP?

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP - The $this Keyword:

The $this keyword refers to the current object, and is only available inside methods.







Look at the following example:


Example:


<?php
class Fruit {
  public $name;
}
$apple = new Fruit();
?>


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

So, where can we change the value of the $name property? There are two ways:



1. Inside the class (by adding a set_name() method






2. Outside the class (by directly changing the property value):

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
<!-- --> 
