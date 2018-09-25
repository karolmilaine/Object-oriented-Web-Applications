<?php
require_once("social.php");

interface component{
	//public function addData($id, $title, $text);
	public function render();
	public function returnTitle();

}
class picNews implements component{
	private $id;
	private $title;
	private $text;
	private $pic;
	private $likes;

	function __construct ($id,$title, $text, $pic){
		$this->id=$id;
		$this->title=$title;
		$this->text=$text;
		$this->pic=$pic;
		$this->likes = new Likes(0);
	}
function render(){
	$html="<div style='min-width: 200px; max-width: 350px'>";
	$html.="<h2>".$this->title."</h2>";
	$html.="<img src='".$this->pic."'>";
	$html.="<p>".$this->text."</p>";
	$html .= $this->likes->renderHandler($this->id); //like nupp nn
	$html.="</div>";

	return $html;
}
function returnTitle(){
	return $this->title;
}
}
class quickNews implements component{
	private $id;
	private $title;
	private $text;
	private $likes;

	function __construct($id, $title, $text){
		$this->id = $id;
		$this->title = $title;
		$this->text = $text;
		$this->likes = new Likes(0);
	}
	function render(){
		$html="<div style='min-width: 200px; max-width: 350px'>";
		$html.="<h1>".$this->title."</h1>";
		$html.="<p>".$this->text."</p>";
		$html.=$this->likes->renderHandler($this->id);
		$html.="</div>";
		return $html;
	}
	function returnTitle(){
		return $this->title;
	}
}
?>
