<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $class = $_POST['class'];

    // Process the registration logic here
    // For example, saving the data to the database
    
    echo "Registration successful for $name in $course (Class: $class)";
}
?>