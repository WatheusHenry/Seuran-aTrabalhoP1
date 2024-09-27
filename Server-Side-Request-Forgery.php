<?php

// <!-- Código Vulnerável: -->
$url = $_POST['url'];
$response = file_get_contents($url);


// <!-- Código Corrigido: -->
$allowed_urls = ['https://example.com'];
if (in_array($url, $allowed_urls)) {
$response = file_get_contents($url);
} else {
throw new Exception("URL não permitida.");
}

