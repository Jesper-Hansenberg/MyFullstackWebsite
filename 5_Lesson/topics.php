
<?php
include('./header.php');

if ($_POST['topic_id']) {
    include("../2_Lesson/mySqlConnect.php");

    $sql = "
    SELECT 
        categories.cat_name,
        topics.topic_subject,
        posts.post_topic,
        posts.post_content,
        posts.post_date,
        users.user_name
    FROM   posts
        LEFT JOIN users
            ON posts.post_by = users.user_id
        LEFT JOIN topics
            ON posts.post_topic = topics.topic_id
        LEFT JOIN categories
            ON categories.cat_id = topics.topic_cat 
    WHERE
            topics.topic_id = '" . $_POST['topic_id'] . "'
    ";
    $result = $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    if ($result->num_rows > 0) {

        echo "<table border='1'>
    <tr>
    <th>Username</th>
    <th>Topic</th>
    <th>Content</th>
    <th>Created</th>
    </tr>";

        while ($row = mysqli_fetch_array($result)) {

            $a = $row['user_name'];
            $b = $row['post_topic'];
            $c = $row['post_content'];
            $d = $row['post_date'];

            echo "<tr>";

            echo "<td>" . $a . "</td>";
            echo "<td>" . $b . "</td>";
            echo "<td>" . $c . "</td>";
            echo "<td>" . $d . "</td>";


            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
    }
}


include('./footer.php');
?>

