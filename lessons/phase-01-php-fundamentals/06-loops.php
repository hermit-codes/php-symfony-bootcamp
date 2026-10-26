<?php

// ==========================================
// Lesson 01.06 — Loops & Iteration
// ==========================================

// ==========================================
// While Loop
// ==========================================

$page = 1;
while ($page <= 5) {
    echo "Page $page completed\n";
    $page += 1;
}

// ==========================================
// Do...While Loop
// ==========================================
$reminder = 1;

do {
    echo "Reminder number $reminder\n";
    $reminder++;
} while ($reminder <= 3);

// ==========================================
// For Loop
// ==========================================
for ($session = 1; $session <= 5; $session += 1) {
    echo "Reading session $session completed\n";
}

// ==========================================
// Foreach Loop
// ==========================================

$books = [
    "Dune",
    "Neuromancer",
    "Foundation",
    "Snow Crash",
    "Hyperion"
];
foreach ($books as $book) {
    echo "Book in library: $book\n";
}

// ==========================================
// Book Manager Challenge
// Numbered Reading List
// ==========================================
foreach ($books as $index => $book) {
    echo "Book " . ($index + 1) . ": $book\n";
}
