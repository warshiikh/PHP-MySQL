
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Practice Questions 1-10</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }

        h2 {
            color: #222;
            background-color: #ddd;
            padding: 10px;
        }

        .result {
            background-color: white;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
        }

        table {
            border-collapse: collapse;
            text-align: center;
            background-color: white;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #eeeeee;
        }
    </style>
</head>

<body>

<h1>PHP Practice Questions 1-10</h1>

<!-- QUESTION 1 -->
<div class="result">
<h2>Question 1: Greatest and Smallest</h2>

<?php
$a = 25;
$b = 10;
$c = 40;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($b < $smallest) {
    $smallest = $b;
}

if ($c < $smallest) {
    $smallest = $c;
}

echo "Greatest number: " . $greatest . "<br>";
echo "Smallest number: " . $smallest;
?>
</div>

<!-- QUESTION 2 -->
<div class="result">
<h2>Question 2: Divisible by 3 and 5</h2>

<?php
$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "The number is divisible by both 3 and 5.";
} elseif ($num % 3 == 0) {
    echo "The number is divisible by 3.";
} elseif ($num % 5 == 0) {
    echo "The number is divisible by 5.";
} else {
    echo "The number is divisible by neither 3 nor 5.";
}
?>
</div>

<!-- QUESTION 3 -->
<div class="result">
<h2>Question 3: Odd and Even Numbers</h2>

<?php
echo "Odd numbers from 2 to 20: ";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>Even numbers from 35 down to 7: ";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
</div>

<!-- QUESTION 4 -->
<div class="result">
<h2>Question 4: Numbers Divisible by 2 and 5</h2>

<?php
echo "Numbers from 50 down to 2: ";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
?>
</div>

<!-- QUESTION 5 -->
<div class="result">
<h2>Question 5: Reverse a Number</h2>

<?php
$num = 12345;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;

    $reverse = ($reverse * 10) + $digit;

    $num = (int)($num / 10);
}

echo "Reversed number: " . $reverse;
?>
</div>

<!-- QUESTION 6 -->
<div class="result">
<h2>Question 6: LCM of Two Numbers</h2>

<?php
$a = 8;
$b = 12;

if ($a > $b) {
    $lcm = $a;
} else {
    $lcm = $b;
}

while ($lcm % $a != 0 || $lcm % $b != 0) {
    $lcm++;
}

echo "LCM of " . $a . " and " . $b . " is: " . $lcm;
?>
</div>

<!-- QUESTION 7 -->
<div class="result">
<h2>Question 7: HCF (GCD)</h2>

<?php
$a = 18;
$b = 24;

$x = $a;
$y = $b;

while ($y != 0) {
    $remainder = $x % $y;

    $x = $y;
    $y = $remainder;
}

echo "HCF of " . $a . " and " . $b . " is: " . $x;
?>
</div>

<!-- QUESTION 8 -->
<div class="result">
<h2>Question 8: Multiplication Table (1 to 12)</h2>

<table>
    <tr>
        <th>*</th>

        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>

    <?php
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";

        for ($j = 1; $j <= 12; $j++) {
            $result = $i * $j;
            echo "<td>$result</td>";
        }

        echo "</tr>";
    }
    ?>
</table>
</div>

<!-- QUESTION 9 -->
<div class="result">
<h2>Question 9: Prime or Non-Prime</h2>

<?php
$num = 17;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo $num . " is a prime number.";
} else {
    echo $num . " is a non-prime number.";
}
?>
</div>

<!-- QUESTION 10 -->
<div class="result">
<h2>Question 10: Prime Numbers from 10 to 50</h2>

<?php
echo "Prime numbers: ";

for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;

    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}
?>
</div>

</body>
</html>