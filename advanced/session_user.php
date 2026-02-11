<?php
include '../../db_connect.php';
$sql = "SELECT SESSION_USER() AS session_user FROM employees LIMIT 1";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION_USER() Function</title>
</head>

<body>
    <h2>SESSION_USER() Function</h2>
    <p>Returns the current MySQL user name and host name</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Session User</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['session_user'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
