<?php
/*
CHAPTER 3: ARRAYS IN PHP

*/

echo "<h2>CHAPTER 3: ARRAYS IN PHP - PRACTICE 1-29</h2>";


// PRACTICE 1: Array waa maxay? (Introduction to Array)
echo "<h3>1. Introduction to Array</h3>";
$a = array(2, false, 6.5, "Jamac");
print_r($a);
echo "<br><br>";


// PRACTICE 2: var_dump() - muuji type iyo value

echo "<h3>2. Using var_dump()</h3>";
$a = array(2, false, 6.5, "Jamac");
var_dump($a);
echo "<br><br>";


// PRACTICE 3: Numerically indexed array - array()

echo "<h3>3. Numeric Array using array()</h3>";
$fruits = array("Apple", "Orange", "Banana");
print_r($fruits);
echo "<br><br>";

// PRACTICE 4: Numeric array - index gacanta ku qor

echo "<h3>4. Numeric Array using Manual Index</h3>";
$fruits[0] = "Apple";
$fruits[1] = "Orange";
$fruits[2] = "Banana";
print_r($fruits);
echo "<br><br>";


// PRACTICE 5: Ku dar elements adigoon index qorin

echo "<h3>5. Adding Items without Explicit Index</h3>";
$cars[] = "Mercedes Benz";
$cars[] = "Hilux";
$cars[] = "BMW";
$cars[] = "Toyota";
$cars[] = "Nissan";
print_r($cars);
echo "<br><br>";


// PRACTICE 6: Soo saar element adigoo index adeegsanaya

echo "<h3>6. Accessing Elements by Index</h3>";
$fruits = array("Apple", "Orange", "Banana");
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br><br>";


// PRACTICE 7: Array leh data types kala duwan

echo "<h3>7. Different Data Types in One Array</h3>";
$student_info = array("101", "Mohamed Abdi Ali", 20, "single", 161.5);
print_r($student_info);
echo "<br><br>";


// PRACTICE 8: for loop ku daabac array

echo "<h3>8. Printing Array using for Loop</h3>";
$fruits = array("Apple", "Orange", "Banana");
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . ", ";
}
echo "<br><br>";


// PRACTICE 9: foreach loop ku daabac array

echo "<h3>9. Printing Array using foreach Loop</h3>";
$cars = array("Mercedes Benz", "Hilux", "BMW", "Toyota", "Nissan");
foreach ($cars as $car) {
    echo $car . ", ";
}
echo "<br><br>";


// PRACTICE 10: foreach iyo array tirooyin ah

echo "<h3>10. foreach with Numbers</h3>";
$numbers = array(26, 11, 13, -4, 14);
foreach ($numbers as $number) {
    echo $number . ", ";
}
echo "<br><br>";


// PRACTICE 11: Isku gee dhammaan tirooyinka array-ga

echo "<h3>11. Total of Array Elements</h3>";
$numbers = array(26, 11, 13, -4, 14, 17, 5, 52, 7, 9, 21, 32, 2, 4, 5);
$total = 0;
foreach ($numbers as $n) {
    $total += $n;
}
echo "Total of all elements is: " . $total;
echo "<br><br>";


// PRACTICE 12: Isku dar laba array element-element

echo "<h3>12. Adding Two Arrays Element by Element</h3>";
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);
$array3 = array();
for ($i = 0; $i < count($array1); $i++) {
    $array3[$i] = $array1[$i] + $array2[$i];
}
foreach ($array3 as $item) {
    echo $item . ", ";
}
echo "<br><br>";


// PRACTICE 13: Associative array (key => value)

echo "<h3>13. Associative Array</h3>";
$student_info = array(
    "id" => 101,
    "name" => "Mohamed Abdi Ali",
    "age" => 20,
    "address" => "Hodan District",
    "status" => "single",
    "weight" => 161.5
);
print_r($student_info);
echo "<br><br>";


// PRACTICE 14: Associative array - ku dar key/value

echo "<h3>14. Adding Items to Associative Array</h3>";
$info = array();
$info["id"] = "101";
$info["name"] = "Mohamed Abdi Ali";
$info["age"] = 20;
$info["address"] = "Hodan District";
$info["status"] = "single";
$info["weight"] = 160.5;
print_r($info);
echo "<br><br>";


// PRACTICE 15: Ka hel value adigoo key adeegsanaya

echo "<h3>15. Accessing Associative Array Values</h3>";
echo "Name: " . $student_info["name"] . "<br>";
echo "Age: " . $student_info["age"] . "<br>";
echo "Address: " . $student_info["address"];
echo "<br><br>";


// PRACTICE 16: foreach associative array values

