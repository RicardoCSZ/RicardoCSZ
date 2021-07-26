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

    $totalRegistrosPorPagina = 1;//colocar 5 Registros para mostrar a paginação
    
    $paginaAtual = 1;
    if (isset($_GET['pagina'])) {    
        $paginaAtual = $_GET['pagina'];
    }

    $inicio = $paginaAtual - 1;
    $inicio = $inicio * $totalRegistrosPorPagina;

    $usuariosLista = $conn->prepare("SELECT * FROM usuarios LIMIT $inicio,$totalRegistrosPorPagina");
    $usuariosLista->execute();

    $usuariosListaTotal = $conn->prepare("SELECT * FROM usuarios");
    $usuariosListaTotal->execute();

    $totalRegistros = $usuariosListaTotal->rowCount(); // verifica o número total de registros   
    
    $totalPaginas = $totalRegistros / $totalRegistrosPorPagina; // verifica o número total de páginas

    foreach($usuariosLista->fetchAll(PDO::FETCH_ASSOC) as $dado) {
        echo "Nome: ".$dado["nome"]."<br>";
    }
    
    // agora vamos criar os botões "Anterior e próximo"
    $anterior = $paginaAtual - 1;
    $proximo = $paginaAtual + 1;

    echo "<hr>";

    if ($paginaAtual > 1) {
        echo " <a href='?pagina=$anterior'><- Anterior</a> ";
    }
    
    if ($paginaAtual < $totalPaginas) {
        echo " | <a href='?pagina=$proximo'>Próxima -></a>";
    }
