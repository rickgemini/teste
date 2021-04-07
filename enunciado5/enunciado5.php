<?php

$file = file("enunciado2.txt");

if ($file !== false)
{
    foreach($file as $index => $line)
    { 
        $result=pg_query($conn, "SELECT * FROM carros WHERE id=$line;");
        if  ($result) {
            $rs[] = pg_fetch_assoc($result);
        }
    }
}

file_put_contents("arquivoGeradoEnunciado2.txt", implode("", $rs));