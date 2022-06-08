<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserir no BD</title>
</head>
<body>
    <? /** Arquivo para conectar ao banco de dados */
    require("conectdb.php");

    /** Pegando a data */
    $data = date('Y-m-d');
    /** Pegando a hora */
    $hora = strftime("%H:%M:%S");
    
    /** Inserindo tabela_mural os valores nos campos das variaveis */
    $sqlinsert = "INSERT INTO tb_mural (id_mensagem, nome, mensagem, data, hora) VALUES ('', '$nome', '$mensagem', '$data', '$hora')";

    /** mysql_query -- Realiza uma query MySQL, executa o comando da variavel */
    /** o comando die server pra caso aconteça algum erro(Mostra uma mensagem e termina o script atual) */
    mysqli_query(\, $sqlinsert) or die ("Não foi possível inserir");

    /** Exibe as informações se for inserido com sucesso */
    echo "Nada data $data e na hora $hora<br>$nome disse:<br>$mensagem";
    ?>
</body>
</html>