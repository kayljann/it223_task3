<?php
include '../../db_connect.php';
$sql = "SELECT TIMESTAMP('2024-01-15', '10:30:00') AS timestamp_value FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMESTAMP() Function</title>
</head>

<body>
    <h2>TIMESTAMP() Function</h2>
    <p>Returns a datetime value based on a date or datetime value</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Timestamp Value</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['timestamp_value'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
