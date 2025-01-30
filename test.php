<?php


$name = "Steve";
$age = 28;
$email = "steve@example.com";

// echo "$name is $age years old and his email is $email";


// String
$name = "Steve";


// Integer
$age = 28;

// Float
// A floating point number is a number with a decimal point.
$height = 5.8;

// Boolean
// A boolean is a true or false value.
$is_married = false;

// Array
// An array is a collection of values.
$colors = [
    0 => "red",
    1 => "blue",
    2 => "green"
];

// Associative Array
// An associative array is an array where the keys are strings and the values are values.
$person = [
    "name" => "Steve",
    "age" => 28,
    "email" => "steve@example.com"
];

// Multidimensional Array
// A multidimensional array is an array where the values are arrays.
$people = [
    [
        "name" => "Steve",
        "age" => 28,
        "email" => "steve@example.com"
    ],
    [
        "name" => "John",
        "age" => 30,
        "email" => "john@example.com"
    ],
    [
        "name" => "Jane",
        "age" => 25,
        "email" => "jane@example.com"
    ],
    [
        "name" => "Doe",
        "age" => 27,
        "email" => "doe@example.com"
    ],
    [
        "name" => "Smith",
        "age" => 25,
        "email" => "smith@example.com"
    ]
];

//conditional statements
// They are used to make decisions in a program.

$pushedPeople = [];

// if ($people[0]['age'] > 30) {
//     $pushedPeople[] = $people[0];
// }

// echo $pushedPeople[0]['name'];


// Loops
// They are used to repeat a block of code.

//For Loops
// A for loop is a loop that runs a block of code a specific number of times.
// for ($i = 0; $i < count($people); $i++) {
//     if ($people[$i]['age'] > 25) {
//         $pushedPeople[] = $people[$i];
//     }
// }

// echo $pushedPeople[0]['name'];

// For Each Loop    
// A for each loop is a loop that runs a block of code for each value in an array.
foreach ($people as $person1) {
    // echo $person1['name'];
}

// While Loops
// A while loop is a loop that runs a block of code while a condition is true.

$i = 0;
// while ($i < count($people)) {
//     echo $people[$i]['age'].', ';
//     $i++;
// }



// Operators
// They are used to perform operations on variables.

// Arithmetic Operators
// They are used to perform arithmetic operations on variables.
echo "10 + 10 = " . (10 + 10) . "\n";
echo "10 - 5 = " . (10 - 5) . "\n";
echo "10 * 5 = " . (10 * 5) . "\n";
echo "10 / 78 = " . (10 / 5) . "\n";

// Assignment Operators
// They are used to assign values to variables.
$x = 0;
for ($i = 5000; $i > 0; $i--) {
    $x = $x + 10;
}
echo "x = " . $x . "\n";

// Modulus Operator
// It is used to get the remainder of a division.
$a = [3528, 4722, 9875, 4688, 15428, 494949, 987654, 123456, 123456789, 1234567890, 154];

foreach ($a as $number) {
    $x = $number % 7;
    if ($x == 0) {
        echo "the number $number is divisible by 7 \n";
    } else {
        echo "the number $number is not divisible by 7 \n";
    }
}


echo "\n";
echo "\n";
// Comparison Operators
// They are used to compare two values.
$x = 10;
$y = "10";
if ($x == $y) {
    echo "x is equal to y \n";
} else {
    echo "x is not equal to y \n";
}
// The double equal sign is used to compare the value of two variables.
// The triple equal sign is used to compare the value and the type of two variables.

if ($x === $y) {
    echo "x is equal to y \n";
} else {
    echo "x is not equal to y \n";
}


echo "\n";
echo "\n";


$a = 10;
$b = 20;
if ($a > $b) {
    echo "a is greater than b \n";
} else {
    echo "a is not greater than b \n";
}

echo "\n";
echo "\n";

$c = 10;
$d = 20;
if ($c >= $d) {
    echo "c is greater than or equal to d \n";
} else {
    echo "c is not greater than or equal to d \n";
}

echo "\n";
echo "\n";

$e = 10;
$f = 20;
if ($e <= $f) {
    echo "e is less than or equal to f \n";
} else {
    echo "e is not less than or equal to f \n";
}

