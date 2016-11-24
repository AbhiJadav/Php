<?php
abstract class A
{
	public abstract function show();
	public function show1()
	{
			echo "show1 function of class A"."<br>";
	}
}
class B extends A
{
	public function show()
	{
			echo "show function of class B"."<br>";
	}
}
$ob= new B();
$ob->show();
$ob->show1();
?>