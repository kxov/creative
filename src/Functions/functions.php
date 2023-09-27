<?php

declare(strict_types=1);

namespace App\Functions;


function mostFrequent(array $numbers): array {
    $res = [];

    for ($i = 0; $i < count($numbers); $i++){
        if (array_key_exists($numbers[$i], $res)) {
            $res[$numbers[$i]]++;
        } else {
            $res[$numbers[$i]] = 1;
        }
    }

    ksort($res);

    return $res;
}
