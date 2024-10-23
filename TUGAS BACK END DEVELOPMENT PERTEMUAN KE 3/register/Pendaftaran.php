<?php
include 'db.php'; // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];   // Assuming the form field has name="name"
    $course = $_POST['course'];  // Assuming form field name="course"
    $class = $_POST['class'];  // Assuming form field name="class"
    
    // SQL query to insert data into the users table
    $sql = "INSERT INTO users (name, course, class) VALUES ('$name', '$course', '$class')";

    // Execute query and check if successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

?>
