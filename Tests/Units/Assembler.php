<?php

namespace PhpLabs\ValueObjects\Utils\Tests\Units;

use PhpLabs\ValueObjects\Utils\Assembler as TestedAssembler;
use mageekguy\atoum;

class Assembler extends atoum\test
{
    public function testGetArrayValueFromKeyOrNull($array, $key, $expectedResult)
    {
        $this
            ->variable(TestedAssembler::getArrayValueFromKeyOrNull($array, $key))
            ->isIdenticalTo($expectedResult)
        ;
    }

    protected function testGetArrayValueFromKeyOrNullDataProvider()
    {
        return [
            [[], 0, null],
            [['foo'], 0, 'foo'],
            [['foo'], 1, null],
            [['foo' => 'bar'], 'foo', 'bar'],
            [['foo' => 'bar'], 'baz', null],
        ];
    }
}
