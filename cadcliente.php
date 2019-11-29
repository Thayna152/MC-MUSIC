<?php

/*Incluir o arquivo responsável pela conexão com o banco de dados*/

include "conexao.php";

/*Prepara para receber os dados do formulário*/

//if(isset($_PSOT['cadastrar'])){
    

/*Definir variável pegar que armazena os do formulário indicado pelo nome dentro do método. O método usado no PHP é 
equivalente ao usado no formulário. */    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha =  $_POST['senha'];
  

    $pesquisa = "SELECT email FROM usuarios WHERE email = '$email'";

    $resultado=mysqli_query($conexao, $pesquisa);

    if($resultado->num_rows > 0){
        echo "Desculpe, mas este E-mail já foi cadastrado!";
      }else{
      
    

    $sql = "insert into usuarios(nome, email, senha) 
    values ('$nome', '$email', '$senha')";

    mysqli_query($conexao, $sql);
      

    

    echo "O cliente foi cadastrado com sucesso.";
    }

    
   

?>