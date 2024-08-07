<?php
include 'includes/config.php';
include 'classes/Database.php';
include 'classes/Portfolio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $link = htmlspecialchars($_POST['link']);

    // Handle file upload
    $image = $_FILES['image']['name'];
    if ($image) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = 'assets/images/' . basename($image);
        move_uploaded_file($image_tmp, $image_path);
    } else {
        // Preserve existing image
        $image = $_POST['existing_image'];
    }

    $portfolio = new Portfolio();
    if ($portfolio->updateProject($id, $title, $description, $image, $link)) {
        echo "Project updated successfully!";
    } else {
        echo "Failed to update project.";
    }
}
?>
