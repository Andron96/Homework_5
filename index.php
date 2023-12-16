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
    if ($key == ($arrayLength - 1)) {
        echo "[$key] = $value. \n";
        break;
    }
    echo "[$key] = $value; ";
}
asort($ourArray);
echo "Отсортированный по возрастанию массив: ";
$foreachCount = 0;
foreach ($ourArray as $key => $value) {
    if ($foreachCount == ($arrayLength - 1)) {
        echo "[$key] = $value. \n";
        $foreachCount = 0;
        break;
    }
    echo "[$key] = $value; ";
    $foreachCount++;
}
$minVal = min($ourArray);
$maxVal = max($ourArray);
echo "Минимальный элемент массива: $minVal.\n";
echo "Максимальный элемент массива: $maxVal.\n";