<?php
class Form{
	//表单提交位置
	private $mAction;
	//选择的图形形状
	private $mShape;
	
	function __construct($action) {
		$this->mAction = $action;
		//默认为矩形
		$this->mShape = isset($_GET['action']) ? $_GET['action'] : 'rect';
	}
	
	function __toString(){
		$form = '<form action="'.$this->mAction.'?action='.$this->mShape.'" method="post">';
		//利用PHP可变变量名特性获取图形的输入表单 
		$shapeMethod = "get".ucfirst($this->mShape);
		$form .= $this->$shapeMethod(); // getXXX
		
		$form .= '<br/> <input type="submit" name="sub" value="计算"> <br/>';
		$form .= '</form>';
		return $form;
	}
	
	/**
	 * 获取矩形表单输入
	 */
	private function getRect() {
		$input = '<b>请输入 | 矩形 | 的宽度和高度 : </b><p/>';
		$input .= '宽度: <input type="text" name="width" value="'.$_POST['width'].'"><br/>';
		$input .= '高度: <input type="text" name="height" value="'.$_POST['height'].'"><br/>';
		return $input;
	}
}