echo "\n";
echo "\n";



$g = 10;
$h = "0010";
if ($g != $h) {
    echo "g is not equal to h \n";
} else {
    echo "g is equal to h \n";
}
if ($g !== $h) {
    echo "g is not equal to h \n";
} else {
    echo "g is equal to h \n";
}
// not equal to with one equal sign is used to compare the value of two variables.
// not equal to with two equal signs is used to compare the value and the type of two variables.

// Logical Operators
// They are used to combine conditional statements.
//AND, OR, NOT, XOR, NAND, NOR, XNOR
// Logical AND
// It is used to combine conditional statements.

echo "\n";
echo "\n";

$x = 10;
$y = 20;
$z = 25;

if ($x > 5 && $y < 30 && $z > 25) {
    echo "x is greater than 5 and y is less than 30 and z is greater than 25 \n";
} else {
    echo "x is not greater than 5 or y is not less than 30 or z is not greater than 25 \n";
}


echo "\n";


$age = 18;
$is_male = true;

if (!($age < 18) && $is_male == true) {
    echo "You can Go to war \n";
} else {
    echo "You can't Go to war \n";
}

//AND &&
//OR ||
//NOT !



// Increment Operators
// They are used to increment a variable.

// Decrement Operators
// They are used to decrement a variable.
$x = 10;
$x++;
$x--;
$x--;
$x--;
$x--;


echo $x;


// Ternary Operators
// They are used to assign a value to a variable based on a condition.

echo "\n";
echo "\n";

$x = 15;

$y = ($x > 5) ? "x is greater than 5 \n" : "x is not greater than 5 \n";

echo $y;



// Bitwise Operators
// They are used to perform bitwise operations on variables.


// String Operators
// They are used to concatenate strings.
$x = "Hello";
$y = "World";
echo $x . " " . $y;

echo "\n";
echo "\n";

$Q = "Something went wrong: ";
$W = "The error is:";

echo $Q . $W;

// Array Operators
// They are used to perform operations on arrays.
echo "\n";
echo "\n";

$x = [1, 2, 3];
$y = [4, 5, 6];

print_r($x + $y);

// Type Operators
// They are used to check the type of a variable.
echo "\n";
echo "\n";

$x = 10;
$y = "10";

is_int($x);
is_string($y);
is_array($x);
is_float($x);
is_bool($x);
is_null($x);
is_numeric($x);
is_countable($x);
is_iterable($x);


if (is_int($x)) {
    echo "x is an integer \n";
} else {
    echo "x is not an integer \n";
}


//functions
// They are used to perform operations on variables.

$data = [
    [
        "name" => "John Doe",
        "age" => 20,
        "email" => "john@example.com",
        'phone' => '07033333333',
        'id' => '1235782'
    ],
    [
        "name" => "Jane Marge",
        "age" => 25,
        "email" => "jane@example.com",
        'phone' => '07033333333',
        'id' => '1235784'
    ],
    [
        "name" => "Doe John",
        "age" => 27,
        "email" => "doe@example.com",
        'phone' => '07033333333',
        'id' => '1235785'
    ],
    [
        "name" => "Smith John",
        "age" => 25,
        "email" => "smith@example.com",
        'phone' => '07033333333',
        'id' => '1235786'
    ],
    [
        "name" => "John Wilson",
        "age" => 20,
        "email" => "john@example.com",
        'phone' => '07033333333',
        'id' => '1235787'
    ],
    [
        "name" => "Steve Doe",
        "age" => 20,
        "email" => "steve@example.com",
        'phone' => '07033333333',
        'id' => '1235788'
    ],
    [
        "name" => "Justine Doe",
        "age" => 20,
        "email" => "justine@example.com",
        'phone' => '07033333333',
        'id' => '1235789'
    ],
];

function add(array $numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$x = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
echo add($x);


echo "\n";
echo "\n";


function getNumber(array $people)
{
    return count($people) . " people found";
}

echo getNumber($data);

echo "\n";
echo "\n";


// Assignment for Justine Stephanie - 30/01/2025

function getAverageAge(array $people)
{
    
}

echo getAverageAge($data);
