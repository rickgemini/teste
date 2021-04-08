<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
       <table>
            <thead>
                <tr>
                    <th> ID </td>
                    <th> NOME </td>
                    <th> DT INSERÇÃO </td>
                    <th> CONTATO</td>
                </tr>
            </thead>
            <tbody>
            <?php 
                require_once 'config.php';
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

                $sql = "SELECT * FROM pessoas p, contatos c where p.id = c.id_pessoa ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                
        
                $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC); 
           
                
                foreach($pessoas as $pessoa){
                    $dataInsercao = strtotime($pessoa['dt_insercao']);
            
                    echo "<tr>";    
                    echo "<td><a href='visualizar.php?id=".$pessoa['id']."'>".$pessoa['id']."</a></td>";
                    echo "<td>".$pessoa['nome']."</td>";
                    echo "<td>".date('d/m/Y', $dataInsercao)."</td>";
                    echo "<td>".$pessoa['contato']."</td>"; 
                    echo "</tr>";    
                
                }


            ?>
                                   
            </tbody>
        </table>
    </div>
</body>
</html>