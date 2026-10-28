<?php
// What Is an Associative Array?
$book = [
    "title" => "Dune",
    "author" => "Frank Herbert",
    "genre" => "Science Fiction",
    "pages" => 412
];
// Updating Associative Array Values
$book = [
    "title" => "Neuromancer",
    "author" => "William Gibson",
    "genre" => "Cyberpunk",
    "pages" => 271
];

$book["pages"] = 288;

// Adding New Key-Value Pairs
$book = [
    "title" => "Dune",
    "author" => "Frank Herbert",
    "genre" => "Science Fiction",
    "pages" => 412
];

$book["finished"] = false;

// Removing Key-Value Pairs
// unset also works with associative arrays
$book = [
    "title" => "Neuromancer",
    "author" => "William Gibson",
    "genre" => "Cyberpunk",
    "rating" => 5
];

unset($book["rating"]);

// Checking Whether a Key Exists
// PHP provides a function called array_key_exists().
// How It Works
// array_key_exists("rating", $book);
$book = [
    "title" => "Neuromancer",
    "author" => "William Gibson",
    "rating" => 5
];

if (array_key_exists("rating", $book)) {
    echo "This book has a rating.\n";
} else {
    echo "This book has no rating.\n";
}

// Checking Keys with isset()
$book = [
    "title" => "Dune",
    "rating" => null
];

var_dump(array_key_exists("rating", $book));
// bool(true)
var_dump(isset($book["rating"]));
// bool(false)

// Iterating Over Associative Arrays
$book = [
    "title" => "Dune",
    "author" => "Frank Herbert",
    "genre" => "Science Fiction"
];

foreach ($book as $key => $value) {
    echo "$key: $value\n";
}

// title: Dune
// author: Frank Herbert
// genre: Science Fiction

// Independent Practice Challenge
$book = [
    "title" => "Dune",
    "author" => "Frank Herbert",
    "genre" => "Science Fiction",
    "pages" => 412
];

foreach ($book as $key => $value) {
    echo "$key: $value\n";
}

// Independent Challenge #2
$book = [
    "title" => "Neuromancer",
    "author" => "William Gibson",
    "genre" => "Cyberpunk"
];
$book["rating"] = 5;
foreach ($book as $key => $value) {
    echo "$key: $value\n";
}

// Final Practical Assessment
$book = [
    "title" => "Dune",
    "author" => "Frank Herbert",
    "genre" => "Science Fiction",
    "rating" => 5
];
unset($book["rating"]);
if (array_key_exists("rating", $book)) {
    echo $book['title'] . " has a rating\n";
} else {
    echo $book["title"] . " has not been rated yet.\n";
}
