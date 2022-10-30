<?php
  //declaração dos atributos do banco de dados.
  $dbHost = 'LocalHost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'formulario-addsalles';


  //conexão com o banco.
  $connect = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


  //teste de conexão com o banco.
  if($conexao->connect_errno)
   {
    echo "Error connecting";
  }
  else {
    echo "Success";
  }

?>