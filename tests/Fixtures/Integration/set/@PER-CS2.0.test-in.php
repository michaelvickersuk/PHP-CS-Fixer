<?
namespace Vendor\Package;
use const BAR;
use function foo;
use \FooInterfaceA, FooInterfaceB;
use \BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;
class Foo extends Bar implements FooInterfaceA{

    var $aaa = 1, $bbb = 2;

    public function sampleFunction($a, $arg1, $arg2, $arg3, $foo, $b = null)
    {
        if ($a === $b) {
            bar();
        } else if ($a    >    $b) {
            $foo->bar($arg1);
        } else {
                BazClass::bar($arg2, $arg3);
        }

        $combined = $a.$b;

        STATIC::baz();
    }

    use FooTrait, BarTrait;

    static public  final function bar() {
    // method body
    }
}

class Aaa implements
    Bbb, Ccc,
    Ddd
    {
    }

$a = new Foo;
$b = (  boolean  )   1;
$c = true  ? (INT) '1'  :  2;

$fn = fn ($a) => $a;

$arrayNotMultiline = ['foo' => 'bar', 'foo2' => 'bar'];
$arrayMultiline = [
'foo' => 'bar',
'foo2' => 'bar',
];

$arrayMultilineWithoutComma = [
    'foo' => 'bar',
    'foo2' => 'bar'
];
$heredocMultilineWithoutComma = [
    'foo',
    <<<EOD
        bar
        EOD
];
argumentsMultilineWithoutComma(
    1,
    2
);
function parametersMultilineWithoutComma(
    $x,
    $y
) {}
$matchMultilineWithoutComma = match ($a) {
    1 => 0,
    2 => 1
};

?>
