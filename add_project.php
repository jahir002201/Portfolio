<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Add New Project</h1>
    <form action="process_add_project.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Project Link</label>
            <input type="text" class="form-control" id="link" name="link" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Project</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
