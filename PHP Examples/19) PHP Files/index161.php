<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

</body>
</html>









<!-- -->
<!-- -->
<!-- -->
<!--

PHP File Open/Read/Close:



-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Read File - fread():



The fread() function reads from an open file.

The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.






The following PHP code reads the "webdictionary.txt" file to the end:


fread($myfile,filesize("webdictionary.txt"));



-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Close File - fclose():



The fclose() function is used to close an open file.



It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!






The fclose() requires the name of the file (or a variable that holds the filename) we want to close:

<?php
$myfile = fopen("webdictionary.txt", "r");
// some code to be executed....
fclose($myfile);
?>


-->
<!-- -->
<!-- -->
<!-- -->
<!--

PHP Read Single Line - fgets():


The fgets() function is used to read a single line from a file.

The example below outputs the first line of the "webdictionary.txt" file:



-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

Note: After a call to the fgets() function, the file pointer has moved to the next line.

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
