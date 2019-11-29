<?php
//Meu arquivo de conexão

//Conectar ao servidor


//Conetar ao servidor
$servidor = "localhost";

//Definir o usuário para conexão
$usuario ="root";

//Senha do usuário
$senha ="";

//Nome do bando de dados que irá conectar
$banco = "mcmusic";

/*Variável que vai receber o resultado da execução
do métado php responsável peça conexão.*/

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset( $conexao, 'utf8');
//Verificar se a conexão está ativa

if(!$conexao){
    die("Erro da conexão: ". $conexao->connect_error);
}
else{
    echo ("Conectado com sucesso.");
}

mysqli_set_charset($conexao, 'utf8');

?>