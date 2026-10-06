<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Assignment 2</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            background-color: #eeeeee;
            padding: 10px;
        }

        .question {
            margin-bottom: 30px;
        }

        table {
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px 15px;
            text-align: center;
        }

        th {
            background-color: #eeeeee;
        }

        /* Styling for Question 3 custom grid output */
        .q3-table {
            margin-top: 10px;
        }
        .q3-table td {
            width: 30px;
            height: 25px;
        }
        .bg-grey {
            background-color: #888888;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>

<body>

<h1>PHP Assignment 2</h1>


     QUESTION 1

<div class="question">

<h2>Question 1: One Dimensional Array</h2>

<?php

// 1. Declare and initialize the array
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);


// 2. Print all elements of the array
echo "<strong>All elements:</strong><br>";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "<br><br>";


// 3. Calculate total of all elements
$total = 0;
foreach ($numbers as $number) {
    $total += $number;
}
echo "<strong>Total of all elements:</strong> " . $total;
echo "<br><br>";


// 4. Calculate total of even elements
$evenTotal = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenTotal += $number;
    }
}
echo "<strong>Total of even elements:</strong> " . $evenTotal;
echo "<br><br>";


// 5. Calculate total of odd elements
$oddTotal = 0;
foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $oddTotal += $number;
    }
}
echo "<strong>Total of odd elements:</strong> " . $oddTotal;
echo "<br><br>";


// 6. Find minimum element and its positions
$minimum = $numbers[0];
foreach ($numbers as $number) {
    if ($number < $minimum) {
        $minimum = $number;
    }
}

echo "<strong>Minimum element:</strong> " . $minimum;
echo "<br>";
echo "<strong>Minimum positions:</strong> ";
foreach ($numbers as $index => $number) {
    if ($number == $minimum) {
        echo "[" . $index . "] ";
    }
}
echo "<br><br>";


// 7. Find maximum element and its positions
$maximum = $numbers[0];
foreach ($numbers as $number) {
    if ($number > $maximum) {
        $maximum = $number;
    }
}

echo "<strong>Maximum element:</strong> " . $maximum;
echo "<br>";
echo "<strong>Maximum positions:</strong> ";
foreach ($numbers as $index => $number) {
    if ($number == $maximum) {
        echo "[" . $index . "] ";
    }
}

?>

</div>




     QUESTION 2


<div class="question">

<h2>Question 2: Two Dimensional Associative Array</h2>

<?php

// Creating two dimensional associative array
$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),
    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),
    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);


// Printing the array as a table
echo "<table>";
echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $rowName => $row) {
    echo "<tr>";
    echo "<th>" . $rowName . "</th>";
    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>

</div>




     QUESTION 3


<div class="question">

<h2>Question 3: Two Dimensional Square Array</h2>

<?php

// 1. Declare and initialize the 2D array
$array = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);


// Calculate odd and even totals
$oddTotal = 0;
$evenTotal = 0;
foreach ($array as $row) {
    foreach ($row as $value) {
        if ($value % 2 != 0) {
            $oddTotal += $value;
        } else {
            $evenTotal += $value;
        }
    }
}

// Calculate row totals
$rowTotals = array();
foreach ($array as $row) {
    $rSum = 0;
    foreach ($row as $val) {
        $rSum += $val;
    }
    $rowTotals[] = $rSum;
}

// Calculate column totals
$colTotals = array();
for ($c = 0; $c < 3; $c++) {
    $cSum = 0;
    for ($r = 0; $r < 3; $r++) {
        $cSum += $array[$r][$c];
    }
    $colTotals[] = $cSum;
}

// Calculate diagonals
$mainDiagonal = $array[0][0] + $array[1][1] + $array[2][2]; // -1
$secondDiagonal = $array[0][2] + $array[1][1] + $array[2][0]; // 16

// Calculate overall total
$totalAll = 0;
foreach ($array as $row) {
    foreach ($row as $value) {
        $totalAll += $value;
    }
}

// Find minimum and maximum
$minimum = $array[0][0];
$maximum = $array[0][0];
foreach ($array as $row) {
    foreach ($row as $value) {
        if ($value < $minimum) $minimum = $value;
        if ($value > $maximum) $maximum = $value;
    }
}

$minPositions = array();
$maxPositions = array();
foreach ($array as $rIndex => $row) {
    foreach ($row as $cIndex => $value) {
        if ($value == $minimum) {
            $minPositions[] = "[" . $rIndex . "," . $cIndex . ",]";
        }
        if ($value == $maximum) {
            $maxPositions[] = "[" . $rIndex . "," . $cIndex . ",]";
        }
    }
}


// Print Table formatted as shown in Question 3 image
echo "<table class='q3-table'>";

