<?php
include '../../db_connect.php';
$sql = "SELECT NOW() AS datetime_value, TIME(NOW()) AS time_only FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIME() Function</title>
</head>

<body>
    <h2>TIME() Function</h2>
    <p>Extracts the time part of a time/datetime expression</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>DateTime Value</th>
            <th>Time Only</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['datetime_value'] . "</td><td>" . $row['time_only'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
