<?php

/**
 * Return a secured string POST data by provided name.
 * @param string $name
 * @return string
 */
function getSecuredStringPostData(string $name): string {
    $data = $_POST[$name] ?? '';
    return strip_tags($data);
}

/**
 * Return a secured int POST data by provided name.
 * @param string $name
 * @param int $defaultValue
 * @return int
 */
function getSecuredIntPostData(string $name, int $defaultValue = 0): int {
    $data = $_POST[$name] ?? $defaultValue;
    return (int)$data;
}