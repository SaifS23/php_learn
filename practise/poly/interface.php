<?php

interface Run
{
    public function fast();
}
interface Flyable
{
    public function fly();
}

class penguin implements Run
{ 
    public function fast()
    {
        echo "it can run ";
    }
}

class doyel implements Run,Flyable
{
    public function fast()
    {
        echo "it can run ";
    }
    public function fly()
    {
        echo "it can fly ";
    }
}

$pen= new penguin;
$pen->fast();
?>
<br>
<?php
$doyl=new doyel;
$doyl->fly();
$doyl->fast();

?>