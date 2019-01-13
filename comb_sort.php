<?php
/**
 * Сортирует одномерный массив методом "расчесывания".
 *
 * @see https://en.wikipedia.org/wiki/Comb_sort
 *
 * @param $array - массив чисел
 *
 * @return array - отсортированный массив
 */
function comb_sort($array)
{
    $sizeArray = count($array);

    // Проходимся по всем элементам массива
    for ($i = 0; $i < $sizeArray; $i++) {

        // Сравниваем попарно.
        // Начинаем с первого и последнего элемента, затем постепенно уменьшаем
        // диапазон сравниваемых значеный.
        for ($j = 0; $j < $i + 1; $j++) {

            // Индекс правого элемента в текущей итерации сравнения
            $elementRight = ($sizeArray - 1) - ($i - $j);

            if ($array[$j] > $array[$elementRight]) {

                $buff                 = $array[$j];
                $array[$j]            = $array[$elementRight];
                $array[$elementRight] = $buff;
                unset($buff);

            }

        }

    }

    return (array) $array;
}