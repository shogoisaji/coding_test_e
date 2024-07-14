<?php namespace AnswerNo3;

ini_set("memory_limit", -1);

require_once __DIR__ . '/CalculationMinimum.php';

use Exception;

function main($array)
{
    $calculationMinimum = new CalculationMinimum();
    try {
        $result = $calculationMinimum->main($array);
        printf("%d\n", $result);
    } catch (Exception $e) {
        printf("%s\n", $e->getMessage());
    } finally {
        printf("input: %s\n\n", $array[0]);
    }
}

$array = array();

while (true) {
    $stdin = fgets(STDIN);
    if ($stdin == "") {
        break;
    }
    $array[] = rtrim($stdin);
}

main($array);
