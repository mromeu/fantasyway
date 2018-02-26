<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'originalway';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

$sql = "INSERT INTO contato (
  nome,
  email,
  telefone,
  cidade,
  mensagem,
  cadastro
) VALUES (
  '".$_POST['nome']."',
  '".$_POST['email']."',
  '".$_POST['telefone']."',
  '".$_POST['cidade']."',
  '".$_POST['mensagem']."',
  '".date('Y-m-d h:i:s')."'
  )";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    $mysqli->close();

    header('Location: http://www.originalway.com.br/obrigado.html');
} else {

    header('Location: http://www.originalway.com.br/obrigado.html');
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
