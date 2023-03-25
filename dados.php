<?php 
if(isset($_GET["salvar"]) and $_GET["salvar"] == "salvarusuario"){
    $nome = $_POST["nome"];
    $ubs = $_POST["ubs"];
    $peso = $_POST["peso"];
    $semana = $_POST["semana"];

    $stmt = db_conecta()->prepare("INSERT INTO quilos semanais(Nome Profissional, Unidade, Peso, Semana) VALUES (:Nome Profissional, :Unidade, :Peso, :Semana");
    
    $stmt->bindParam(":Nome Profissional",$nome, PDO::PARAM_STR);
    $stmt->bindParam(":Unidade",$ubs, PDO::PARAM_STR);
    $stmt->bindParam(":Peso",$peso, PDO::PARAM_STR);
    $stmt->bindParam(":Semana",$semana, PDO::PARAM_STR);
    maxlav
}
?>