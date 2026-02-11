<?php
include '../../db_connect.php';
$sql = "SELECT hire_date, DATE_SUB(hire_date, INTERVAL 6 MONTH) AS date_minus_6months FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE_SUB() Function</title>
</head>

<body>
    <h2>DATE_SUB() Function</h2>
    <p>Subtracts a time/date interval from a date and returns the date</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Hire Date</th>
            <th>Date Minus 6 Months</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['hire_date'] . "</td><td>" . $row['date_minus_6months'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
