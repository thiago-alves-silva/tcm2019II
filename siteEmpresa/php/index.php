<?php
    /*$con = mysql_pconnect('localhost','root','') or die ("Erro de Conexão com o Banco de Dados");
    $abre = mysql_select_db('sitetcm',$con) or die ("Erro de Abertura de Banco de Dados");
    $nome = $_POST['txtnome'];
    $txt = $_POST['txtcomentario'];
    $turma = $_POST['txtturma'];
    $horario = "";
    
    $comando = mysql_query("insert into comentario(nome,turma,txt,horario) values ('$nome','$turma','$txt','$horario')") or die ("Erro na Inserção do Registro");
    echo "$nome, $turma, $txt";

    $comando = mysql_query("select * from Comentario") or die ("Erro na Seleção");
    echo "<table>";
    while($linha =mysql_fetch_array($comando))
    {
        $nome = $linha['nome'];
        $turma = $linha['turma'];
        $txt = $linha['txt'];
        echo"<tr><th>Nome</th><th>Turma</th><th>Comentario</th></tr><tr><td>$nome</td><td>$turma</td><td>$txt</td></tr>";
    }
    echo "</table>";*/
?>