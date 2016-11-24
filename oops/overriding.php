<?php
class A
{
	public function show1()
	{
			echo "show1 function of class A"."<br>";
	}
}
class B extends A
{
	public function show1()
	{
			parent::show1();
			echo "show1 function of class B"."<br>";
	}
}
$ob= new B();
$ob->show1();
?>