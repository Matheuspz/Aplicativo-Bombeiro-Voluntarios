<?php 

    include("../conecta.php");

    $cod = $_GET['codigo'];

    try {
        // DELETAR SINAIS E SINTOMAS DA OCORRÊNCIA
        $comando = $pdo->prepare("DELETE FROM ocorrencia_sinais_sintomas
            WHERE id_ocorrencia = :cod");
    
        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        // DELETAR SINAIS E SINTOMAS
        $comando = $pdo->prepare("DELETE FROM sinais_sintomas
            WHERE id_sinais_sintomas IN (SELECT id_sinais_sintomas FROM ocorrencia_sinais_sintomas WHERE id_ocorrencia = :cod)");
    
        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        // DELETAR OCORRÊNCIA_AVALIACAO_GLASGOWMENOR
        $comando = $pdo->prepare("DELETE FROM ocorrencia_avaliacao_glasgowmenor
            WHERE id_ocorrencia = :cod");
    
        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        // DELETAR GLASGOW MENOR
        $comando = $pdo->prepare("DELETE FROM avaliacao_glasgow_menor
            WHERE id_glasgow_menor IN (SELECT id_avaliacao_glasgow_menor FROM ocorrencia_avaliacao_glasgowmenor WHERE id_ocorrencia = :cod)");
    
        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        // DELETAR OCORRÊNCIA_SINAIS_VITAIS
        $comando = $pdo->prepare("DELETE FROM ocorrencia_sinais_vitais
            WHERE id_ocorrencia = :cod");
    
        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        // DELETAR SINAIS VITAIS
        $comando = $pdo->prepare("DELETE FROM sinais_vitais
            WHERE id_sinais_vitais IN (SELECT id_sinais_vitais FROM ocorrencia_sinais_vitais WHERE id_ocorrencia = :cod)");
    
        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        // DELETAR OCORRÊNCIA
        $comando = $pdo->prepare("DELETE FROM ocorrencia WHERE id_ocorrencia = :cod");

        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        // DELETAR PACIENTE
        $comando = $pdo->prepare("DELETE FROM paciente
            WHERE id_paciente IN (SELECT id_paciente FROM ocorrencia WHERE id_ocorrencia = :cod)");
    
        $comando->bindParam(':cod', $cod, PDO::PARAM_INT);
        $resultado = $comando->execute();

        echo("<script> 
        alert('FORMULÁRIO EXCLUÍDO');
        window.location.href = '../telas/historicoDeOcorrencia.php';
        </script>");
        
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    } 
?>  
