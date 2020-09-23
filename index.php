<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="cont">
        <div class="one"></div>
        <div class="two">
            <?php
                $servername = "172.16.131.125";
                $username = "z_rty";
                $password = "ghj";
                $dbname = "z_rty";

                $conn = new mysqli($servername, $username, $password, $dbname);
                $conn->set_charset("utf8");
                $result=$conn->query("SELECT * FROM `pracownicy` LIMIT 10");

                echo("<table>");
                echo("<tr>
                <th>imie<th>
                <th>dzial<th>
                <th>zarobki<th>
                <th>data_urodzenia<th>
                </tr>");
                
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>
                    <td>
                    <form action='delete.php' method='POST'>
                    <input type='hidden' name='id' value='".$row['id_pracownicy']."'>
                    <input type='submit' value='X'> 
                    </form>
                    </td>
                    ");
                    echo("</tr>");
                }
                
                echo("</table>");
            ?>
        </div>
    </div>
    
</body>
</html>