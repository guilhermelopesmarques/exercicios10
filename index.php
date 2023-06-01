<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio10</title>
</head>
<body>
    <form method="POST">
        <h3>Qual a Sua Idade</h3>
        <input type="number" name="idade">
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if(isset($_POST['verificar'])){
        $numero = $_POST["idade"];
    if ($numero >= 16){
        echo "Você Tem Direito A Voto";
    }else{
        echo "Você Ainda Não Tem Direito A Voto";
    }
    }
     ?>
</body>
</html>