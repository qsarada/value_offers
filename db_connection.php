<?php
$connect_string="host=plutus.axion.com port=5432 dbname=pubs user=saf86975 password=abc125";
$db_connect=pg_connect($connect_string);
if($db_connect->connect_error){
    printf("Соединение не удалось:%s\n", $db_connect->connect_error);
    exit();
}