<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $query = $_POST['query'];
    $marketing = isset($_POST['marketing']) ? 'Yes' : 'No';
    
    // Store form data in a text file
    $file = fopen("form_data.txt", "a");
    fwrite($file, "Email: $email\nQuery: $query\nMarketing: $marketing\n\n");
    fclose($file);
    
    // Redirect to a thank you page after successful submission
    header("Location: thankyou.html");
    exit;
}
