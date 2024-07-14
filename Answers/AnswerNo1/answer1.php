<?php
namespace AnswerNo1;

ini_set("memory_limit", -1);

require_once __DIR__ . '/DiceCalculator.php';

use Exception;

function main($array)
{
    $diceCalculator = new DiceCalculator();
    try {
        $result = $diceCalculator->main($array);
        printf("%s\n", $result);
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
