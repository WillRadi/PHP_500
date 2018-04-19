<?php

require_once 'banco.php';

$id = $_POST['id'];

conectar();
deletar('usuarios', "id='{$id}'");
header('location:form.php');