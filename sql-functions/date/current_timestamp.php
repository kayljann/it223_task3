<?php
include '../../db_connect.php';
$sql = "SELECT CURRENT_TIMESTAMP() AS current_ts FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURRENT_TIMESTAMP() Function</title>
</head>

<body>
    <h2>CURRENT_TIMESTAMP() Function</h2>
    <p>Returns the current date and time</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Current Timestamp</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['current_ts'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
