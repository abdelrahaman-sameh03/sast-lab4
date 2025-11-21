<?php
// ruleid: mutillidae-php-sqli-unsafe-concat
mysql_query("SELECT * FROM accounts WHERE user = '" . $_GET['username'] . "'");

// ok: mutillidae-php-sqli-unsafe-concat
$user = $_GET['username'];
$stmt = $pdo->prepare('SELECT * FROM accounts WHERE user = ?');
$stmt->execute([$user]);
