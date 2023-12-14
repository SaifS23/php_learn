<?php
class Parents{

    public function public(){
        echo 'Public Function in Chaka';
    }
    protected function protect(){
        echo 'Protected Function';
    }
    private function private(){
        echo 'Private Function';
    }
}

class Child extends Parents {
    public function chld(){
        $this->protect();
        echo ' _This is child class in Chaka';
    }
    
}


?>