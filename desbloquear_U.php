<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão de  Utilizadores</title>
        <meta http-equiv="refresh" content="3;url=gerir_U.php">
    </head>
    <body>
        <h1>Desbloquear Utilizadores</h1>
        <?php
        session_start();
        include 'valida.php'; 
        include 'liga_bd.php';
        $sql ="UPDATE t_user SET
        apagado=0 WHERE  id_user=$_POST[id_user]";
        // caso consiga executar a ação mostra a mensagem de sucesso
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Utilizador desbloqueado com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        ?>
        <br/><h4>Aguarde que vai ser redirecionado</h4>
    </body>
</html>