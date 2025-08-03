<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Submitted</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #198754;
            /* Bootstrap 'bg-success' color */
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .thank-you-box {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
        }

        p {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="thank-you-box text-center">
        <h1 class="mb-3">Thank You for Your Review!</h1>
        <p>Your feedback has been submitted successfully.</p>
        <a href="review.php" class="btn btn-light mt-4">Submit Another</a>
    </div>
</body>

</html>