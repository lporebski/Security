<?php
    include('sql_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr{
            border: 1px solid black;
            width:100%;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $result= $mysqli->query("SELECT * FROM comments");
        if ($result->num_rows > 0) {
            while($row=$result->fetch_assoc()){
                echo "<table>";
                echo "<tr>";
                echo "<h4><span>Numer komentarza: </span>".$row['id']."</h4><br>".$row['content']."<br>"."<span>Data dodania: </span>".$row['date'];
                echo "</tr>";
                echo "</table>";
            }
            
        }
    echo "<br><a href='index.php'>Strona główna</a>"
    ?>
</body>
</html>