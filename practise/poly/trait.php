<?php
trait Number{
    public function one(){
        echo "print it one   ";
    }
    public function three(){
        echo "print it three  ";
    }
    public function two(){
        echo "print it two   ";
    }
}
trait Alphabet{
    public function name(){
        echo "Print the name   ";
    }
    public function place(){
        echo "Print the Birth place ";
    }
}

class nmbr{
    use Number,Alphabet;
}

$numeric=new nmbr();
$numeric->one();
$numeric->three();
$numeric->name();
$numeric->place();

$str =new nmbr();
$str->place();

?>