
<?php
include('./header.php');
include("../2_Lesson/mySqlConnect.php");

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {

    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Category</th>
    <th>Description</th>
    </tr>";

    while ($row = mysqli_fetch_array($result)) {

        $CI = $row['cat_id'];
        $CN = $row['cat_name'];
        $CD = $row['cat_description'];

        echo "<tr>";
        echo '<td> <form method="post" action="categories.php"> <input type="submit" name="cat_id" value="' . $CI . '"/> </form> </td>';
        echo "<td> " . $CN . " </td>";
        echo "<td>" . $CD . "</td>";

        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
}

?>

<div>
    <form action="postCategory.php" method="post">
        <input type="text" name="cat_title" value="Title"/>
        <input type="text" name="cat_desc" value="Description"/>
        <input type="submit" value="Create new"/>
    </form>
</div>

<?php

include('./footer.php');
?>

