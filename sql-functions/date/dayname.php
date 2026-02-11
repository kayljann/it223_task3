<?php
include '../../db_connect.php';
$sql = "SELECT hire_date, DAYNAME(hire_date) AS day_name FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAYNAME() Function</title>
</head>

<body>
    <h2>DAYNAME() Function</h2>
    <p>Returns the weekday name for a given date</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Hire Date</th>
            <th>Day Name</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['hire_date'] . "</td><td>" . $row['day_name'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
