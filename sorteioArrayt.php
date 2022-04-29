<?php
//Sorteio
//Elielder Oliveira

$sotear = 20;
$iniciarEm = 1;
$terminarEm = 10;
$numerosSorteados = array();
$numerosUnicos = array();

//Sorteia os numeros
function sorteando($quantos, $numIni, $numFim)
{
    for($i = 0; $i < $quantos; $i++)
    {
        $numerosSorteados[] = rand($numIni,$numFim);
    }
    return $numerosSorteados;
}

//Chamando o sorteio
$sorteado = sorteando(20,1,10);

//Verificando os repetidos
$repetidos = array_count_values($sorteado);
foreach($repetidos as $valor => $encotrados){
    if($encotrados < 2){
        $numerosUnicos[] = $valor;
    }
}

//Imprimindo itens
function impRes($valor, $Mensagem)
{
    $valorIndice = count($valor)-1;
    foreach($valor as $indc => $numero){
        if($valorIndice == $indc)
        {
            $Mensagem .= $numero."]";
        }
        else
        {
            $Mensagem .= $numero.",";
        }
    }
    echo $Mensagem."\n\r";
}

//Solicitando impressão
echo impRes($sorteado, "Array sorteado = [");
echo impRes($numerosUnicos, "Os números que não se repetem são: [");

/*
    Resultado em:
    http://codepad.org/450wv4Oe
*/
?>