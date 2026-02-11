<?php
include '../../db_connect.php';
$sql = "SELECT NOW() AS current_datetime, TIME_FORMAT(NOW(), '%H:%i:%s') AS formatted_time FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIME_FORMAT() Function</title>
</head>

<body>
    <h2>TIME_FORMAT() Function</h2>
    <p>Formats a time by a specified format</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Current DateTime</th>
            <th>Formatted Time</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['current_datetime'] . "</td><td>" . $row['formatted_time'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
