<?php
declare(strict_types=1);

function foo(int $a, int $b, closure $c = NULL): float
{
    $result = $a * $b;
    if (!is_null($c)) {
        $c($result);
    }
    return $result;
}

$a = (int) readline("Введите первое число: ");
$b = (int) readline("Введите второе число: ");
$enterDecision = (int) readline("Введите \"1\", что бы показать результат вычисления: ");
switch ($enterDecision) {
    case 1:
        $result = foo($a, $b, function ($arg) {
            echo "Результат умножения: $arg";
        });
        break;
    default:
        $result = foo($a, $b);
        break;
}