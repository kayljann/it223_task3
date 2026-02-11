<?php
include '../../db_connect.php';
$sql = "SELECT PERIOD_DIFF(202312, 202301) AS period_difference FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERIOD_DIFF() Function</title>
</head>

<body>
    <h2>PERIOD_DIFF() Function</h2>
    <p>Returns the difference between two periods</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Period Difference</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['period_difference'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
