<?php
class A
{
		private $a,$b;
		
		public function getval($x,$y)
		{
				$this->a=$x;
				$this->b=$y;
		}
		public function add()
		{
				return $this->a+$this->b;
		}
}
class B extends A
{
	public function avg()
	{
			$this->getval(10,20);
			$t=$this->add();
			return $t/2;
	}
}
$ob= new B();
//$ob->getval(10,20);
echo $c=$ob->avg();

?>