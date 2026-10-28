<?php

$genres = [
    "Fantasy",
    "Science Fiction",
    "Horror",
    "Mystery"
];

echo $genres[2];

// Modifying Array Elements
$genres = [
    "Fantasy",
    "Science Fiction",
    "Horror",
    "Mystery"
];

$genres[2] = "Thriller" . "\n";

// Adding Elements to an Indexed Array
$books = [
    "Dune",
    "Neuromancer",
    "Dracula"
];
$books[] = "The Hobbit";

// Counting Array Elements
$books = [
    "Dune",
    "Foundation",
    "Neuromancer",
    "The Hobbit"
];

echo count($books) . "\n";

// Removing Elements
$books = [
    "Dune",
    "Foundation",
    "Neuromancer"
];

$removedBook = array_pop($books); //array_pop removes LAST element

echo "Removed: $removedBook\n";
echo "Books remaining: " . count($books) . "\n";

// Removing a Specific Element
// Using the UNSET command
$books = [
    "Dune",
    "Foundation",
    "Neuromancer",
    "Dracula"
];

unset($books[1]);

// Reindexing Arrays
// array_values()
// This function returns a new array containing the original array's values, with sequential numeric indexes starting at 0.
$books = [
    "Dune",
    "Foundation",
    "Neuromancer",
    "Dracula"
];

unset($books[0]);

$books = array_values($books);

// Independent Book Manager Challenge
$books = [
    "Dune",
    "Foundation",
    "Neuromancer",
    "Dracula"
];

unset($books[1]);
$books = array_values($books);
echo "Books remaining: " . count($books) . "\n";
