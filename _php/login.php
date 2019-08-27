<?php 
    include("conecta.php");
    session_start();
    $login = $_POST['email'];
    $senha = $_POST['senha'];  

    
    


    $result = mysqli_query($conn,"SELECT * FROM cadastro WHERE CAD_login = '$login' AND CAD_senha = '$senha'") /*or die("erro ao selecionar")*/;
      

        if(mysqli_num_rows($result) > 0 ){ //se encontrou algum login, o nmero de rows é maior que zero !
            $_SESSION["login"] = $login;    
            header("location: ../funcionario.php");
            
        }        //volta para pagina principal.html apos verificar se possui algum login
        else {          
            echo "<script>alert('Login/senha incorretos !'); location.href='../login.html' ;</script>"; // se nao encontrou login e senha no BD , da um alert e volta a pagina de login
        }
?>    