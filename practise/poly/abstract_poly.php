<?php

abstract class Animal{
    public $name;
    public $age;

    abstract function hi(string $name):string;
    abstract function Great();

}
// in abstract class we must need to use abstract method/function also

class cat extends Animal{
    public function hi(string $name):string
    {
        return "hi it's cat". $name;
    }
    public function Great()
    {
        echo 'lion';
    }
}
class dog extends Animal{
    public function hi(string $name):string
    {
        return "hi it's dog". $name;
    }
    public function Great()
    {
        echo 'lion';
    }
}

 $pet = new cat(); 
 $pet->hi('jully');

$petty = new dog();
$petty->hi('cais');

?>