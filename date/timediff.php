<?php
include '../../db_connect.php';
$sql = "SELECT TIMEDIFF('13:30:00', '10:00:00') AS time_difference FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMEDIFF() Function</title>
</head>

<body>
    <h2>TIMEDIFF() Function</h2>
    <p>Returns the difference between two time/datetime expressions</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Time Difference</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['time_difference'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
