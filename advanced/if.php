<?php
include '../../db_connect.php';
$sql = "SELECT first_name, salary, IF(salary > 60000, 'High', 'Low') AS salary_level FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF() Function</title>
</head>

<body>
    <h2>IF() Function</h2>
    <p>Returns value based on condition</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Salary</th>
            <th>Salary Level</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['salary'] . "</td><td>" . $row['salary_level'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
