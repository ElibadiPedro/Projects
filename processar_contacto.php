<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "portifolio";

$conn = new mysqli($host, $user,$pass, $dbname);
if ($conn->connect_error){die("Connection failed: " .$conn->connect_error);}

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO clientes (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE){
    echo "Mensagem Enviada com sucesso!";
}
else{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>