<?php
include '../../db_connect.php';
$sql = "SELECT department, MIN(salary) AS min_salary FROM employees GROUP BY department";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIN() Function</title>
</head>

<body>
    <h2>MIN() Function</h2>
    <p>Finds minimum value</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Department</th>
            <th>Min Salary</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['department'] . "</td><td>" . number_format($row['min_salary'], 2) . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
