<?php
include '../../db_connect.php';
$sql = "SELECT salary, CEIL(salary / 1000) AS ceiled_thousands FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEIL() Function</title>
</head>

<body>
    <h2>CEIL() Function</h2>
    <p>Returns the smallest integer value that is greater than or equal to a number</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Salary</th>
            <th>Ceiled Thousands</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['salary'] . "</td><td>" . $row['ceiled_thousands'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
