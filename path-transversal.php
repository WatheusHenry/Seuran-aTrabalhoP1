<?php
// Código Vulnerável:

$file = $_GET['file'];
include($file);


// Código Corrigido:
$allowed_files = ['file1.php', 'file2.php'];
if (in_array($file, $allowed_files)) {
  include($file);
} else {
  throw new Exception("Arquivo não permitido.");
}
