<?php
include '../../db_connect.php';
$sql = "SELECT LTRIM('   Hello World') AS trimmed_text FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTRIM() Function</title>
</head>

<body>
    <h2>LTRIM() Function</h2>
    <p>Removes leading spaces from a string</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Trimmed Text</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>'" . $row['trimmed_text'] . "'</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
