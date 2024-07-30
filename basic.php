<!-- //<?php 
// echo "Hello World!!!<br> "; -->

// echo "I love Pizza <br>";
// echo "It's really good <br>";

// this is a PHP comment
/* this 
is 
a 
multiline 
comment
*/


// variable

// $name = "Rahul Kumar Mahto";
// $food = "pizza";

// echo "Hello $name<br>";
// echo "You like $food <br>";

// $price = 45.50;

// echo " Your Pizza is \$($price) <br><br><br>";
// echo "PHP version is ";
// echo phpversion();
// echo "<br><br><br>";

// to get data type of a variable use {var_dump();} function

// var_dump($price);
// var_dump([2, 3, 5.5, 'Rahul']);
// echo "<br>";

//Multiple  value assignment

// $x = $y = $z = "Fruit";

// echo "$x, $y, $z";


//Funtions

// $x = 5;  // Global variable but does not access in function
// function mytest()
// {
//     global $x;
//     $y = 10;

//     // echo"$x";       // using x inside this function will generate an error
//     echo "<p> Variable y inside function is $y</p><br>";
//     echo "<p> Variable x inside function is $x";
// }
// echo "<p> Variable x outside function is $x";
// mytest();


// function myTest()
// {
//     static $x = 0;
//     echo $x;
//     $x++;
// }

// myTest();
// echo "<br>";
// myTest();
// echo "<br>";
// myTest();

// echo "This ", "string ", "was ", "made ", "with multiple parameters. <br>";

// echo "<h1>Hello this is rahul</h1>";


