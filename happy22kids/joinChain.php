<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "happykid_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$volevel = $_POST['volevel'];
$name = $_POST['name'];
$prof = $_POST['prof'];
$city = $_POST['city'];
$country = $_POST['country'];
$volunteer = isset($_POST['vol']) ? 1 : 0;
$contact = $_POST['contact'];
$remarks = $_POST['remarks'];

// Prepare and execute SQL query
$sql = "INSERT INTO user_details (`volevel`, `name`, `prof`, `city`, `country`, `vol`, `contact`, `remarks`) 
        VALUES ('$volevel', '$name', '$prof', '$city', '$country', $volunteer, '$contact', '$remarks')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
    echo "<br><a href='http://localhost/happy22kids/'>click me to back</a>";
    echo "<br><a href='http://localhost/happy22kids/chain4childrenscheer.php'>click me to Check New  data</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
