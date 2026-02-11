<?php
include '../../db_connect.php';
$sql = "SELECT first_name, hire_date, DATEDIFF(CURDATE(), hire_date) AS days_employed FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATEDIFF() Function</title>
</head>

<body>
    <h2>DATEDIFF() Function</h2>
    <p>Days between dates</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Hire Date</th>
            <th>Days Employed</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['hire_date'] . "</td><td>" . $row['days_employed'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
