<?php
    include_once 'conexao.php';

    $email = $_POST['email']; //pseudo variavel $_POST
    $senha = $_POST['senha'];

    // executar uma pesquisa no bd
    $sql = $dbcon->query("SELECT * FROM tblogin WHERE email='$email' AND senha='$senha'");


    //var_dump($sql);


    if(mysqli_num_rows($sql)>0){
        echo "login_ok";
        //redirecionar para uma página restrita
    }else{
        echo "login_erro";
    }




?>