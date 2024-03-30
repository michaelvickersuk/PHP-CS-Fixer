<?php

namespace Vendor\Package;

use FooInterfaceA;
use FooInterfaceB;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

use function foo;

use const BAR;

class Foo extends Bar implements FooInterfaceA
{
    use FooTrait;
    use BarTrait;

    public $aaa = 1;
    public $bbb = 2;

    public function sampleFunction($a, $arg1, $arg2, $arg3, $foo, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a    >    $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }

        $combined = $a . $b;

        static::baz();
    }

    final public static function bar()
    {
        // method body
    }
}

class Aaa implements
    Bbb,
    Ccc,
    Ddd {}

$a = new Foo();
$b = (bool) 1;
$c = true ? (int) '1' : 2;

$fn = fn($a) => $a;

$arrayNotMultiline = ['foo' => 'bar', 'foo2' => 'bar'];
$arrayMultiline = [
    'foo' => 'bar',
    'foo2' => 'bar',
];

$arrayMultilineWithoutComma = [
    'foo' => 'bar',
    'foo2' => 'bar',
];
$heredocMultilineWithoutComma = [
    'foo',
    <<<EOD
        bar
        EOD,
];
argumentsMultilineWithoutComma(
    1,
    2,
);
function parametersMultilineWithoutComma(
    $x,
    $y,
) {}
$matchMultilineWithoutComma = match ($a) {
    1 => 0,
    2 => 1,
};
