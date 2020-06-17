<?php

declare(strict_types=1);

/**
 * Returns absolute base path of phar file.
 *
 * @return string
 */
function base_phar_path(): string {
    return preg_replace(['/phar:\/\//', '/stella$/'], ['', ''], base_path());
}

/**
 * Returns absolute phar path for sqlite file.
 *
 * @param string $path
 * @return string
 */
function database_phar_path(string $path = 'database.sqlite'): string {
    return base_phar_path() . $path;
}
