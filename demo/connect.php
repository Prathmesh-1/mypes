
<!DOCTYPE html>
<html>
    <head>
        <title>
            Html table
        </title>
    </head>
    <body>
        <table border="5" cellspacing="10" cellpadding="10">
            <tr bgcolor="lightgreen">
                <th>id</th>
                <th>name</th>
                <th bgcolor="yellow" >surname</th>
                <th>email</th>
            </tr>
<?php

$conn = mysqli_connect('localhost','root','','test');
if($conn-> connect_error){
    die('connection failed'.$conn-> connect_error);
}
else{
    echo ("hello");
    $sql = 'SELECT id, name, surname, email from testtable';
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["surname"] ."</td><td>". $row["email"] ."</td>";
        }
        echo "</table>";
    }
}


?>
</table>
    </body>
</html>