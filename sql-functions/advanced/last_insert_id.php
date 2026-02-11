<?php
include '../../db_connect.php';
$sql = "SELECT LAST_INSERT_ID() AS last_insert_id FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAST_INSERT_ID() Function</title>
</head>

<body>
    <h2>LAST_INSERT_ID() Function</h2>
    <p>Returns the AUTO_INCREMENT id of the last row inserted or updated</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Last Insert ID</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['last_insert_id'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
