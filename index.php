<?php

// Make this redirect context-sensitive
$current_location = $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI']; 

// Strip off trailing slash
$current_location = rtrim($current_location, '/');

// Create absolute URL
$destination = "http://" . $current_location . "/prospectus/course.html";

// Forward users to the example page
header("Location: " . $destination, 301);

?>
