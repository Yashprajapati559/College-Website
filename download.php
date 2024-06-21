<?php
// Check if the file parameter is set
if (isset($_GET['file'])) {
    // Get the file path from the file parameter
    $file = $_GET['file'];
    
    // Set headers for PDF download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));

    // Output the file content
    readfile($file);
    exit;
} else {
    // If file parameter is not set, redirect to an error page
    header("Location: error.php");
    exit;
}
?>
