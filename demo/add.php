<?php

$conn = mysqli_connect('localhost','root','','test');
if($conn-> connect_error){
    die("connection disable");
}
else{
    echo "hello";
    $sql = INSERT INTO testtable (name, surname, email) VALUES ('abcprasad', 'joshi', 'prasad@gamil.com');
    //$result = $conn-> query($sql);
}

?>
