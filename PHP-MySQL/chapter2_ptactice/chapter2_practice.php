<!DOCTYPE html>
<html>
<head>
    <title>PHP Chapter 2 Practice</title>
</head>
<body>

<h1>PHP Chapter 2 Practice</h1>

<?php

// 1. Echo and Print


echo "This is echo Statement";
echo "<br>";

print "This is print Statement";
echo "<br>";

echo "This Echo is without Parentheses";
echo "<br>";

echo "This is an output ", "Two Parameters using echo";
echo "<br>";



// 2. Single and Double Quotation


$x = 5;

echo "This is the value of $x";
echo "<br>";

echo 'This is the value of $x';
echo "<br>";

$a = 4;
$b = 5;
$c = $a + $b;

echo "Total of $a and $b = $c";
echo "<br>";

echo 'Total of $a and $b = $c';
echo "<br>";



// 3. Comments


// This is a single line comment

# This is also a single line comment

/*
This is a
multi line comment
*/



// 4. Variables


$student_number = 200;
$name = "Omar Ali";
$single = true;
$salary = 10.5;

echo "Student Number: $student_number <br>";
echo "Student name: $name <br>";
echo "Student single: $single <br>";
echo "Student salary: $salary <br>";

echo "Student Number: ";
var_dump($student_number);
echo "<br>";

echo "Student name: ";
var_dump($name);
echo "<br>";

echo "Student single: ";
var_dump($single);
echo "<br>";

echo "Student salary: ";
var_dump($salary);
echo "<br>";



// 5. String Practice


$message = "Good Morning";

echo "The position of 5 is: " . $message[5];
echo "<br>";

echo "The position of W is: ";
var_dump(strpos($message, "W"));
echo "<br>";

$count = strlen($message);
echo "This message \"$message\" contains $count characters";
echo "<br>";

$message = "The quick brown fox jumps over the lazy dog";
$word_count = str_word_count($message);

echo "This message contains $word_count words";
echo "<br>";

$message = "Good Morning";
echo str_replace("Morning", "Night", $message);
echo "<br>";

echo "Good" . " Morning";
echo "<br>";



// 6. Constants


define("PI", 3.14);

echo "Value of PI is: ";
echo PI;
echo "<br>";

$radius = 6;
$area = PI * ($radius * $radius);

echo "The area of circle is: ", $area;
echo "<br>";



// 7. Arithmetic Operators


$x = 5;
$y = 4;

$result = $x + $y;
echo "The sum of $x and $y = ", $result;
echo "<br>";

$result = $x - $y;
echo "The difference of $x and $y = ", $result;
echo "<br>";

$result = $x * $y;
echo "The product of $x and $y = ", $result;
echo "<br>";

$result = $x / $y;
echo "The division of $x and $y = ", $result;
echo "<br>";

$result = $x % $y;
echo "The Modolus of $x and $y = ", $result;
echo "<br>";



// 8. Assignment Operators


$x = 78;

$x += 1;
echo "x += 1 : $x";
echo "<br>";

$x -= 1;
echo "x -= 1 : $x";
echo "<br>";

$x *= 2;
echo "x *= 2 : $x";
echo "<br>";

$x /= 2;
echo "x /= 2 : $x";
echo "<br>";

$x %= 10;
echo "x %= 10 : $x";
echo "<br>";



// 9. Comparison Operators


$x = 5;
$y = 4;

echo "X == Y : ";
var_dump($x == $y);
echo "<br>";

echo "X != Y : ";
var_dump($x != $y);
echo "<br>";

echo "X > Y : ";
var_dump($x > $y);
echo "<br>";

echo "X < Y : ";
var_dump($x < $y);
echo "<br>";

echo "X >= Y : ";
var_dump($x >= $y);
echo "<br>";

echo "X <= Y : ";
var_dump($x <= $y);
echo "<br>";



// 10. Logical Operators


$a = true;
$b = false;

echo "a && b : ";
var_dump($a && $b);
echo "<br>";

echo "a || b : ";
var_dump($a || $b);
echo "<br>";

echo "!a : ";
var_dump(!$a);
echo "<br>";



// 11. Concatenation Operator


$a = "Welcome ";
$b = "PHP & ";
$c = "Mysql";

echo $a . $b . $c;
echo "<br>";

$greeting = "Hello, ";
$message = "Its nice to meet you!";

echo $greeting . $message;
echo "<br>";



// 12. Increment and Decrement


$x = 5;

echo ++$x;
echo " First increments then prints";
echo "<br>";

$x = 5;

echo $x++;
echo " First prints then increments";
echo "<br>";

echo $x;
echo "<br>";

$x = 5;

echo --$x;
echo " First decrements then prints";
echo "<br>";

$x = 5;

echo $x--;
echo " First prints then decrements";
echo "<br>";

echo $x;
echo "<br>";



// 13. Operator Precedence


$result = 1 + 5 * 3 - 1 * (4 / 3);

echo "The result is: ";
echo $result;
echo "<br>";

$result = 1 + 5 * 3 - 1 * (6 / 3) > 10 || 4 / 2 == 2 && !false;

