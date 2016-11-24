<?php
class A
{
	public function show()
	{
			$this->dis();
			
			echo "public function of class A";
	}
	private function dis()
	{
			echo "private function of class A";
	}
	protected function display()
	{
		echo "protected function of class A";
	}
}
class B extends A
{
	public function show1()
	{
			echo "public function of class B";
			$this->display();
	}
}
$ob = new B();
$ob->show();
$ob->show1();
//$ob->display();

?>