<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //include faz a inclusão do arquivo toda a vez que a pagina é carregada, quando dá erro gera warning
    //require faz a inclusão só que apenas uma vez, ao dar erro o sistema para fatal_error  
    
    include "./class/Usuario.class.php";
    
    //declarando um novo objeto
    $usuario1 = new Usuario();
    $usuario2 = new Usuario();

    echo $usuario1->getUsuario("juan,");
    

    ?>
</body>
</html>