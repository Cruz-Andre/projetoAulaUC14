<?php 
  include('conexao.php');

  $nomeCompleto = $_POST['nomeCompleto'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $modalidade = $_POST['modalidade'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];
  $cpf = $_POST['cpf'];

  $sql = "insert into faleConosco (
    nomeCompletoFC, 
    estadoFC, 
    cidadeFC, 
    emailFC, 
    celularFC,
    modalidadeFC,
    assuntoFC,
    mensagemFC,
    cpfFC
    ) 
      values (
        '$nomeCompleto', 
        '$estado', 
        '$cidade', 
        '$email', 
        '$celular', 
        '$modalidade', 
        '$assunto', 
        '$mensagem', 
        '$cpf'
  )";

  if ($conn -> query($sql) === true) {
    echo "
      <script language='javascript' type='text/javascript'>
        alert('Cadastro realizado com sucesso!')
        window.location.href='../pages/faleConosco.html';
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