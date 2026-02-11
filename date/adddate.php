<?php
include '../../db_connect.php';
$sql = "SELECT hire_date, ADDDATE(hire_date, INTERVAL 30 DAY) AS date_plus_30 FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDDATE() Function</title>
</head>

<body>
    <h2>ADDDATE() Function</h2>
    <p>Adds a time/date interval to a date and returns the date</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Hire Date</th>
            <th>Date Plus 30 Days</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['hire_date'] . "</td><td>" . $row['date_plus_30'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
