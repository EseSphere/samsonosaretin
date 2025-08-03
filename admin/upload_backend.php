<?php
require_once 'header.php';
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $rating = (int) $_POST['rating'];
    $proUrl = $_POST['project_url'];

    $slug = str_replace(' ', '-', $title);

    // File upload
    $filePath = '';
    if (isset($_FILES['project_file']) && $_FILES['project_file']['error'] == 0) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) mkdir($uploadDir);
        $filePath = $uploadDir . basename($_FILES["project_file"]["name"]);
        move_uploaded_file($_FILES["project_file"]["tmp_name"], $filePath);
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO uploaded_projects (`title`, `description`, `file_url`, `rating`, `slug`, `sampleurl`) 
    VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $title, $description, $filePath, $rating, $slug, $proUrl);
    $stmt->execute();
    header("Location: ./success");
    exit();
}
