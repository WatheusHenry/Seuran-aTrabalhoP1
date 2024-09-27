<!-- Codigo vulneravel -->
<form action="/change-password" method="POST">
  <input type="text" name="new_password" />
  <input type="submit" value="Alterar Senha" />
</form>

<!--Código Corrigido:  -->
<?php
session_start();
$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;
?>
<form action="/change-password" method="POST">
  <input type="hidden" name="csrf_token" value="<?= $token ?>" />
  <input type="text" name="new_password" />
  <input type="submit" value="Alterar Senha" />
</form>