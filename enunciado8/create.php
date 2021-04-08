<?php 
    require_once 'config.php'; 
    
    if( !empty($_POST) ){
        print_r($_POST);

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $nome       = $_POST['nome'];
        $endereco   = $_POST['endereco'];
        $contato    = $_POST['contato'];

        $getData = "INSERT INTO pessoas (nome) Values (:nome)";

        $insertData = $pdo->prepare($getData);
        $insertData->bindParam(':nome', $nome);

        $inserir = $insertData->execute();
        if($inserir) {
            var_dump($inserir);
            $last_id = $pdo->lastInsertId();

            if(!empty($endereco)) {
                $getDataEndereco = "INSERT INTO enderecos (id_pessoa, endereco) Values (:id_pessoa,:endereco)";

                $insertDataEndereco = $pdo->prepare($getDataEndereco);
                $insertDataEndereco->bindParam(':id_pessoa', $last_id);
                $insertDataEndereco->bindParam(':endereco', $endereco);
                $inserir = $insertDataEndereco->execute();
                
                $last_idEndereco = $pdo->lastInsertId();

            }

            if(!empty($contato)) {
                $getDataContato = "INSERT INTO contatos (id_pessoa, contato) Values (:id_pessoa,:contato)";

                $insertDataContato = $pdo->prepare($getDataContato);
                $insertDataContato->bindParam(':id_pessoa', $last_id);
                $insertDataContato->bindParam(':contato', $contato);
                $inserir = $insertDataContato->execute();

                $last_idContato = $pdo->lastInsertId();
            
            }
            header('Location: lista.php');
            exit;
        }else {
            echo 'erro';
        }
       
    }
?>

