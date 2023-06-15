<!DOCTYPE html>
<html lang="en">
<head>
    <title>Skills</title>
</head>
</html>

<?php
include 'header.php';
include 'db_conn.php';
?>
<link rel="stylesheet" href="css/skills.css">
<section class="skills">
  <div class="container">
    <h2>Skills</h2>
    <div class="skill-list">
      <?php
      // Retrieve skills from the database
      $sql = "SELECT * FROM skills";
      $result = $conn->query($sql);

      // Check if any skills are found
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $skill = $row['skill'];
          ?>
          <div class="skill-item">
            <?php echo $skill; ?>
          </div>
          <?php
        }
      } else {
        echo "<p>No skills found.</p>";
      }
      ?>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
