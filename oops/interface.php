<?php
interface i1
{
		public function dis();
}
interface i2 extends i1
{
		public function dis1();
}
class A implements i2
{
		public function dis()
		{
				echo "dis function of class A"."<br>";
		}
		public function dis1()
		{
				echo "dis1 function of class B";
		}		
}
$ob=new A();
$ob->dis();
$ob->dis1();
?>