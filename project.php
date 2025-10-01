<?php
include_once('header_panel.php');
// Fetch projects
$sql = "SELECT * FROM uploaded_projects ORDER BY uploaded_at DESC";
$result = mysqli_query($conn, $sql);
?>
<!-- Header -->
<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1>Projects</h1>
            </div>
        </div>
    </div>
</header>
<!-- end of header -->

<!-- Terms & Conditions Content -->
<div class="ex-basic-1 pt-5 pb-5">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-lg-12">
                <h2 class="h2-heading">Delivered projects</h2>
                <p class="p-heading">Listed below are some of the most representative projects I've worked on. They range from basic web design for presentation sites to advanced web development for online shops</p>
            </div>
        </div>

        <div class="row">
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="col-lg-4 mb-5">
                        <div class="text-container">
                            <div class="image-container">
                                <a href="./view?slug=<?= $row['slug'] ?>">
                                    <img src="./admin/uploads/<?= htmlspecialchars($row['file_url']) ?>" style="height: 200px; width:100%;" class="img-fluid" alt="<?= htmlspecialchars($row['title']) ?>">
                                </a>
                            </div>
                            <p>
                                <strong>Project:</strong> <?= htmlspecialchars($row['title']) ?><br>
                                <?= htmlspecialchars(mb_strimwidth($row['description'], 0, 80, "...")) ?>
                                <br>
                                <a type="button" class="btn btn-sm btn-info block text-decoration-none" href="./view?slug=<?= $row['slug'] ?>">More</a>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-lg-12">
                    <p>No projects found.</p>
                </div>
            <?php endif; ?>
        </div> <!-- end of row -->
    </div>
</div> <!-- end of basic-3 -->
<!-- end of Terms & Conditions content -->

<?php include_once('footer_panel.php'); ?>