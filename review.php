<?php
// review_form.php
require_once 'db_connect.php';

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rater_name = $conn->real_escape_string($_POST['rater_name']);
    $rating = (int) $_POST['rating'];
    $comment = $conn->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO tbl_reviews (rater_name, rating, comment) VALUES ('$rater_name', $rating, '$comment')";
    if ($conn->query($sql)) {
        header("Location: ./review-successful");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Submit a Review | Samson Osaretin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Samson Gift Osaretin is a Full Stack Web Developer based in Wolverhampton, UK, with over 6 years of experience in web and mobile development.">
    <meta name="author" content="Samson Gift Osaretin">

    <!-- OG Meta Tags -->
    <meta property="og:site_name" content="Samson Gift Osaretin Portfolio" />
    <meta property="og:site" content="https://samsonosaretin.com" />
    <meta property="og:title" content="Samson Gift Osaretin | Full Stack Web Developer" />
    <meta property="og:description" content="Explore the professional portfolio of Samson Gift Osaretin, a seasoned Full Stack Developer skilled in web and mobile technologies." />
    <meta property="og:image" content="./images/favicon.jpg" />
    <meta property="og:url" content="https://samsonosaretin.com" />
    <meta name="twitter:card" content="summary_large_image">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <!-- Correct Font Awesome CDN -->
    <link rel="icon" href="./images/favicon.jpg">
    <style>
        .star-rating .fa-star {
            color: #ccc;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .star-rating .fas {
            color: #ffd700;
        }
    </style>
</head>


<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center flex align-items-center">
            <div style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;" class="col-md-6 p-4 bg-white rounded">
                <h3 class="">Leave a Review</h3>
                <p class="text-dark">Kindly leave a review for Samson Osaretin</p>
                <hr>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="rater_name" class="form-label">Your Name</label>
                        <input type="text" name="rater_name" id="rater_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <div class="star-rating">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i class="far fa-star" data-value="<?= $i ?>"></i>
                            <?php endfor; ?>
                            <input type="hidden" name="rating" id="rating" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const stars = document.querySelectorAll('.fa-star');
        const ratingInput = document.getElementById('rating');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const selected = this.getAttribute('data-value');
                ratingInput.value = selected;
                updateStars(selected);
            });
        });

        function updateStars(count) {
            stars.forEach(star => {
                const val = star.getAttribute('data-value');
                if (val <= count) {
                    star.classList.remove('far');
                    star.classList.add('fas');
                } else {
                    star.classList.remove('fas');
                    star.classList.add('far');
                }
            });
        }

        // Initialize empty selection
        updateStars(0);
    </script>
</body>

</html>