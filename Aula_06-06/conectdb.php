<?php
/** Local que está rodando o php */
$hostname = 'localhost';
/** Nome de usuário que tem acesso */
$username = 'root';
/** Senha do usuário, no exemplo está em branco */
$senha = '';
/**Banco de dados desejado  */
 $banco = 'teste1';
/** mysql_connect -- Abre uma conexão com o servidor MySQL */
$db = mysqli_connect($hostname, $username, $senha);
/** mysql_select_db -- Seleciona um banco de dados MySQL */
mysqli_select_db($banco,$db);
?>