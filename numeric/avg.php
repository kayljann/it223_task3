<?php
include '../../db_connect.php';
$sql = "SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY department";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVG() Function</title>
</head>

<body>
    <h2>AVG() Function</h2>
    <p>Calculates average</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Department</th>
            <th>Average Salary</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['department'] . "</td><td>" . number_format($row['avg_salary'], 2) . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
