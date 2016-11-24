<?php
class A
{
/*		function A()
		{	
			echo "constructor" ;
		}*/
		public function  show()
		{
				echo "public function of class A";
		}
		function __construct($a,$b)
		{
			
			echo $a+$b;
		}
		function __destruct()
		{
				echo "destructor";
		}
		
}
$ob= new A(10,20);

$ob->show();
?>