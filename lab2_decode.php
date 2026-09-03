<?php

//Declare Json String
$jsonString = '{"Name" : "Bambs" , "age" :20, "Email" : "Bambs@example.com" }';

//object
$objectData = json_decode($jsonString);
//array
$arrayData = json_decode($jsonString, true);

//Display specific values: "name & email"
echo "Object: " . $objectData -> Name . "<br>";
echo "Array: " . $arrayData['Email'] . "<br>"; 

?>