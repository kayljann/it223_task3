<?php
include '../../db_connect.php';
$sql = "SELECT salary, TRUNCATE(salary, 0) AS truncated_salary FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUNCATE() Function</title>
</head>

<body>
    <h2>TRUNCATE() Function</h2>
    <p>Truncates a number to a specified number of decimal places</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Salary</th>
            <th>Truncated Salary</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['salary'] . "</td><td>" . $row['truncated_salary'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
