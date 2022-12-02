<?php
session_start();

session_destroy(); //destroi sessão
header("location: ../index.php?bye"); //local de retorno após destruir
die();
