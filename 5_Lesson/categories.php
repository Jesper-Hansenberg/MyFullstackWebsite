<?php
include('./header.php');

if ($_POST['cat_id']) {
    include("../2_Lesson/mySqlConnect.php");

    $sql = "
    SELECT 
        categories.cat_name,
        topics.topic_id,
        topics.topic_subject,
        topics.topic_by,
        users.user_name
    FROM topics
        LEFT JOIN users
            ON topics.topic_by = users.user_id
        LEFT JOIN categories
            ON categories.cat_id = topics.topic_cat 
    WHERE
	        categories.cat_id = '" . $_POST['cat_id'] . "'
    ";
    $result = $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    if ($result->num_rows > 0) {

        echo "<table border='1'>
    <tr>
    <th>Category</th>
    <th>Subject</th>
    <th>posted by</th>
    </tr>";

        while ($row = mysqli_fetch_array($result)) {

            $CN = $row['topic_subject'];
            $CD = $row['user_name'];

            echo "<tr>";
            echo '<td> <form method="post" action="topics.php"> <input type="submit" name="topic_id" value="' . $row['topic_id'] . '"/> </form> </td>';
            echo "<td>" . $CN . "</td>";
            echo "<td>" . $CD . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
    }
}




include('./footer.php');
?>