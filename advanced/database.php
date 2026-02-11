<?php
include '../../db_connect.php';
$sql = "SELECT DATABASE() AS database_name FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE() Function</title>
</head>

<body>
    <h2>DATABASE() Function</h2>
    <p>Returns the name of the current database</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Database Name</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['database_name'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
