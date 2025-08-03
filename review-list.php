<!-- review_list.php -->
<?php
$conn = new mysqli("localhost", "root", "", "your_database_name");
$result = $conn->query("SELECT * FROM tbl_reviews ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html>

<head>
    <title>All Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fa-star.checked {
            color: #ffd700;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">User Reviews</h2>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($row['rater_name']) ?></h5>
                    <p>
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <i class="fa fa-star <?= $i <= $row['rating'] ? 'checked' : '' ?>"></i>
                        <?php endfor; ?>
                    </p>
                    <p class="card-text"><?= nl2br(htmlspecialchars($row['comment'])) ?></p>
                    <small class="text-muted">Posted on <?= $row['submitted_at'] ?></small>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <script src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>
</body>

</html>