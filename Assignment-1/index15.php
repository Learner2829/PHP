<?php

// Sample text
$text = "The quick brown fox jumps over the lazy dog.";

// Using preg_match() to find a pattern
$pattern = "/fox/";
if (preg_match($pattern, $text)) {
    echo "Pattern found using preg_match().<br>";
} else {
    echo "Pattern not found using preg_match().<br>";
}

// Using preg_match_all() to find all occurrences of a pattern
$pattern = "/the/i"; // Case-insensitive search for occurrences of "the"
if (preg_match_all($pattern, $text, $matches)) {
    echo "Total occurrences of 'the': " . count($matches[0]) . "<br>";
} else {
    echo "No occurrences of 'the' found using preg_match_all().<br>";
}

// Using preg_replace() to replace a pattern
$pattern = "/lazy/";
$replacement = "active";
$newText = preg_replace($pattern, $replacement, $text);
echo "Text after replacement: $newText<br>";

// Using preg_split() to split a string based on a pattern
$pattern = "/\s+/"; // Splitting by one or more whitespace characters
$words = preg_split($pattern, $text);
echo "Words in the text:<br>";
foreach ($words as $word) {
    echo $word . "<br>";
}
