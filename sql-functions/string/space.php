<?php
include '../../db_connect.php';
$sql = "SELECT CONCAT('Hello', SPACE(5), 'World') AS spaced_text FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPACE() Function</title>
</head>

<body>
    <h2>SPACE() Function</h2>
    <p>Returns a string of specified number of spaces</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Spaced Text</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>'" . $row['spaced_text'] . "'</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
