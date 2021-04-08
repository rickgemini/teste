<?php
require_once 'config.php';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$nome = '';
$endereco = '';
$contato = '';

$sql = "SELECT * FROM pessoas p where p.id = ".$_GET['id'];
$stmt = $pdo->prepare($sql);
$stmt->execute();

$pessoa = $stmt->fetchAll(PDO::FETCH_ASSOC); 


if(count($pessoa) > 0) {
    $nome = $pessoa[0]['nome'];
}

$sqlContato = "SELECT * FROM contatos c where c.id_pessoa = ".$_GET['id'];
$stmtContato = $pdo->prepare($sqlContato);
$stmtContato->execute();

$contatos = $stmtContato->fetchAll(PDO::FETCH_ASSOC); 


if(count($contatos) > 0) {
    $contato = $contatos[0]['contato'];
}

$sqlEndereco = "SELECT * FROM enderecos e where e.id_pessoa = ".$_GET['id'];
$stmtEndereco = $pdo->prepare($sqlEndereco);
$stmtEndereco->execute();

$enderecos = $stmtEndereco->fetchAll(PDO::FETCH_ASSOC); 

if(count($enderecos) > 0) {
    $endereco = $enderecos[0]['endereco'];
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <style>.texto{text-align:center}</style>
    </head>


<div class="container">
    <form name="insertForm" method="POST" action="#">
        <table>
            <thead>
            <tr>
                <th colspan='10' class="texto">Visualizando Contato <?php echo $_GET['id']; ?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><label>Nome</label></td>
                <td><input name="nome" type="text" size="33" maxlength="100" value="<?=$nome?>" readonly></td>
            </tr>
            <tr>
                <td><label>Endereço</label></td>
                <td><input name="endereco" type="text" size="33" maxlength="100" value="<?=$endereco?>" readonly></td>
            </tr>
            <tr>
                <td><label>Contato</label></td>
                <td><input name="contato" type="text" size="33" maxlength="100" value="<?=$contato?>"  readonly></td>
            </tr>
            <tr>
                <td colspan="2"> <a href="index.php"> VOLTAR </a> </td>
            </tr>
            </tbody>          
        </table>
    </form>
</div>
