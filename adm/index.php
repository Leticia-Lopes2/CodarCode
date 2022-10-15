<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM-Cadastro</title>
</head>
<body>
    <form method="get" action="" enctype="multipart/form-data">
        <h1>Cadastro Adm</h1>
        <p>Nome:<input type="text" name="nome" id="nome"></p>
        <p>Email:<input type="text" name="email" id="email"></p>
        <p>Senha:<input type="password" name="senha" id="senha" minlength="5"></p>
        <button type="submit" name="btnCadastro">Enviar</button>
        </form>
        <?php
        include_once("../config/conexao.php");
     
            if(isset($_GET["btnCadastro"])){

                $nome = $_GET['nome'];
                $email = $_GET['email'];
                $senha = $_GET['senha'];

                $cadastroAdm = "INSERT INTO admin (nome_admin, email_admin, senha_admin) VALUES(:nome, :email, :senha)";
                try{

                    $resultCad = $conexao->prepare($cadastroAdm);
                    $resultCad->bindParam(":nome" ,$nome ,PDO::PARAM_STR);
                    $resultCad->bindParam(":email" ,$email ,PDO::PARAM_STR);
                    $resultCad->bindParam(":senha" ,$senha ,PDO::PARAM_STR);
                    $resultCad->execute();

                    
                    $countCadAdm = $resultCad->rowCount();
                        if($countCadAdm > 0){
                        echo "<div class='alert alert-success' role='alert'>
                                Adm Cadastrado com sucesso!!!
                            </div>";
                      
                    }

                } catch(PDOException $erro) {
                    echo "<b>ERRO DE CADASTRO: </b>".$erro ->getMessage();
                }
            } 
      //❤️❤️❤️❤️❤️Matheus Vida❤️❤️❤️❤️❤️ 
        ?>
</body>
</html>

