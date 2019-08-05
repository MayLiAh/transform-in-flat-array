<?php

/**
 * Превращает многомерный массив в плоский с помощью рекурсии
 * 
 * @param array $array Массив с неизвестным уровнем вложенности
 * 
 * @return array Плоский массив, полученный из исходного
 */
function transformInFlatArray(array $array) : array
{
    $result = [];

    foreach ($array as $value) {
        if (is_array($value)) {
            $result = array_merge($result, transformInFlatArray($value));
        } else {
            $result[] = $value;
        }
    }

    return $result;
}
