<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script>
                    function loginsucess()
                    {
                        setTimeout("window.location='sucesso-login.php'", 3000);
                    }
                    
                    function loginfailed()
                    {
                        setTimeout("window.location='index.php'", 3000);
                    }
        </script>
        <title></title>
    </head>
    <body>
        <?php
            $banco= "test";
            $usuario= "root";
            $senha= "";
            $conexao= mysqli_connect("localhost",$usuario, $senha) or print (mysqli_error());
            $selecao= mysqli_select_db($conexao, $banco) or print(mysqli_error($conexao));
            $email= $_POST['email'];
            $senhaUsuario= $_POST['senha'];
            $sql= "SELECT * FROM usuario WHERE user_email='$email' AND aes_decrypt(user_pass,'xaropada')='$senhaUsuario';";
            
            $resultado= mysqli_query($conexao,$sql) or die (mysqli_error());
            $row= mysqli_num_rows($resultado);
            
            if($row > 0)
            {
                session_start();
                while($consulta = mysqli_fetch_array($resultado))
                {
                    $_SESSION["usercod"]=$consulta['cod_reg'];
                }
            $_SESSION["email"]=$_POST['email'];
            $_SESSION["senha"]=$_POST['senha'];
            echo "Você foi autenticado com sucesso! Aguarde um isntante...";
            echo "<script>loginsucess()</script>";
            }
            else
            {
                echo "Você não foi autenticado! Aguarde um isntante...";
                echo "<script>loginfailed()</script>";
            }
        ?>
    </body>
</html>
