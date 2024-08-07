<?php include 'includes/config.php'; ?>
<?php include 'classes/Database.php'; ?>
<?php include 'classes/Portfolio.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container mt-5">
    <!-- Personal Information Section -->
    <div class="text-center mb-5">
        <h5 class="card-title">Jahir Islam</h5>
        <p class="card-text">
            Hello, I'm Jahir Islam, a passionate developer with expertise in JavaScript, ReactJS, and Node.js. 
            I love creating web applications that are both functional and visually appealing. 
            I am currently learning Next.js to expand my skillset further. 
            When I'm not coding, I enjoy reading about the latest trends in technology and experimenting with new programming techniques.
        </p>
    </div>

    <!-- Projects Section -->
    <h1 class="text-center">My Projects</h1>
    <div class="row">
        <?php
        $portfolio = new Portfolio();
        $projects = $portfolio->getProjects();
        foreach ($projects as $project) {
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4">';
            echo '<img src="assets/images/' . $project['image'] . '" class="card-img-top" alt="' . $project['title'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $project['title'] . '</h5>';
            echo '<p class="card-text">' . $project['description'] . '</p>';
            echo '<a href="' . $project['link'] . '" class="btn btn-primary">View Project</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
