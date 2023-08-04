<?php
$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1)
{
    $row = mysqli_fetch_array($results);
    $name = $row['name'];
}


if (isset($_POST["submit"])) {
    $pdf_file = $_FILES['anal_bathmologia'];
    $file_name = $pdf_file['name'];
    $upload_folder = 'uploads/';
    $file_path = $upload_folder . $file_name;
    if (move_uploaded_file($_FILES["anal_bathmologia"]["name"], $file_path)) {
        echo "The file " . htmlspecialchars(basename($_FILES["anal_bathmologia"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $pdf_file2 = $_FILES['CV'];
    $file_name2 = $pdf_file2['name'];
    $upload_folder2 = 'uploads/';
    $file_path2 = $upload_folder2 . $file_name2;
    if (move_uploaded_file($_FILES["CV"]["name"], $file_path2)) {
        echo "The file " . htmlspecialchars(basename($_FILES["CV"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $id = uniqid();    
    $job_description = mysqli_real_escape_string($db, $_POST['job_description']);
    $job_id= mysqli_real_escape_string($db, $_POST['job_id']);
    $query = "INSERT INTO offers (anal_bathmologia,CV,job_description,email,job_id,id) VALUES ('$file_name', '$file_name2', '$job_description','$email','$job_id','$id')";
    mysqli_query($db, $query);
    header("Location: index3.php?message=File uploaded successfully");
}

?>