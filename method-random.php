<?php
// Array of redirect URLs
$urls = [
    'https://example1.com',
    'https://example2.com',
    'https://example3.com',
    'https://example4.com',
    'https://example5.com'
];

try {
    // Get random URL from array
    $randomIndex = array_rand($urls);
    $redirectUrl = $urls[$randomIndex];
    
    // Set headers to prevent caching
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    
    // Perform redirect
    header("Location: " . $redirectUrl, true, 302);
    exit();
    
} catch (Exception $e) {
    // Log error (you may want to customize this)
    error_log("Redirect error: " . $e->getMessage());
    
    // Display user-friendly error
    die("An error occurred. Please try again later.");
}
?>