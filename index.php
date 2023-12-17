<?php
declare(strict_types=1);

$minRand = (int) readline("Введите минимальное случайное значение для массива случайный чисел: ");
$maxRand = (int) readline("Введите максимальное: ");
$arrayLength = (int) readline("Введите длину массива случайных чисел: ");
if ($arrayLength <= 0) {
    return;
}
$ourArray = [];
for ($i = 0; $i < $arrayLength; $i++) {
    $ourArray[$i] = mt_rand($minRand, $maxRand);
}
echo "Неотсортированный массив: ";
foreach ($ourArray as $key => $value) {
    if ($key == array_key_last($ourArray)) {
        echo "[$key] = $value. \n";
        break;
    }
    echo "[$key] = $value; ";
}
asort($ourArray);
echo "Отсортированный по возрастанию массив: ";
foreach ($ourArray as $key => $value) {
    if ($key == array_key_last($ourArray)) {
        echo "[$key] = $value. \n";
        break;
    }
    echo "[$key] = $value; ";
}
$minVal = min($ourArray);
$maxVal = max($ourArray);
echo "Минимальный элемент массива: $minVal.\n";
echo "Максимальный элемент массива: $maxVal.\n";