<?php
include 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert the data into the contacts table
  $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql) === TRUE) {
    // Display a thank you message using an alert
    echo '<script>alert("Thank you for your feedback!");</script>';

    // Redirect to index.php after a short delay
    echo '<script>
            setTimeout(function() {
              window.location.href = "index.php";
            }, 2000);
          </script>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
