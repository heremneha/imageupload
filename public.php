<?php
class test{
    public $abc ='neha';
    public $xyz;
    public function xyz($a)
        {
       echo $a;
        }
    }
    $obja=new test();
    echo $obja->abc;
    echo "<br>";
    $obja->xyz(5);
?>
