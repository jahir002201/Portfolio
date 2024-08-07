<?php
include 'includes/config.php';
include 'classes/Database.php';
include 'classes/Portfolio.php';

$id = $_GET['id'];
$portfolio = new Portfolio();

if ($portfolio->deleteProject($id)) {
    echo "Project deleted successfully!";
} else {
    echo "Failed to delete project.";
}
?>
