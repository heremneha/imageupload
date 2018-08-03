<?php
class test{
    public $abc='neha';
    private $xyz;
    public function pubDo($a)

    {
        echo $a;
    }
    private function privdo($b)
    {
        echo $b;
    }
    public function privpubdo(){
        $this->xyz=1;
        $this->privdo(1);
    }
}
$obj=new Test();
echo $obj->abc;
//$obj->xyz;
$obj->pubDo("test");
$obj->privdo("sweety");
$obj->privpubdo();
?>
