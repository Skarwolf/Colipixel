<?php

if(!$_SESSION['usuario']) {
    header('Location: ../Login.php');
    exit();
}

