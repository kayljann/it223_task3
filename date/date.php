<?php
include '../../db_connect.php';
$sql = "SELECT NOW() AS datetime_value, DATE(NOW()) AS date_only FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE() Function</title>
</head>

<body>
    <h2>DATE() Function</h2>
    <p>Extracts the date part of a date or datetime expression</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>DateTime Value</th>
            <th>Date Only</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['datetime_value'] . "</td><td>" . $row['date_only'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
