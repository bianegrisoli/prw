<?php
    //Exemplo para percorrer elementos de um vetor
    $alunos = array("Murilo", "Cássio", "Ricardo" , "João");
    print_r($alunos);//Imprime todos os elementos do vetor
    echo"<br>";
    echo "Quantidade de elementos :". count($alunos)."<br>";
    echo"<br>";
    sort($alunos); //ordena vetor de forma crescente
    for($x = 0; $x <count($alunos); $x++)
    {
        echo "Aluno na posição $x: ".$alunos[$x]."<br>";
        echo "Quantidade de caracters: ".strlen($alunos[$x])."<br>";
        echo "<br>"; 
    }

    $indice = array_search("Murilo",$alunos); //busca um elemento no vetor
    if($indice === false)
        echo "Elemento não encontrado! <br>"; 
    else 
        echo "Elemento encontrado na posição $indice <br>";
?> 