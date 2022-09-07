<?php 
include("../2_Lesson/mySqlConnect.php"); 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {

    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Pass</th>
    <th>Email</th>
    <th>Created</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" . $row['user_pass'] . "</td>";
        echo "<td>" . $row['user_email'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
}
?>
