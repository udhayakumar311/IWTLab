<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_management";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$employee_id = $_POST['employee_id'];
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$date_of_birth = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$department = $_POST['department'];
$position = $_POST['position'];
$salary = $_POST['salary'];

// SQL query to insert data into the database
$sql = "INSERT INTO employee (employee_id, first_name, last_name, date_of_birth, gender, email, phone, address, department, position, salary)
        VALUES ('$employee_id', '$first_name', '$last_name', '$date_of_birth', '$gender', '$email', '$phone', '$address', '$department', '$position', '$salary')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
