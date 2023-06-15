<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
</head>
</html>

<?php include 'header.php'; ?>
<?php include 'db_conn.php'; ?>

<link rel="stylesheet" href="css/contacts.css">

<section class="contact-details">
  <div class="container">
    <h2>Contact Details</h2>
    <p>Email: esthermwkana@gmail.com</p>
    <p>Phone: +265 993 224 444</p>
    <p>Address: Mzuzu University, Mzuzu, Malawi</p>
  </div>
</section>

<section class="feedback-form">
  <div class="container">
    <h2>Feedback Form</h2>
    <form action="process_feedback.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
