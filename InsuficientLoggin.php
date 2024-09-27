<?php

// Vulneravel
if ($action === 'login') {
  // Login do usuário
}

// Corrigido
if ($action === 'login') {
  error_log("Usuário {$username} tentou fazer login.");
}
