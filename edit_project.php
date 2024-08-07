<?php
include 'includes/config.php';
include 'classes/Database.php';
include 'classes/Portfolio.php';

$id = $_GET['id'];
$portfolio = new Portfolio();
$project = $portfolio->getProjectById($id);
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Edit Project</h1>
    <form action="process_edit_project.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $project['title']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $project['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="assets/images/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" width="100">
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Project Link</label>
            <input type="text" class="form-control" id="link" name="link" value="<?php echo $project['link']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
