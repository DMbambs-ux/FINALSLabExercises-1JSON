<?php

//Tells the browser the output response is JSON
header('Content-Type: application/json');

//Array (php)
$StudentInfo = array("ID" => 24174977, "Name" => "Bambs", "Email" => "Bambs@example.com", "Status" => "Active");

//convert array php -> jsong
echo json_encode ($StudentInfo);

?>