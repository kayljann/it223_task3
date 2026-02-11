<?php
include '../../db_connect.php';
$sql = "SELECT department, FIELD(department, 'IT', 'Sales', 'HR', 'Marketing') AS position FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIELD() Function</title>
</head>

<body>
    <h2>FIELD() Function</h2>
    <p>Returns the index position of a value in a list</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Department</th>
            <th>Position</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['department'] . "</td><td>" . $row['position'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
