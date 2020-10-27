<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - wiele do wielu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    require_one('lib/connect.php');
    
    
    $sql = "SELECT * FROM lib_autor";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo ("id: " . $row["name"]."<br>");
    }

    $conn->close();
    echo("start");
    ?>
</body>
<script src="main.js"></script>
</html>