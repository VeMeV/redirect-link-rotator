<?php
// Check if the HTTP_REFERER is set
if (isset($_SERVER['HTTP_REFERER'])) {
    // Get the referrer URL
    $referrer = $_SERVER['HTTP_REFERER'];

    // Parse the URL to get the host (domain)
    $parsedUrl = parse_url($referrer);

    // Check if the host is set
    if (isset($parsedUrl['host'])) {
        // Get the clean domain (without http:// or https://)
        $cleanDomain = $parsedUrl['host'];

        // Output the clean domain
        $refdomain = $cleanDomain;
    } else {
        $refdomain = "direct";
    }
} else {
    $refdomain = "direct";
}