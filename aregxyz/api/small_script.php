<?php
class A {
    private $privateInstanceMember = '[prop]$this->$privateInstanceMember'."\n";

    function __construct() {
        echo $this->$privateInstanceMember;
    }
}
class B extends A {
    function __construct() {
        echo 'B::__construct() was run'."\n"
new B();
?>
