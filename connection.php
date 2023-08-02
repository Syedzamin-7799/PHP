<?php
$conn = mysqli_connect("localhost" ,"root" ,"" ,"zamin");
if($conn){
    echo "connected";
}
else{
    die("connection error");
}
?>