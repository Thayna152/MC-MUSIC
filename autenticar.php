<?php
if($_POST){
session_start();
$conn = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conn,'mcmusic');
mysqli_set_charset($conn,'utf8');

//recebendo email e senha de login.php
$email = $_POST['email'];
$senha = md5($_POST['senha']);


if (filter_var($_email,FILTER_VALIDATR_EMAIL)) {
    //verifico se algum cliente possui email e senha  informados
$query = $conn->query ("SELECT * FROM cliente WHERE 
      email = '{$email}' AND senha ='{$senha}'");
     
      
 //Transformo $query em array     
      $row = $query->fetch_assoc();
//se houver, retornou um registro
$count = $query->num_rows;
if ($count>0){
    //armazenado dados na session
    $_SESSION['userEmail'] = $row['email'];
    $_SESSION['userId'] = $row ['id'];
   header("location:home.php");
}else{
    //Login ivalido
    header("location:login.php?err=101");

}

else{
      //email incorreto
        header("location:login.php?err=103");
    
    
        
        

    }else{
       //acesso não autorizado(direto no arquivo)
        header("location:login.php?err=102");

    }

}
}
?>