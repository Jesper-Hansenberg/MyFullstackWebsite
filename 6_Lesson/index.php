<?php
include('./header.php');

$files = scandir('../resources/');
if ($files !== false) {
    foreach ($files as $f) {
        if ($f == '..' || $f == '.') continue;
?>
        <img src="<?php echo '../resources/' . $f ?>" alt="<?php echo $f ?>" title="">
<?php
    }
}
?>

<div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</div>

<?php

include('./footer.php');
?>