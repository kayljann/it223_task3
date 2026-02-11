<?php
include '../../db_connect.php';
$sql = "SELECT email, REPLACE(email, '@company.com', '@newdomain.com') AS new_email FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPLACE() Function</title>
</head>

<body>
    <h2>REPLACE() Function</h2>
    <p>Replaces text in string</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Original Email</th>
            <th>New Email</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['email'] . "</td><td>" . $row['new_email'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>
