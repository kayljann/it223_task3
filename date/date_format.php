<?php
include '../../db_connect.php';
$sql = "SELECT first_name, hire_date, DATE_FORMAT(hire_date, '%M %d, %Y') AS formatted_date FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE_FORMAT() Function</title>
</head>

<body>
    <h2>DATE_FORMAT() Function</h2>
    <p>Formats date display</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Hire Date</th>
            <th>Formatted Date</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['hire_date'] . "</td><td>" . $row['formatted_date'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
