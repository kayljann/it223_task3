<?php
include '../../db_connect.php';
$sql = "SELECT hire_date, WEEKOFYEAR(hire_date) AS week_of_year FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEEKOFYEAR() Function</title>
</head>

<body>
    <h2>WEEKOFYEAR() Function</h2>
    <p>Returns the week number for a given date</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Hire Date</th>
            <th>Week of Year</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['hire_date'] . "</td><td>" . $row['week_of_year'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
