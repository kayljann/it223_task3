<?php
include '../../db_connect.php';
$sql = "SELECT NOW() AS current_datetime, SUBTIME(NOW(), '01:30:00') AS time_minus_1h30m FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBTIME() Function</title>
</head>

<body>
    <h2>SUBTIME() Function</h2>
    <p>Subtracts time from a time/datetime and returns the time/datetime</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Current DateTime</th>
            <th>Time Minus 1h 30m</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['current_datetime'] . "</td><td>" . $row['time_minus_1h30m'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
