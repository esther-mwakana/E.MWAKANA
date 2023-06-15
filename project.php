<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
</head>
</html>

<?php
include 'header.php';
include 'db_conn.php';

// Retrieve projects from the database
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

// Check if any projects are found
if ($result->num_rows > 0) {
    ?>
    <link rel="stylesheet" href="css/projects.css">
    <section class="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="project-list">
                <?php
                // Display each project
                while ($row = $result->fetch_assoc()) {
                    $projectName = $row['project_name'];
                    $description = $row['description'];

                    echo '<div class="project">
                            <h3 class="project-name">' . $projectName . '</h3>
                            <p class="project-description">' . $description . '</p>
                        </div>';
                }
                ?>
            </div>
        </div>
    </section>
    <?php
} else {
    echo "<p>No projects found.</p>";
}

include 'footer.php';
?>
