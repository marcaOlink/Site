<?php
 include_once 'includes/header.php';
 // aula 51 
?>
<link rel = "stylesheet" href="materialize/css/materialize.min.css"/>
<div class="row">
<div class="col s12 m6 push-m3 ">
<h3 class="light">Enviar mensagem</h3>
<form action="php_action/create.php" method="POST">
<div class="input-field col s12">
<input type="text" name="nome" id="nome">
<label for="nome">Nome</label>
</div>

<div class="input-field col s12">
<input type="text" name="login" id="login">
<label for="login">E-mail</label>
</div>
<textarea class="field" name="mesage" id="mesage" placeholder="Digite sua mensagem aqui">
</textarea>
         
<button type="submit" name="btn-cadastrar" class="btn">Enviar</button>
<a href="login.php" class="btn green">Minha mensagem</a>
</div>
</div>
<?php
 include_once 'includes/footer.php';
?>