<?php
// Vulnarevel
if ($_SESSION['role'] == 'admin') {
// Permitir acesso
}

// Corrigido
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
  throw new Exception("Acesso negado.");
}
