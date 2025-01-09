<?php
//QUESTÃO 1
$INDICE = 13;
$SOMA = 0;
$K = 0;

while ($K < $INDICE) {
    $K = $K + 1;
    $SOMA = $SOMA + $K;
}

echo "O valor de SOMA é: $SOMA\n"; // Resultado: 91
echo "<br>";

//QUESTÃO 2
function isFibonacci($num)
{
    $a = 0;
    $b = 1;

    while ($a <= $num) {
        if ($a == $num) {
            return true;
        }
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return false;
}

// Número a ser verificado
$num = 21;

if (isFibonacci($num)) {
    echo "$num pertence à sequência de Fibonacci.\n";
} else {
    echo "$num não pertence à sequência de Fibonacci.\n";
}
echo "<br>";

//QUESTÃO 3
// Dados de faturamento mensal em JSON
$json = '{
    "faturamento": [1200, 800, 0, 1500, 1300, 0, 2000, 0, 900, 1700, 0, 800, 2100, 0, 0, 0, 2300, 1100, 1800, 0, 0, 1200, 1500, 0, 0, 1700, 1400, 0, 0, 1900]
}';

$data = json_decode($json, true)['faturamento'];

$validDays = array_filter($data, fn($value) => $value > 0); // Ignora dias sem faturamento
$min = min($validDays);
$max = max($validDays);
$average = array_sum($validDays) / count($validDays);

$daysAboveAverage = array_filter($validDays, fn($value) => $value > $average);

echo "Menor faturamento: R$ $min\n";
echo "Maior faturamento: R$ $max\n";
echo "Dias acima da média: " . count($daysAboveAverage) . "\n";
echo "<br>";

//QUESTÃO 4
$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$total = array_sum($faturamento);

foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $total) * 100;
    echo "$estado: " . number_format($percentual, 2, ',', '.') . "%\n";
}
echo "<br>";

//QUESTÃO 5
function reverseString($str)
{
    $reversed = '';
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

$string = "Exemplo";
echo "String original: $string\n";
echo "String invertida: " . reverseString($string) . "\n";
