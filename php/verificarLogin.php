<?php 
  include('conexao.php');
  
  $login = $_POST['cpf'];
  $senha = $_POST['senha'];

  $entrar = $_POST['entrar']; // do botão ou input tipo botão

  $cripto = hash("sha256", $senha);

  if(isset($entrar)) {

    $verifica = mysqli_query($conn, "select * from meuSenac where cpfMS = '$login' and senhaMS = '$cripto'") or die("Erro ao buscar no banco!");

    if (mysqli_num_rows($verifica) <= 0) {
      echo "
        <script language='javascript' type='text/javascript'>
          alert('Não foi possível fazer login! Usuário ou senha incorretos!');
          window.location.href='http://localhost/inf4n221/projetoAulaUC14_UC15/pages/loginMeuSenac.php'
        </script>
      ";
      die();

    } else {
      session_start();
      
      $_SESSION['nome_usu_sessao'] = $login;
      
      header("Location: ".$_SESSION['pagina_anterior']);
    }
  }
?>