<?php
// http://localhost/index.php?name=forecho
$input = isset($_GET['name']) ? $_GET['name'] : 'World';

// header('Content-Type: text/html; charset=utf-8');
// 出于安全考虑
printf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'));