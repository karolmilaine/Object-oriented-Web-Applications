<?php
require_once("components.php");

interface mainContainer extends component{
	public function addNews(component $news);
	public function listNews();
	public function render();
}

class horzContainer implements mainContainer{
	
	private $news=[];
	private $containerTitle;
	
	public function addNews(component $news){
		array_push($this->news, $news);
	}
	public function listNews(){
		$html="";
		foreach($this->news as $news){
			$html.="<p>".$news->returnTitle()."</p><br>\n";
		}
		return $html;
	}
	public function returnTitle(){
		return $this->containerTitle;
	}
public function render(){
	$html="<section style='display: flex; justify-content: space-between; flex-wrap: wrap;'>";
	foreach($this->news as $news){
		$html.=$news->render();
	}
	$html.="</section>";
	return $html;
}
}
class vertContainer implements mainContainer{
	
	private $news=[];
	private $containerTitle;
	
	public function addNews(component $news){
		array_push($this->news, $news);
	}
	public function listNews(){
		$html="";
		foreach($this->news as $news){
			$html.="<p>".$news->returnTitle()."</p><br>\n";
		}
		return $html;
	}
	public function returnTitle(){
		return $this->containerTitle;
	}
public function render(){
	$html="<section>";
	foreach($this->news as $news){
		$html.=$news->render();
	}
	$html.="</section>";
	return $html;
}
}

?>