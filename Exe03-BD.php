<?php
    $userName = "root"; 
    $senha = ""; 
    
    // CONEXÃO DE DADOS
    try {
        $conn = new PDO('mysql:host=localhost;dbname=usuarios', $userName, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        // echo 'ERROR: ' . $e->getMessage();
    }

    if(empty($_GET['id'])) {
        echo "Informe um código através da URL para continuar. (Ex: ?id=1)";
        exit;
    }

    $_GET['id'] = (int) $_GET['id'];

    $usuarioLista = $conn->prepare('SELECT * FROM usuarios WHERE id = :id LIMIT 1');
    $usuarioLista->execute(
        array('id' => $_GET['id'])
    );

    $usuario = $usuarioLista->fetch(PDO::FETCH_ASSOC);

    if($usuario) {
        echo "Usuário encontrado!<br>Nome é: ".$usuario['nome'];
    } else {
        echo "Usuário não encontrado!";
    }    
?>