echo "The result is: ";
echo $result ? "True" : "False";
echo "<br>";



// 14. If Statement


$month = "March";

if ($month == "March")
    echo "It's Spring Time!";

echo "<br>";

$x = 5;
$y = 8;

if ($x > $y)
    echo "$x is greater than $y";

echo "<br>";

if ($x < $y)
    echo "$x is less than $y";

echo "<br>";



// 15. If Else
// ===============================

$mark = 45;

if ($mark >= 50)
    echo "PASSED";
else
    echo "FAILED";

echo "<br>";



// 16. If Elseif Else


$mark = 85;

if ($mark >= 90)
    echo "Your grade is A";
elseif ($mark >= 80)
    echo "Your grade is B";
else if ($mark >= 70)
    echo "Your grade is C";
else if ($mark >= 60)
    echo "Your grade is D";
else if ($mark >= 50)
    echo "Your grade is E";
else
    echo "Your grade is F";

echo "<br>";



// 17. Switch with Month


$month = "March";

switch ($month) {

    case "January":
    case "February":
    case "March":
        echo "It's Winter time!";
        break;

    case "April":
    case "May":
    case "June":
        echo "It's Spring time!";
        break;

    case "July":
        echo "It's Summer time!";
        break;

    default:
        echo "Invalid Month";
        break;
}

echo "<br>";



// 18. Switch with Page


$page = "About";

switch ($page):

    case "Home":
        echo "You selected Home Page";
        break;

    case "About":
        echo "You selected About Page";
        break;

    case "News":
        echo "You selected News Page";
        break;

    case "Contact":
        echo "You selected Contact Page";
        break;

    default:
        echo "Invalid Page";

endswitch;

echo "<br>";



// 19. Switch Grade


$mark = 65;

switch ($mark) {

    case ($mark >= 90):
        echo "Your grade is A";
        break;

    case ($mark >= 80):
        echo "Your grade is B";
        break;

    case ($mark >= 70):
        echo "Your grade is C";
        break;

    case ($mark >= 60):
        echo "Your grade is D";
        break;

    case ($mark >= 50):
        echo "Your grade is E";
        break;

    default:
        echo "Your grade is F";
}

echo "<br>";



// 20. Ternary Operator


$fuel = 1;

echo ($fuel <= 1) ? "Fill Tank Now" : "It's Enough Fuel";

echo "<br>";

$mark = 35;

$message = ($mark >= 50) ? "PASSED" : "FAILED";

echo $message;
echo "<br>";



// 21. While Loop


$count = 1;

while ($count <= 15) {

    echo "$count, ";
    $count++;
}

echo "<br>";



// 22. While Multiplication


$count = 1;

while ($count <= 12) {

    echo "$count times 12 is " . $count * 12 . "<br>";
    ++$count;
}

echo "<br>";



// 23. Do While Loop


$result = 1;
$n = 5;

do {

    $result *= $n;
    $n--;

} while ($n > 0);

echo "The Factorial of 5! = " . $result;
echo "<br>";



// 24. For Loop 1 - 15


for ($count = 1; $count <= 15; $count++) {

    echo "$count <br>";
}



// 25. For Loop Multiplication


for ($count = 1; $count <= 12; $count++) {

    echo "$count times 12 is " . $count * 12 . "<br>";
}

echo "<br>";



// 26. For Loop Square


for ($i = 1; $i <= 10; $i++) {

    echo "The square of $i is " . $i * $i . "<br>";
}

echo "<br>";



// 27. Factorial using For Loop


$result = 1;

for ($n = 5; $n >= 1; $n--) {

    $result = $result * $n;
}

echo "The Factorial of 5! = " . $result;
echo "<br>";



// 28. Factorial with Do While


$n = 5;
$result = 1;

do {

    $result = $result * $n;

    if ($n == 1) {
        echo "$n";
        break;
    }
    else {
        echo "$n * ";
    }

    $n--;

} while ($n >= 1);

echo "<br>";
echo "The Factorial of 5! = " . $result;
echo "<br>";



// 29. Break Statement


$count = 1;

while ($count <= 15) {

    echo "$count, ";

    if ($count == 10)
        break;

    $count++;
}

echo "<br>";



// 30. Continue Statement


$count = 0;

do {

    $count++;

    if ($count % 2 == 0) {
        continue;
    }

    echo "$count, ";

} while ($count <= 15);

echo "<br>";



// 31. Nested Loop - Weeks and Days


$week = 3;
$day = 7;

for ($i = 1; $i <= $week; $i++) {

    echo "Week " . $i . ":<br>";

    for ($j = 1; $j <= $day; $j++) {

        echo "&nbsp;&nbsp; Day " . $j . "<br>";
    }
}

echo "<br>";



// 32. Nested Loop - Star Triangle


for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= $i; $j++) {

        echo "*";
    }

    echo "<br>";
}

echo "<br>";



// 33. Nested Loop - Multiplication Table


for ($i = 1; $i <= 12; $i++) {

    for ($j = 1; $j <= 12; $j++) {

        echo ($i * $j) . " ";
    }

    echo "<br>";
}

?>

</body>
</html>
