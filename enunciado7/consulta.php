<?php
require_once 'config.php';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $sql = "SELECT * FROM pessoas p, contatos c where p.id = c.id_pessoa ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        

        $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        echo "<table>";
        echo "<tr>";
        echo "<td> ID </td>";
        echo "<td> NOME </td>";
        echo "</tr>";

        
        foreach($pessoas as $pessoa){
            $dataInsercao = strtotime($pessoa['dt_insercao']);

            echo "<tr>";    
            echo " <td>".$pessoa['id']."</td>";
            echo " <td>".$pessoa['nome']."</td>";
            echo "</tr>";    
        }

    } catch (PDOException $pe) {
        die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
    }
