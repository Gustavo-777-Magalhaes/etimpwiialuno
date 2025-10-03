<?php
session_start();

$_SESSION['nome'] = "Gustavo Magalhães";

header("location:pagina2.php");