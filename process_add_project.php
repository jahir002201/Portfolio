<?php
include 'includes/config.php';
include 'classes/Database.php';
include 'classes/Portfolio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $link = htmlspecialchars($_POST['link']);
    
    // Handle file upload
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_path = 'assets/images/' . basename($image);
    move_uploaded_file($image_tmp, $image_path);

    $portfolio = new Portfolio();
    if ($portfolio->addProject($title, $description, $image, $link)) {
        echo "Project added successfully!";
    } else {
        echo "Failed to add project.";
    }
}
?>