echo "<h3>16. foreach - Values Only</h3>";
foreach ($student_info as $value) {
    echo $value . ", ";
}
echo "<br><br>";

// PRACTICE 17: foreach key => value

echo "<h3>17. foreach with Key and Value (=>)</h3>";
foreach ($student_info as $key => $value) {
    echo "[" . $key . "]: " . $value . "<br>";
}
echo "<br>";


// PRACTICE 18: Multidimensional array (array gudaha array)

echo "<h3>18. Multidimensional Array</h3>";
$students = array(
    array("Mohamed", 1990, "Hodan", "0608124390"),
    array("Ahmed", 2001, "Yaaqshiid", "0608124391"),
    array("Jaamac", 1986, "Shangaani", "0608124392")
);
print_r($students);
echo "<br><br>";


// PRACTICE 19: Two-dimensional array - nested foreach

echo "<h3>19. Two-dimensional Array using Nested foreach</h3>";
foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . ", ";
    }
    echo "<br>";
}
echo "<br>";


// PRACTICE 20: Hel hal element oo ku jira 2D array

echo "<h3>20. Accessing a 2D Array Element</h3>";
echo $students[0][0] . "<br>"; // Mohamed
echo $students[1][2] . "<br>"; // Yaaqshiid
echo $students[2][3];           // 0608124392
echo "<br><br>";


// PRACTICE 21: is_array() - hubi inuu array yahay

echo "<h3>21. is_array()</h3>";
$products = array("Adhesives", "Pens", "Books");
if (is_array($products)) {
    echo "products is an array";
} else {
    echo "products is not an array";
}
echo "<br><br>";


// PRACTICE 22: in_array() - hubi value inuu jiro

echo "<h3>22. in_array()</h3>";
$products = array("Adhesives", "Pens", "Books");
if (in_array("Adhesives", $products)) {
    echo "Match found";
} else {
    echo "No match found";
}
echo "<br><br>";


// PRACTICE 23: count() iyo sizeof()

echo "<h3>23. count() and sizeof()</h3>";
$fruits = array("Apple", "Orange", "Banana");
echo "count: " . count($fruits) . "<br>";
echo "sizeof: " . sizeof($fruits);
echo "<br><br>";


// PRACTICE 24: sort() iyo rsort()

echo "<h3>24. sort() and rsort()</h3>";
$numbers = array(5, 2, 9, 1, 7);
sort($numbers);
echo "Ascending: ";
print_r($numbers);
echo "<br>";
rsort($numbers);
echo "Descending: ";
print_r($numbers);
echo "<br><br>";


// PRACTICE 25: asort() iyo arsort() - associative arrays

echo "<h3>25. asort() and arsort()</h3>";
$marks = array("Mohamed" => 80, "Ahmed" => 65, "Amina" => 95);
asort($marks);
echo "Ascending by value: ";
print_r($marks);
echo "<br>";
arsort($marks);
echo "Descending by value: ";
print_r($marks);
echo "<br><br>";


// PRACTICE 26: max() iyo min()

echo "<h3>26. max() and min()</h3>";
$numbers = array(26, 11, 13, -4, 14, 52, 7);
echo "Maximum: " . max($numbers) . "<br>";
echo "Minimum: " . min($numbers);
echo "<br><br>";


// PRACTICE 27: implode() iyo explode()

echo "<h3>27. implode() and explode()</h3>";
$words = array("The", "quick", "brown", "fox");
$sentence = implode(" ", $words);
echo "Implode: " . $sentence . "<br>";
$text = "The quick brown fox";
$wordArray = explode(" ", $text);
echo "Explode: ";
print_r($wordArray);
echo "<br><br>";


// PRACTICE 28: shuffle(), array_merge(), array_reverse()

echo "<h3>28. shuffle(), array_merge(), array_reverse()</h3>";
$words = array("Red", "Green", "Blue");
shuffle($words);
echo "Shuffled: ";
print_r($words);
echo "<br>";

$a1 = array(1, 2, 3);
$a2 = array(4, 5, 6);
$a3 = array_merge($a1, $a2);
echo "Merged: ";
print_r($a3);
echo "<br>";

$reversed = array_reverse($a3);
echo "Reversed: ";
print_r($reversed);
echo "<br><br>";


// PRACTICE 29: array_push(), array_pop(), end()

echo "<h3>29. array_push(), array_pop(), end()</h3>";
$a = array(2, 4, 6, 8);
array_push($a, 10);
echo "After array_push: ";
print_r($a);
echo "<br>";

$removed = array_pop($a);
echo "Removed by array_pop: " . $removed . "<br>";
echo "Array after pop: ";
print_r($a);
echo "<br>";

echo "Last element using end(): " . end($a);
echo "<br><br>";

?>
