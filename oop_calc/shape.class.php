<?php
abstract class Shape{
	public $shapeName;
	abstract function area();
	abstract function perimeter();
	
	/**
	 * 校验输入的值
	 * @param unknown $value
	 * @param string $message
	 */
	protected function validate($value, $message = '输入的值'){
		if ($value == "" || !is_numeric($value) || $value < 0) {
			$message = $this->shapeName.$message;;
			echo '<font color="red">'.$message.'必须为正数！</font><br/>';
			return false;
		} else {
			return true;
		}
	}
}