<?php
include 'dbconn.php';


//Global Vars - Edit values for your web site. leave as is in most cases.
$image_dir = "../uploads/"; //physical path to uploads folder
$image_url = "http://".$_SERVER['HTTP_HOST']."/uploads/"; //web path to uploads folder
$target_dir = $image_dir;

//Custom CSS file paths
$customCss_dir = '../css/custom.css'; //physical path to custom css file
$customCss_url = "http://".$_SERVER['HTTP_HOST']."/css/custom.css"; //web path to custom css file

//establish db connection
try {
    $db_conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

//db connection is closed in includes/footer.php
?>