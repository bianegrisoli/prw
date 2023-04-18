<?php
    // $_GET obtém dado do formulário enviado via GET
    // $_POST obtém dado do formulário enviado via POST

    
    //nome entre '' deve ser igual ao name do input
    //definido no formulário html

    $numero1 = $_POST['numero 1']; 
    $numero2 = $_POST['numero 2'];
    echo "<h1>$numero1</h1>";
    echo "<h2>$numero2</h2>";
    echo "<input value=$numero2>";
    if(strlen($numero1) < 20
    {
        echo "<h3>Número 1 deve somar, subtrair, multiplicar e dividir</h3>";
    }
    if($numero2> 18) 
    {
        echo "<h3>Número 2 deve somar, subtrair, multiplicar e dividir</h3>";
        else
    }
    {
        echo "<h3>Número 1 e 2 deve somar e imprimir o resultado 56!</3>"; 
    }


?>

<!--Código HTML -->
<a href='form.html'><button>Voltar</button></a>