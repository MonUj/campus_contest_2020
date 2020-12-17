

<?php

define('DSN','mysql:host=localhost:3306;dbname=puissance4');
define('USER','root');
define('PASSWORD','root');
$instance=DB::getInstance(DSN, USER, PASSWORD);
