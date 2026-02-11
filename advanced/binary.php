<?php
include '../../db_connect.php';
$sql = "SELECT first_name, BINARY first_name AS binary_name FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINARY Function</title>
</head>

<body>
    <h2>BINARY Function</h2>
    <p>Converts a value to a binary string</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Binary Name</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['binary_name'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
