<?php
// Array of redirect URLs
$urls = [
    'https://example1.com',
    'https://example2.com',
    'https://example3.com',
    'https://example4.com',
    'https://example5.com'
];

// File to store the current index
$indexFile = 'current_index.txt';

// Get current index
if (file_exists($indexFile)) {
    $currentIndex = (int)file_get_contents($indexFile);
} else {
    $currentIndex = 0;
}

// Get the current URL
$currentUrl = $urls[$currentIndex];

// Calculate next index
$nextIndex = ($currentIndex + 1) % count($urls);

// Save next index
file_put_contents($indexFile, $nextIndex);

// Perform the redirect
header("Location: " . $currentUrl);
exit();
