<?php
//fecha a session e volta pro index
//tudo aqui e pra destruir com certeza a sessao

session_start();

$_SESSION = [];

session_destroy();

header('Location: ../index.php');
exit;

?>