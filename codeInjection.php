<?php
// Vulneravel
$command = $_POST['command'];
system($command);

// Corrigido

$allowed_commands = ['ls', 'whoami'];
if (in_array($command, $allowed_commands)) {
  system($command);
} else {
  throw new Exception("Comando não permitido.");
}
