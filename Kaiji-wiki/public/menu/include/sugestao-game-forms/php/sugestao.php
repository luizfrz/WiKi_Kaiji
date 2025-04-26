<?php
$serverIp =  '';
$user = '';
$password =  '';
$database = '';

$connection_data = new mysqli($serverIp, $user, $password, $database);

mysqli_report(MYSQLI_REPORT_OFF);

if($mysqli->connect_errno) {
    error_log('erro de conexao: ' . $mysqli->connect_errno);
};
?>
   
