<!DOCTYPE html>
<html>
<body>

<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>
 
</body>
</html>









<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--


PHP OOP - Static Properties

-->
<!-- -->
<!-- --> 
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--


PHP - Static Properties:


Static properties can be called directly - without creating an instance of a class.






Static properties are declared with the static keyword:

Syntax:


<?php
class ClassName {
  public static $staticProp = "W3Schools";
}
?>







To access a static property use the class name, double colon (::), and the property name:


Syntax:

ClassName::staticProp;








Let's look at an example:


Example Explained:

Here, we declare a static property: $value. Then, we echo the value of the static property by using the class name, double colon (::), and the property name (without creating a class first).





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
