<?php
class A
{
		public function display()
		{
				show();
				echo "display function";
		}
		private function show()
		{
				echo "Private function";
		}
}
$obj = new A();
$obj->display();
?>