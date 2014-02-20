<?php

/*
 * This file is part of the valueobjects-geography package.
 *
 * (c) Sébastien HOUZÉ <sebastien@verylastroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpLabs\ValueObjects\Utils;

/**
 * @author Sébastien HOUZÉ <sebastien@verylastroom.com>
 */
abstract class Assembler
{
    public static function getArrayValueFromKeyOrNull($array, $key)
    {
        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        return null;
    }
}
