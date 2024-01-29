<?php

$dbc = mysqli_connect('localhost', 'fetisov', '&34GaleScallNonm45@lb');
$dbc->query('use `feedback`');

$data = json_decode(file_get_contents('php://input'), true);

$email = $data['email'];
$fio = $data['fio'];
$numbers = $data['numbers'];
$adres = $data['adres'];
$games = $data['games'];

try {
        $dbc->query("INSERT INTO feedbacktable(`email`, `fio`, `numbers`, `adres`, `games`) VALUES 
                ('$email','$fio','$numbers', '$adres', '$games')");
        //$connection->close();
} catch(Exception $ex) {
        echo "$ex";
}

http_response_code('201');
header('Content-type: application/json');
print json_encode(array('message' => 'Заказ принят в работу'));

mysqli_close($dbc);