<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

class SimpleClass
{
    // プロパティの宣言
    public $var = 'a default value';

    // メソッドの宣言
    public function displayVar() {
        echo $this->var;
    }
}

$a = new A();
$a->foo();

A::foo();

$b = new B();
$b->bar();

B::bar();

$c = new SimpleClass();
$c->displayVar();

SimpleClass::bar();
