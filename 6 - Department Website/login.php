<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Basic input validation
    if (empty($username) || empty($password)) {
        echo "Both username and password are required.";
    } else {
        // Database connection settings
        $host = "localhost"; // Your database host
        $db_name = "departmentweb";
        $db_user = "root";
        $db_pass = "";

        try {
            // Create a PDO instance
            $db = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retrieve user data from the database
            $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Successful login, redirect to a welcome page
                header("Location: welcome.html");
            } else {
                echo "Invalid username or password. Please try again.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
