
<?php
include('./header.php');

if ($_POST['cat_title'] && $_POST['cat_desc']) {
    include("../2_Lesson/mySqlConnect.php");

    $sql = "
    INSERT INTO 
            `categories`(`cat_name`, `cat_description`) 
        VALUES 
            ('" . $_POST['cat_title'] . "','" . $_POST['cat_desc'] . "')
    ";
    $result = $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    mysqli_close($conn);
    header("location: ./index.php");
    exit;
}


include('./footer.php');
?>