/*

// Arithmetic

// $num1 = 50;
// $num2 = 25;
// echo "Total is : ", $num1 + $num2, "<br>";
// $num3 = NULL;
// $num3 = $num1 + $num2;
// $num3 = $num1 - $num2;
// $num3 = $num1 * $num2;
// $num3 = $num1 / $num2;  
// $num3 = $num1 ** $num2;
// $num3 = $num1 % $num2;

// $counter = 0;

// $counter++;
// echo "Result is: ", $counter, "<br>";
// $counter--;
// echo "Result is: ", $counter, "<br>";
// ++$counter;
// echo "Result is: ", $counter, "<br>";
// --$counter;
// echo "Result is: ", $counter, "<br>";


// Operator Precedence
// ()
// **
// *  / %
// + -


// PHP supports the following data types:

// String--->>  "Rahul"
// Integer--->> 12,23,34
// Float (floating point numbers - also called double)--->> 23.23,34.5;
// Boolean--->> True, False;
// Array--->>array("Volvo","BMW","Toyota",23,45.5);
// Object--->>  {Class Car}   -->>Object-->>$myCar = new Car("red", "Volvo");
// NULL--->>{Null is a special data type which can have only one value: NULL.A variable of data type NULL is a variable that has no value assigned to it.Tip: If a variable is created without a value, it is automatically assigned a value of NULL.}
// Resource---->>>{The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.A common example of using the resource data type is a database call.}



// Change Data Type

// $x = 5;
// echo var_dump($x), "<br>";

// $x = "Hello";
// echo var_dump($x), "<br>";



// Type Casting

// $x = 5;
// $x = (string) $x;
// echo var_dump($x);


// String

Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
echo "Hello";
echo 'Hello';

!!!-->>Double quotes process special characters, single quotes does not.
For Double quotes-->>

E.g. when there is a variable in the string, it returns the value of the variable:
$x = "John";
echo "Hello $x";            // Output-->> Hello John

Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:

$x = "John";
echo 'Hello $x';            // Output-->> Hello $x



!!!--->>>>>>  String Length
The PHP strlen() function returns the length of a string.

Example
Return the length of the string "Hello world!":

echo strlen("Hello world!");     //output-->> 12   






!!!---->>>>Word Count
The PHP str_word_count() function counts the number of words in a string.

Example
Count the number of word in the string "Hello world!":

echo str_word_count("Hello world!");    //Output -->> 3


!!!---->>>>Search For Text Within a String
The PHP strpos() function searches for a specific text within a string.

If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

Example
Search for the text "world" in the string "Hello world!":

echo strpos("Hello word world! world", "world");        // output-->> 11




!!!--->>>  Mehtods :
$x = "Hello World!";
Uppercase--->>> echo strtoupper($x);
Lowercase--->>> echo strtolower($x);
Replace String--->>> echo str_replace("World", "Dolly", $x);
Reverse String --->>> echo strrev($x);
Remove Whitespace--->>> echo trim($x);


Convert String into Array--->>>{The PHP explode() function splits a string into an array.The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
Note: The separator is required.

Example
Split the string into an array. Use the space character as separator:

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);


Result:
Array ( [0] => Hello [1] => World! )



----!!!!---->>>Change Data Type
Casting in PHP is done with these statements:

(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL



-----!!!!----->>> Maths function


echo (pi()), "<br>";

echo (min(0, 150, 30, 20, -8, -200)), "<br>";

echo (max(0, 150, 30, 20, -8, -200)), "<br>";
echo (round(0.60)), "<br>";
echo (round(0.49)), "<br>";
echo (sqrt(81)), "<br>";

echo (abs(-6.48)), "<br>";  //The abs() function returns the absolute (positive) value of a number
echo (rand()), "<br>";      //rand() function is used to generate random number

echo (rand(10, 110));        //to control over rand function we use min() and max() function e.g ( rand(min_value, max_value) )




-----!!!!!!----->>>>PHP Constant--->>Unlike variables, constants are automatically global across the entire script.


Syntax
define(name, value, case-insensitive);

Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.



// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;          //  Output-->>Welcome to W3Schools.com!
echo Greeting           // Output-->>Greeting


// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;          // Output-->>Welcome to W3Schools.com!



-----!!!!----->>Create a constant with the (const) keyword:

const MYCAR = "Volvo";
echo MYCAR;


const vs. define()

const are always case-sensitive
define() has has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.



-----!!!!!----->>>PHP Constant Arrays

From PHP7, you can create an Array constant using the define() function.

Example
Create an Array constant:

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];           // Output-->> Alfa Romeo



-----!!!!----->>Constants are Global
Constants are automatically global and can be used across the entire script.

Example
This example uses a constant inside a function, even if it is defined outside the function:

const GREETING  ="Hello this is Rahul"; or define("GREETING", "Hello this is Rahul");

function myTest() {
  echo GREETING;
}

myTest();






----!!!!---->>>Magic Constants
Here are the magic constants, with descriptions and examples:

Constant	Description	
__CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class	Returns the name of the specified class and the name of the namespace, if any.	
Note:

The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__.




















// these are case-insensitive

//example 1-->>
class Fruits
{
    public function myValue()
    {
        return __CLASS__;
    }
}
$kiwi = new Fruits();
echo $kiwi->myValue(), "<br>";

// exapmle 2-->>

echo __DIR__, "<br>";

//example 3--->>
echo __FILE__, "<br>";

//example 4-->>

function myValue()
{
    return __FUNCTION__;
}
echo myValue(), "<br>";

//example 5

echo __LinE__, "<br>";

//example 6
class Fruits
{
    public function myValue()
    {
        return __METHOD__;
    }
    public function myVal()
    {
        return __METHOD__;
    }
}
$kiwi = new Fruits();
echo $kiwi->myValue(), "<br>";
echo $kiwi->myVal(), "<br>";

//exapmle 7

<?php
namespace myArea;

function myValue(){
  return __NAMESPACE__;
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo myValue();         // output-->> myArea
?>

</body>
</html>




-------!!!!!!!----->>>>>PHP Comparison Operators------!!!!!--------
The PHP comparison operators are used to compare two values (number or string):

Operator	Name	Example	Result	Try it
==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.


<<<<<<<<<<<<<--------( <=>	Spaceship )------------>>>>>>>>>>
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  


<<<<<<<<<<<--------PHP String Operators------------->>>>>>>
PHP has two operators that are specially designed for strings.

Operator	Name	Example	Result	Try it
.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1



<<<<<<<<<<<--------------PHP Array Operators----------->>>>>>>>>>>>
The PHP array operators are used to compare arrays.

Operator	Name	Example	Result	Try it
+	Union	$x + $y	Union of $x and $y	
==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y	




<<<<<<<<<----------PHP Conditional Assignment Operators---------->>>>>>>>>
The PHP conditional assignment operators are used to set a value depending on conditions:

    Operator	Name	Example	Result	Try it
1) ?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
        The value of $x is expr2 if expr1 = TRUE.
        The value of $x is expr3 if expr1 = FALSE	


2) ??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
        The value of $x is expr1 if expr1 exists, and is not NULL.
        If expr1 does not exist, or is NULL, the value of $x is expr2.
        Introduced in PHP 7


------------EXAMPLE 2-----------
``$_GET["user"] = "RHUL";           //If is not declared than anonymous is by default printed.
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist

   echo $user = $_GET["user"] ?? "anonymous";       //Output-->> anonymous
   echo("<br>");

  $color= "Black";          //If is not declared than red is by default printed.
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";       //Output-->> red




<<<<<<<<<<---------------Variable Number of Arguments--------->>>>>>>>>>
By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

The variadic function argument becomes an array.

Example
A function that do not know how many arguments it will get:

function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;













?>

*/
