<?php namespace AnswerNo2;

ini_set("memory_limit", -1);

require_once __DIR__ . '/PlacementStones.php';

use Exception;

function outputResult($resultArray)
{
    $blackCount =0;
    $whiteCount =0;
    $resultString = "";
    foreach ($resultArray as $result) {
        $resultString .= $result;
        if($result == 'b') {
            $blackCount++;
        } else {
            $whiteCount++;
        }
    }
    printf("%d %d\n", $blackCount, $whiteCount);
    printf("result: %s\n", $resultString);
}

function main($array)
{
    $placementStones = new PlacementStones();
    try {
        // Example: $result = ['b', 'w', 'b']
        $result = $placementStones->main($array);
        outputResult($result);
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
