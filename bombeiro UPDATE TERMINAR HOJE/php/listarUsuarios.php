<?php
    include("../conecta.php");

    $query = "SELECT id_usuario, email, id_tipo FROM usuario";

    $resultado = $pdo->query($query);

    if ($resultado) {
        $listarUsuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "Erro na consulta: " . $pdo->errorInfo()[2];
    }

?>
