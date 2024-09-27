<?php
// Vulneravel
$file = $_GET['file'];
copy($file, '/path/to/destination');

// Corrigido
$allowed_files = ['file1.zip', 'file2.zip'];
if (in_array($file, $allowed_files)) {
  copy($file, '/path/to/destination');
} else {
  throw new Exception("Arquivo não permitido.");
}
