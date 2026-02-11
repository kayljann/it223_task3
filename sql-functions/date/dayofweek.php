<?php
include '../../db_connect.php';
$sql = "SELECT hire_date, DAYOFWEEK(hire_date) AS day_of_week FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAYOFWEEK() Function</title>
</head>

<body>
    <h2>DAYOFWEEK() Function</h2>
    <p>Returns the weekday index for a given date (1=Sunday, 7=Saturday)</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Hire Date</th>
            <th>Day of Week</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['hire_date'] . "</td><td>" . $row['day_of_week'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
