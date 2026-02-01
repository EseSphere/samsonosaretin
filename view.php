<?php
include_once('header_panel.php');
require_once 'db_connect.php';
if (isset($_GET['slug'])) {
    $slug = mysqli_real_escape_string($conn, $_GET['slug']);
    $sql = "SELECT * FROM uploaded_projects WHERE slug = '$slug' ORDER BY uploaded_at DESC";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error in query execution: " . mysqli_error($conn));
    }
} else {
    echo "No project found.";
    exit;
}
?>

<!-- Header -->
<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1>Project Details</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->

<!-- Project Section -->
<?php if (mysqli_num_rows($result) > 0): ?>
    <!-- Loop through each project -->
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <!-- Project Image Section -->
        <div class="ex-basic-1 pt-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if (!empty($row['file_url']) && file_exists($row['file_url'])): ?>
                            <img class="img-fluid mt-5 mb-3" src="./admin/uploads/<?= htmlspecialchars($row['file_url']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                        <?php else: ?>
                            <img class="img-fluid mt-5 mb-3" src="./admin/uploads/<?= htmlspecialchars($row['file_url']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Info Section -->
        <div class="ex-basic-1 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h3><?= htmlspecialchars($row['title']) ?></h3>
                        <a href="<?= htmlspecialchars($row['sampleurl']) ?>" class="text-decoration-underline" class="btn btn-info btn-block"><?= htmlspecialchars($row['sampleurl']) ?></a>
                        <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                        <p><strong>Rating:</strong> <?= (int)$row['rating'] ?>/5</p>
                        <p class="mb-5"><small>Uploaded at: <?= date("F j, Y, g:i a", strtotime($row['uploaded_at'])) ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <!-- If no projects found -->
    <div class="container text-center pt-0 pb-0">
        <p>No projects uploaded yet.</p>
    </div>
<?php endif; ?>

<?php
// Close the database connection
?>



<!-- Basic -->
<div class="ex-basic-1 pt-0 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <p class="mb-5">
                    This package boasts standout features such as a captivating morphing header text, an interactive details lightbox for in-depth information, animated statistics counters highlighting key metrics, a sleek card slider for testimonials, a dynamic image carousel showcasing customer logos, and fully functional forms designed to capture leads and drive your marketing success.
                </p>

                <h2 class="mb-4">New Enhancements Included in the Package</h2>
                <img class="img-fluid mb-5" src="images/project-details-small.jpg" alt="alternative">
                <p>
                    The template also comes with essential supplementary pages including article details, terms and conditions, and privacy policy each fully customizable to suit your brand’s needs. Riga features a striking dark-themed design accented with warm tones and geometric background elements, crafted to make your mobile app truly stand out.
                </p>
                <p class="mb-5">
                    Leon is a highly adaptable landing page HTML template developed using Bootstrap. It is tailored for promoting mobile apps to a broad online audience and encouraging downloads from app stores. Built on HTML, CSS, and Bootstrap, it offers maximum flexibility and ease of customization for all skill levels.
                </p>

                <div class="text-box mb-5">
                    <h3>Why Visitors Love an Attractive and Functional Website</h3>
                    <p>
                        Whether you’re a designer, developer, or tech enthusiast, this template can be effortlessly customized with basic web development skills. It includes advanced features such as a details lightbox for expanded content, tabbed sections for showcasing app features, a video lightbox for engaging media, a testimonial card slider, animated statistical counters, an image slider for brand logos, intuitive dropdown navigation, and useful extra pages for legal and informational content.
                    </p>
                </div> <!-- end of text-box -->

                <p class="mb-4">
                    Accentuated with vibrant call-to-action green highlights, the overall landing page design is crafted to beautifully showcase your app and encourage visitors to download it. The palette blends orange, gray, and purple hues against minimalist backgrounds, ensuring your content and imagery take center stage.
                </p>

                <ul class="list-unstyled li-space-lg mb-5">
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Interactive card slider</strong> featuring client testimonials and animated statistics to highlight key figures, plus a smooth image carousel displaying trusted customer logos.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Responsive dropdown navigation</strong> paired with comprehensive extra pages including article details, terms & conditions, and privacy policies, all ready for your custom content.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Elegant and clean design</strong> that combines modern purple, orange, and gray tones with minimalist backgrounds for maximum content impact.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Strategic use of call-to-action green</strong> elements to guide user interaction and boost conversion rates.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Built on HTML, CSS, and Bootstrap</strong> to guarantee flexibility and ease of use across all devices and user levels.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Tabbed content areas</strong> to neatly organize app features and details for an enhanced user experience.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Video lightbox integration</strong> allowing smooth embedding and playback of promotional videos without navigating away.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"><strong>Fully functional lead capture forms</strong> designed to seamlessly gather visitor information and boost your marketing efforts.</div>
                    </li>
                </ul>

                <a class="btn-solid-reg mb-5" href="./">Back</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of basic -->


<?php include_once('footer_panel.php'); ?>