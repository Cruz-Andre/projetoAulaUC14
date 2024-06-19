<?php 
  include('conexao.php');

  $nomeCompleto = $_POST['nomeCompleto'];
  $celular = $_POST['celular'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];
  $email = $_POST['email'];
  $senha = hash("sha256", $_POST['senha']);
  $cpf = $_POST['cpf'];
  $autoriza = $_POST['autoriza'];

  $sql = "insert into meuSenac (
    nomeCompletoMS, 
    celularMS,
    estadoMS,
    cidadeMS, 
    emailMS, 
    senhaMS,
    cpfMS,
    autorizaMS
    ) 
      values (
        '$nomeCompleto', 
        '$celular', 
        '$estado', 
        '$cidade', 
        '$email', 
        '$senha', 
        '$cpf', 
        '$autoriza'
  )";

  if ($conn -> query($sql) === true) {
    echo "
      <script language='javascript' type='text/javascript'>
        alert('Cadastro realizado com sucesso!')
        window.location.href='../pages/meuSenac.php';
      </script>
    ";
    die();

  } else {
    echo "Erro: ".$sql."<br>".$conn->error;
    echo "<br>";
    echo "Não foi possível realizar o cadastro!";
  }

  $conn->close();

?>