<?php
try{
    $connection=new PDO('mysql:host=localhost;dbname=chatbot;','root','1234');


}catch(PDOException $e){
    echo "connection failed : ".$e->getMessage();
}
?>