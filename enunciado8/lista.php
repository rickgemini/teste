<?php
require_once 'config.php';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $sql = "SELECT * FROM pessoas p, contatos c where p.id = c.id_pessoa ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        

        $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
        echo "<tr>";
        echo "<td> ID </td>";
        echo "<td> NOME </td>";
        echo "<td align='center'> DT INSERÇÃO </td>";
        echo "<td align='center'>CONTATO</td>";
        echo "</tr>";

        
        foreach($pessoas as $pessoa){
            $dataInsercao = strtotime($pessoa['dt_insercao']);

            echo "<tr>";    
            echo " <td><a href='visualizar.php?id=".$pessoa['id']."'>".$pessoa['id']."</a></td>";
            echo " <td>".$pessoa['nome']."</td>";
            echo " <td>".date('d/m/Y', $dataInsercao)."</td>";
            echo " <td>".$pessoa['contato']."</td>"; 
            echo "</tr>";    
        }

    } catch (PDOException $pe) {
        die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
    }
