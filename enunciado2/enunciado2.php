<?php

$file = file("enunciado2.txt");

if ($file !== false)
{
    foreach($file as $index => $line)
    { 
        $novaLinha = strtolower($line);
        
        if (!preg_match("/especial/", trim($novaLinha), $matches))
        {
            unset($file[$index]);
        }
    }
}

file_put_contents("arquivoGeradoEnunciado2.txt", implode("", $file));