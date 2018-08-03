<?php
class test{
    protected $pr;
    public $a;
    protected function testparent($neha){
        echo $neha;
    }
}
class child extends test{
    public function testchild()
    {
    $this->testparent();
    }
}
$objparent = new test();
$objparent->testParent("hello");
//$objChild = new Child();
//$objChild->setChild();
?>
