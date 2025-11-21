<?php
// ruleid: mutillidae-php-xss-echo
echo $_REQUEST['target_host'];

// ok: mutillidae-php-xss-echo
$safe = htmlspecialchars($_REQUEST['target_host'], ENT_QUOTES, 'UTF-8');
echo $safe;
