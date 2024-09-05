<?php
$alph = [
    "b" => 2,
    "a" => 1,
    "d" => 4,
    "c" => 3
];

ksort($alph);  // Sorts the array by key

print_r($alph);


//- PHP Program sort array by key

$array = [
    "first" => [
        "a" => [
            "apple",
            "banana",
            "nested" => [
                "more" => [
                    "inner" => [
                        "target" => "You found me!"
                    ]
                ]
            ]
        ],
        "b" => "simple value"
    ],
    "second" => [
        "x" => [
            "y" => [
                "z" => "This is not the target"
            ]
        ]
    ]
];

// to get Output: You found me!
echo $array["first"]["a"]["nested"]["more"]["inner"]["target"]; 

/*##########################################################################*/

$non = [1, 2, 2, 3, 4, 4, 5];

$non = array_unique($non);  // Removes duplicate values

print_r($non);


/*##########################################################################*/


// Sample array with lowercase items
$fruit = ["apple", "banana", "cherry"];

// Let's say you want to change "banana" to uppercase
$key = array_search("banana", $fruit); // Find the index of "banana"

if ($key !== false) {
    $fruit[$key] = strtoupper($fruit[$key]); // Change to uppercase
}

print_r($fruit); // Output the modified array

$user = ["mohamed gamal", "walid hossam", "youssef shawkat", "ahmed mohamed", "tamer najah"];
// Let's say We want to capitalize the first letter of youssef shawkat's name
$user[2] = ucwords($user[2]);

print_r($user);

/*##########################################################################*/


//Check if an Element Exists in an Array or Not
$array = ["apple", "banana", "cherry"];
$element = "banana";

if (in_array($element, $array)) {
    echo "$element exists in the array.";
} else {
    echo "$element does not exist in the array.";
}

?>
