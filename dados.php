<?php 
    $nome_pessoa = $_GET['inome'];
    $peso_apurado = $_GET['ipeso'];
    $nome_ubs = $_GET['iubs'];
    $semana = $_GET['isemana'];


/* Conexão com o banco de dados */

    $conectar_dados = mysqli_connect('localhost', 'root', '', 'maxlav peso');
    
    if($conectar_dados -> connect_error){
        die('Connection failed: '.$conectar_dados -> connect_error);
    }
    else{
        $db = $conectar_dados -> prepare("insert into quilos_semanais (Nome Profissional, Peso, Semana, Unidade) values(?,?,?,?");
        $db -> bind_param("ssss", $nome_pessoa, $peso_apurado, $nome_ubs, $semana);
        $db -> execute(); 
        echo "Registro criado na tabela.";
        $db -> close();
        $conectar_dados -> close();
    }
?>