<?php
include 'db_conn.php';

// Add dummy projects
$projects = array(
    array('Website Development', 'Creating a responsive website for a client'),
    array('Mobile App Development', 'Building a cross-platform mobile app'),
    array('Database Management', 'Designing and optimizing databases for efficient data storage')
);

foreach ($projects as $project) {
    $name = $project[0];
    $description = $project[1];

    $sql = "INSERT INTO projects (project_name, description) VALUES ('$name', '$description')";
    $conn->query($sql);
}

// Add dummy skills
$skills = array(
    'Web Development',
    'Mobile App Development',
    'Database Management'
);

foreach ($skills as $skill) {
    $sql = "INSERT INTO skills (skill) VALUES ('$skill')";
    $conn->query($sql);
}

$conn->close();
?>
