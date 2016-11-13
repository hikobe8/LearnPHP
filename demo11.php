<?php
	/**
	 * @author Ray
	 *
	 */
	class User{
		private $name;
		private $age;
		private $sex;
		
		function __construct(){
			
		}
		
		public function __set($propertyName, $propertyValue){
			switch ($propertyName) {
				case "sex":
					if ($propertyValue != "男" || $propertyValue != "女") {
					 	return ;
					}
					break;
				case "age":
					if (!is_int($propertyValue))
						return ;
					break;
				default:
					;
			}
			$this->$propertyName = $propertyValue;
		}
		
		public function say(){
			echo '我的名字是'.$this->name.'，年龄:'.$this->age.'性别:'.$this->sex.'<br/>';
		}
	}
	
	$user = new User();
	$user->name = '川普';
	$user->age = 65;
	$user->sex = '男';
	$user->__set("name", "希拉里");
	$user->__set("sex", "ni");
	$user->say();