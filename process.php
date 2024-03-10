<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Process the data (you can perform database operations or send emails here)
    
    // For this example, let's simply display the submitted data
    echo "<h2>Submitted Data:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>
