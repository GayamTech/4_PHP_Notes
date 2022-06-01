<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
$y = 3;

echo $x ** $y;
?>

</body>
</html>







<!-- -->
<!-- -->
<!-- PHP Operators : Exponentiation-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--


PHP Operators :
Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators

-->
<!-- -->
<!-- -->
<!--

PHP Arithmetic Operators  : (+, -, *, /, %, **(Exponential))


used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc

-->
<!-- -->
<!-- -->
<!--

PHP Assignment Operators : (x=y, x+=y, x-=y, x*=y, x/=y, x%/y)

used with numeric values to write a value to a variable

-->
<!-- -->
<!--

PHP Comparison Operators : (==(Equal), ===(Identical), !=, <>(Not Equal), !==, >, <, >=, <=, <=>)

===    Identical    $x === $y    Returns true if $x is equal to $y, and they are of the same type

!==    Not identical    $x !== $y    Returns true if $x is not equal to $y, or they are not of the same type

<=>    Spaceship    $x <=> $y    Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.



used to compare two values (number or string)


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Increment / Decrement Operators : (++$x, $x++, --$x, $x--)

Operator        Name                Description
++$x            Pre-increment       Increments $x by one, then returns $x
$x++            Post-increment      Returns $x, then increments $x by one
--$x            Pre-decrement       Decrements $x by one, then returns $x
$x--            Post-decrement      Returns $x, then decrements $x by one


-->
<!-- -->
<!-- -->
<!-- -->
<!-- PHP Logical Operators


Operator        Name            Example         Result
and             And             $x and $y       True if both $x and $y are true
or              Or              $x or $y        True if either $x or $y is true
xor             Xor             $x xor $y       True if either $x or $y is true, but
                                                not both
&&              And             $x && $y        True if both $x and $y are true
||              Or              $x || $y        True if either $x or $y is true
!               Not             !$x             True if $x is not true

-->
<!-- -->
<!-- -->
<!-- PHP String Operators :

Operator            Name                        Example             Result

.                   Concatenation               $txt1 . $txt2       Concatenation of
                                                                    $txt1 and $txt2

.=                  Concatenation assignment    $txt1 .= $txt2      Appends $txt2 to
                                                                    $txt1

-->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Array Operators :


Operator        Name            Example         Result

+               Union           $x + $y         Union of $x and $y

==              Equality        $x == $y        Returns true if $x and $y have the
                                                same key/value pairs

===             Identity        $x === $y       Returns true if $x and $y have the
                                                same key/value pairs in the same order and of the same types

!=              Inequality      $x != $y        Returns true if $x is not equal to $y

<>              Inequality      $x <> $y        Returns true if $x is not equal to $y

!==             Non-identity    $x !== $y       Returns true if $x is not identical
                                                to $y


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Conditional Assignment Operators :


Operator            Name                Example                       Result    Show it



?:                  Ternary             $x = expr1 ? expr2 : expr3    Returns the
                                                                        value of $x.
                            
    
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE




??                  Null coalescing    $x = expr1 ?? expr2    Returns the value of
                                                                $x.


The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7



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
