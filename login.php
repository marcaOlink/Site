<?php
//Conexão
require_once 'db_connect.php';
// sesseao
session_start();
session_destroy();

//botão enviar
if(isset($_POST['btn-entrar'])):
$erros = array();
$login = mysqli_escape_string($connect, $_POST['login']);
$senha = mysqli_escape_string($connect, $_POST['senha']);

if(empty($login) or empty($senha)):
  $erros[] = "<li> O campo celular/senha precisa ser preenchido</li>";
  else:
  $sql = "SELECT login FROM sistemalogin WHERE login = '$login'";
  $resultado = mysqli_query($connect, $sql);
    
       if(mysqli_num_rows($resultado) > 0):
       $senha = md5($senha);
       $sql = " SELECT * FROM sistemalogin WHERE login ='$login' AND senha = '$senha'";
       $resultado = mysqli_query($connect, $sql);
    
           if(mysqli_num_rows($resultado) == 1):
           $dados = mysqli_fetch_array($resultado);
           mysqli_close($connect);
           $_SESSION['logado'] = true;
           $_SESSION['id_sistemalogin'] = $dados['id'];
           header('Location: cliente/edicaoAndamento/edicao1/index.php');
            else:
            $erros[] = "<li> Usuário e senha não conferem</li>";
            endif;
        
        else:
        $erros[] = "<li>Usuário inexistente</li>";
        endif;
    
    endif;
endif;
?>
<html>
<head>
<title>Login</title>
<link rel = "stylesheet" href="../materialize/css/materialize.min.css"/>
<?php 
if(!empty($erros)):
        foreach($erros as $erro):
        echo $erro;
        endforeach;
endif;
?>
<hr>
<meta charset="utf-8">
</head>
<body>
<div class="container">
  <div class="row">
    <div  class="col s12 m12 l12 ">
        <h1 class="col s12 offset-s4" class="section">Login </h1>
        <form id="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="section">E-mail:<input id="login" type="text" name="login"></div><br>
            <div class="section">Nome:<input id="nome" type="nome" name="nome"></div><br>
            <div  class="section"><button style="width: 80%; height: 10%; margin-left: 10%;" id="button" type="submit" name="btn-entrar"> ENTRAR </button></div>
        </form>
    </div>
  </div>
</div>
</body>
</html>