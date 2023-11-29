<?php
    include("../conecta.php");

    // Realize uma consulta SQL que una as tabelas ocorrencia e paciente
    $query = "SELECT o.id_ocorrencia, p.nome_paciente, o.data_ocorrencia, p.sobrenome_paciente
            FROM ocorrencia o
            INNER JOIN paciente p ON o.id_paciente = p.id_paciente";

    $resultado = $pdo->query($query);

    if ($resultado) {
        $listarOcorrencia = $resultado->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "Erro na consulta: " . $pdo->errorInfo()[2];
    }

    // Agora você tem $listarOcorrencia com os dados necessários para a tabela dinâmica
?>
