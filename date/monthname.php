<?php
include '../../db_connect.php';
$sql = "SELECT birth_date, MONTHNAME(birth_date) AS month_name FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONTHNAME() Function</title>
</head>

<body>
    <h2>MONTHNAME() Function</h2>
    <p>Returns the name of the month for a given date</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Birth Date</th>
            <th>Month Name</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['birth_date'] . "</td><td>" . $row['month_name'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
