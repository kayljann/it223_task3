<?php
include '../../db_connect.php';
$sql = "SELECT NOW() AS current_datetime, MICROSECOND(NOW()) AS microsecond_value FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MICROSECOND() Function</title>
</head>

<body>
    <h2>MICROSECOND() Function</h2>
    <p>Returns the microsecond part of a time/datetime</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Current DateTime</th>
            <th>Microsecond</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['current_datetime'] . "</td><td>" . $row['microsecond_value'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