// Header 1: Total odd elements
echo "<tr><td colspan='5'>Total odd elements = " . $oddTotal . "</td></tr>";

// Header 2: Total even elements
echo "<tr><td colspan='5'>Total even elements = " . $evenTotal . "</td></tr>";

// Row 1 of Grid
echo "<tr>";
echo "<td class='bg-grey'>" . (-3) . "</td>";
echo "<td>" . $rowTotals[0] . "</td>";
echo "<td>" . $colTotals[0] . "</td>";
echo "<td>" . $colTotals[1] . "</td>";
echo "<td class='bg-grey'>" . $secondDiagonal . "</td>";
echo "</tr>";

// Row 2 of Grid (Matrix Row 1)
echo "<tr>";
echo "<td>" . $rowTotals[0] . "</td>";
echo "<td>" . $array[0][0] . "</td>";
echo "<td>" . $array[0][1] . "</td>";
echo "<td>" . $array[0][2] . "</td>";
echo "<td>" . $rowTotals[0] . "</td>";
echo "</tr>";

// Row 3 of Grid (Matrix Row 2)
echo "<tr>";
echo "<td>" . $rowTotals[1] . "</td>";
echo "<td>" . $array[1][0] . "</td>";
echo "<td>" . $array[1][1] . "</td>";
echo "<td>" . $array[1][2] . "</td>";
echo "<td>" . $rowTotals[1] . "</td>";
echo "</tr>";

// Row 4 of Grid (Matrix Row 3)
echo "<tr>";
echo "<td>" . $rowTotals[2] . "</td>";
echo "<td>" . $array[2][0] . "</td>";
echo "<td>" . $array[2][1] . "</td>";
echo "<td>" . $array[2][2] . "</td>";
echo "<td>" . $rowTotals[2] . "</td>";
echo "</tr>";

// Row 5 of Grid
echo "<tr>";
echo "<td class='bg-grey'>" . $secondDiagonal . "</td>";
echo "<td>" . $colTotals[0] . "</td>";
echo "<td>" . $colTotals[1] . "</td>";
echo "<td>" . $colTotals[2] . "</td>";
echo "<td class='bg-grey'>" . (-3) . "</td>";
echo "</tr>";

// Total all elements
echo "<tr><td colspan='5'>Total all elements = " . $totalAll . "</td></tr>";

// Minimum element description
echo "<tr><td colspan='5'>Min element is: " . $minimum . " in " . count($minPositions) . " positions:<br>" . implode(", ", $minPositions) . "</td></tr>";

// Maximum element description
echo "<tr><td colspan='5'>Maximum element is: " . $maximum . " in " . count($maxPositions) . " positions:<br>" . implode(", and ", $maxPositions) . "</td></tr>";

echo "</table>";

?>

</div>




     QUESTION 4

<div class="question">

<h2>Question 4: Student Information</h2>

<?php

// Creating two dimensional associative array
$students = array(
    array(
        "ID" => "CA231",
        "Name" => "Mohamed Mohamud Hussein",
        "Phone" => "0615752144",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    array(
        "ID" => "CA233",
        "Name" => "Ahmed Ali Mohamud",
        "Phone" => "0617654323",
        "Address" => "Taleex, Hodan"
    ),
    array(
        "ID" => "CA234",
        "Name" => "Aisha Nur Ahmed",
        "Phone" => "0618654378",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);


// Print student information as table
echo "<table>";
echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<th>" . $student["ID"] . "</th>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

</div>




     QUESTION 5

<div class="question">

<h2>Question 5: Student Transcript</h2>

<?php

// Creating student transcript using semesters
$transcript = array(
    "Semester 1" => array(
        "subject1" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"),
        "subject2" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"),
        "subject3" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass")
    ),
    "Semester 2" => array(
        "subject1" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 0,  "Total" => 45, "Status" => "Fail"),
        "subject2" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"),
        "subject3" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass")
    )
);


// Print transcript as unified table
echo "<table>";
echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";

foreach ($transcript as $semester => $subjects) {
    $firstRow = true;
    $rowCount = count($subjects);

    foreach ($subjects as $subject => $marks) {
        echo "<tr>";

        if ($firstRow) {
            echo "<td rowspan='" . $rowCount . "'><strong>" . $semester . "</strong></td>";
            $firstRow = false;
        }

        echo "<td>" . $subject . "</td>";
        echo "<td>" . $marks["CW1"] . "</td>";
        echo "<td>" . $marks["MidTerm"] . "</td>";
        echo "<td>" . $marks["CW2"] . "</td>";
        echo "<td>" . $marks["Final"] . "</td>";
        echo "<td>" . $marks["Total"] . "</td>";
        echo "<td>" . $marks["Status"] . "</td>";

        echo "</tr>";
    }
}

echo "</table>";

?>

</div>

</body>
</html>