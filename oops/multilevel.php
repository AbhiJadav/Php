<?php
class A
{
	public function show()
	{
			$this->dis();
			
			echo "public function of class A"."<br>";
	}
	private function dis()
	{
			echo "private function of class A"."<br>";
	}
	protected function display()
	{
		echo "protected function of class A"."<br>";
	}
}
class B extends A
{
	public function show1()
	{
			echo "public function of class B"."<br>";
			
	}
}
class C extends B
{
		public function show2()
		{
				$this->display();
				echo "public function of class C"."<br>";
		}
}

$ob = new C();
$ob->show();
$ob->show1();
$ob->show2();
//$ob->display();

?>