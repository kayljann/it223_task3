<?php
include '../../db_connect.php';
$sql = "SELECT first_name, RAND() AS random_value FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAND() Function</title>
</head>

<body>
    <h2>RAND() Function</h2>
    <p>Returns a random number between 0 and 1</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Random Value</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['random_value'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
