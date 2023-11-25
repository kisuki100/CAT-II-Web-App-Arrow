<?php
require_once "../configs/dbConn.php";

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["send_AuthorBiography"])) {
    $AuthorId = filter_var($_POST["AuthorId"], FILTER_SANITIZE_STRING);
    $AuthorFullName = filter_var($_POST["AuthorFullName"], FILTER_SANITIZE_STRING);
    $AuthorEmail = filter_var($_POST["AuthorEmail"], FILTER_VALIDATE_EMAIL);
    $AuthorAddress = addslashes($_POST["AuthorAddress"]);
    $AuthorBiography = addslashes($_POST["AuthorBiography"]);
    $AuthorDateOfBirth = addslashes($_POST["AuthorDateOfBirth"]);
    $AuthorSuspended = $_POST["AuthorSuspended"];  // Assuming it's a boolean value

    // Validate the email and ID
    if (!$AuthorEmail || !filter_var($AuthorId, FILTER_VALIDATE_INT)) {
        die("Invalid email address or ID");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO authorstb (AuthorId, AuthorFullName, AuthorEmail, AuthorAddress, AuthorBiography, AuthorDateOfBirth, AuthorSuspended) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$AuthorId, $AuthorFullName, $AuthorEmail, $AuthorAddress, $AuthorBiography, $AuthorDateOfBirth, $AuthorSuspended]);

        header("Location: ../authordb/ViewAuthors.php");
        exit();
    } catch (PDOException $e) {
        // Check for duplicate entry error
        if ($e->getCode() == '23000' && strpos($e->getMessage(), 'Duplicate entry') !== false) {
            echo "Error: AuthorId $AuthorId already exists. Choose a different one.";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}

// ... (rest of your code)
?>
