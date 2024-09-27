<!-- Código Vulnerável: -->
<form action="/submit" method="POST">
  <input type="text" name="username" />
  <input type="submit" value="Enviar" />
</form>

<!-- Quando o usuário enviar o nome de usuário como: <script>alert('XSS')</script> -->


<!-- Código Corrigido: -->
<form action="/submit" method="POST">
  <input type="text" name="username" />
  <input type="submit" value="Enviar" />
</form>

<?php
$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
?>