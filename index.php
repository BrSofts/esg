<?php

require_once("../../config/constantes.php");

if (isset($_POST['id'])) { 
    include("../../controller/login.php");

    $objLogin = new Login();

    $objLogin->setID($_POST['id']);
    $id = $objLogin->getID();

    $objLogin->setSenha($_POST['senha']);
    $senha = $objLogin->getSenha();

    $objLogin->setValidacao($id, $senha );
    $mensagem = $objLogin->getValidacao();

    if (!empty($mensagem))
      echo "erro: ".$mensagem;
    else
      echo "tudo ok";  
}
else {
    include("../../view/login.html"); 
}
