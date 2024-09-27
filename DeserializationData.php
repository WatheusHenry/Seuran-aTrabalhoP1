<?php
// Vulneravel
$data = $_POST['data'];
$user = unserialize($data);

// Corrigido
$data = $_POST['data'];
if (isSerialized($data)) {
  $user = unserialize($data);
} else {
  throw new Exception("Dados não confiáveis.");
}

function isSerialized($data)
{
  return (@unserialize($data) !== false || $data === 'b:0;');
}
