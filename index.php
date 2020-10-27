<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD wiele do wielu</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="grid">
        <div class="header">
            <h1>Adrian Kobusiński</h1>
        </div>
        <div class="nav">
            <ul>
                <li><a href="">LINK1</a></li>
                <li><a href="">LINK2</a></li>
            </ul>
        </div>
        <div class="footer">
            <form action="insert.php" method="POST">
                <ul>
                    <li>Nazwa:<input type="text" name="name"></li>
                    <li>Tytuł:<input type="text" name="tytul"></li>
                    <li><input type="submit" value="INSERT"></li>
                </ul>
            </form>
        </div>
        <div class="main">
        <?php
            echo("START");
            $servername="127.0.0.1";
            $username="root";
            $password="";
            $dbname="szkola_zadnie";
            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query();
            
            echo("<table>");
            while($wiersz = $result->fetch_assoc()){
                echo("tr");
                echo("<td>".$wiersz['']."</td>");
                echo("/tr");
            }
            echo("</table>");
        ?> 
        </div>
    </div>

    
</body>
</html>