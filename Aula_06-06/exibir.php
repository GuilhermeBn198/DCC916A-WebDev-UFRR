<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibindo o conteudo da tabela tb_mural</title>
</head>
<body>
    <? 
        /** Arquivo para conectar ao banco de dados */
        require("conectdb.php");
        /** Selecionando os dados do banco de dados */
        $sql = "SELECT * FROM tb_mural";
        /** buscando o limite da tabela para exibição */
        $limite = mysqli_query("$sql", );
        /** Comandos para exibir a tabela tb_mural */
        while ($sql = mysqli_fetch_array($limite) ) {
            $id_mensagem        = $sql["id_mensagem"];
            $nome               = $sql["nome"];
            $mensagem           = $sql["mensagem"];
            $data               = $sql["data"];
            $hora               = $sql["hora"];
            /** Exibindo atraves do echo o conteúdo obtido*/
        echo "Mensagem do ide $id_mensagem<br>$nome<br>$mensagem<br>Na data $data e na hora $hora<br><br>"
        }     //fechando while
    ?>
</body>
</html>